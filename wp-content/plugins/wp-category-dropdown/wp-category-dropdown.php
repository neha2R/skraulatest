<?php
/*
Plugin Name: WordPress Category Dropdown
Plugin URI: http://www.gcsdesign.com
Description: The plugin loads sub category dropdown based on the selected parent category
Version: 1.4
Author: Chandrika Guntur
Author URI: http://www.gcsdesign.com
Plugin URI: https://www.gcsdesign.com/wp_category_dropdown
Text Domain: wpcd
*/

//Required Files
require_once( plugin_dir_path( __FILE__ ) . 'required_files.php' );

register_activation_hook(__FILE__, 'wpcd_set_plugin_active');

//Setting the transiet variable when plugin is active
function wpcd_set_plugin_active(){
    set_transient('wpcd_active', 'true');
}

//Adding settings link on the plugins page
function wpcd_plugin_action_links( $links ) {
  //Check transient. If it is available, display the settings and license link
  if(get_transient('wpcd_active')){
    $docs_url = "https://www.gcsdesign.com/wp-category-dropdown/";
    $docs_link = '<a href="' . $docs_url . '" target="_blank">' . __('Documentation', 'wpcd') . '</a>';
    array_unshift( $links, $docs_link );
  }
  return $links;
}
add_action( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'wpcd_plugin_action_links' );

function wp_cat_dropdown_block_scripts() {
	$asset_file = include( plugin_dir_path( __FILE__ ) . 'build/index.asset.php');	
	wp_register_script(
		'wp-cat-drop-blocks',
		plugins_url( 'build/index.js', __FILE__ ),
		$asset_file['dependencies'],
		$asset_file['version']
	);
	wp_enqueue_script('wp-cat-drop-blocks');
	//wp_localize_script( 'bd-blocks', 'wpAjax', array( 'wpurl' => get_bloginfo('wpurl') ) );
}
add_action( 'enqueue_block_editor_assets', 'wp_cat_dropdown_block_scripts', 30 );


//Create a shortcode to display the categories dropdown
function wpcd_child_category_dropdown( $atts ) {
	//header("Content-Type: application/javascript");
	wp_register_script('wpcd-scripts', plugins_url('js/scripts.js', __FILE__), array('jquery'), null );
	wp_localize_script("wpcd-scripts", 'wpcdHome', array('homeUrl' => esc_url(home_url() ) ) );

    wp_localize_script( 'wpcd-scripts', 'wpcdajax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );

  wp_enqueue_script( 'jquery' );
  wp_enqueue_script('wpcd-scripts');

  	// Set our default attributes
	extract( shortcode_atts(
		array(
		'orderby' => 'name', // options: date, modified, menu_order, rand
		'order' => 'ASC',
		'showcount' => 0,
		'hierarchical' => 1,
		'hide_empty' => 1, //can be 0
		'exclude' => '',
		'include'	=> '',
		'default_option_text'	=> __('Parent Category', 'wpcd'),
		'default_option_sub'	=> __('Child Category', 'wpcd'),
        'category'	=>	'category'
		), $atts )
	);

	$taxonomy = $category;
	$args = array(
		'taxonomy' => $taxonomy,
		'orderby' => $orderby,
		'order' => $order,
		'show_count' => $showcount,
		'hierarchical' => $hierarchical,
		'hide_empty' => $hide_empty,
		'child_of' => 0,
		'depth'	=> 1,
		'exclude' => $exclude,
		'include'	=> $include,
		'echo' => 0,
		'title_li' => '',
		'name'	=> 'wpcd_parent',
		'id'	=>	'wpcd_parent',
        'show_option_none'	=> $default_option_text
	);

  $categories = '<p>'. wp_dropdown_categories($args) . '</p>';
	//This div is hidden and has the default option text for hte sub category dropdown.
	$categories .= '<div id="child_cat_default_text">' . $default_option_sub . '</div>';
	//This hidden div has the taxonomy mentioned in the shortcode.
    $categories .= '<div id="taxonomy">' . $taxonomy . '</div>';
    if(isset($exclude)){
        if(is_array($exclude)){
            $exclude_cats = implode( ",", $exclude );
        }else{
            $exclude_cats = $exclude;
        }
    }else{
        $exclude_cats = '';
    }
	if(isset($inlcude)){
        if(is_array($include)){
            $include_cats = implode(",",$include);
        }else{
            $include_cats = $include;
        }
    }else{
        $include_cats = '';
    }
	
	$categories .= '<div id="exclude">' . $exclude_cats . '</div>';
	$categories .= '<div id="include">' . $include_cats . '</div>';
	//This div will show when the Ajax is working. You can also use a gif instead of text.
	$categories .= '<div id="wpcd_child_cat_loader">Loading....</div>';
	//This is the div where the child category dropdown is populated
	$categories .= '<div id="child_cat_dropdown"></div>';
  return $categories;
	//$first_call = FALSE;
}
add_shortcode( 'wpcd_child_categories_dropdown', 'wpcd_child_category_dropdown' );

function wpcd_show_child_cat_dropdown(){
    $response = '';
	if (isset($_GET['parent_cat'])) {
        $parent_cat = sanitize_text_field($_GET['parent_cat']);
		$parent_cat = intval($parent_cat);
    }

	if(isset($_GET['child_cat_default_text'])){
		$child_cat_default_text = sanitize_text_field($_GET['child_cat_default_text']);
	}

	if(isset($_GET['taxonomy'])){
		$taxonomy = sanitize_text_field($_GET['taxonomy']);
		if(!taxonomy_exists($taxonomy)){
			$taxonomy = 'category';
		}
	}else{
		$taxonomy = 'category';
	}

	if(isset($_GET['child_cats_exclude'])){
		$child_cats_exclude = sanitize_text_field($_GET['child_cats_exclude']);
	}

	if(isset($_GET['child_cats_include'])){
		$child_cats_include = sanitize_text_field($_GET['child_cats_include']);
	}

    $parent_category = get_term($parent_cat, $taxonomy);
	$parent_cat_slug = $parent_category->slug;

	$cat_has_child = get_term_children($parent_cat, $taxonomy);

	if($parent_cat == ''){
		$response = "No category selected";
	}else if(empty($cat_has_child)){
		//If the selected category does not have a child, the user will be redirected to the category page
		if ( $taxonomy == "product_cat" ) {
			$wc_permalinks = get_option( 'woocommerce_permalinks' );
			$category_base = $wc_permalinks['category_base'];
			$taxonomy = $category_base;
		}
        //If there is a custom category base set, get that from the options
        if($taxonomy == 'category'){
            $category_base = get_option('category_base');
            if(isset($category_base) && $category_base != ''){
                $taxonomy = $category_base;
            }
        }

		?>
		<script type="javascript">
		<?php
			$cat_url = home_url() . "/" . $taxonomy;
			/*if($taxonomy == 'category'){
				$cat_url = get_category_link($parent_cat_slug);
			}else{
				$cat_url = get_term_link($parent_cat_slug);
			}*/

			?>
			var cat_url_base = "<?php echo $cat_url; ?>";
			var current_cat_slug = "<?php echo $parent_cat_slug; ?>";
			var cat_url = cat_url_base + '/' + current_cat_slug;
			window.location.replace(cat_url);
		</script>
		<?php
	}else{
		//If the selected category has a child category, then a second dropdown is displayed
		$args = array(
			'taxonomy' => $taxonomy,
			'orderby' => 'name',
			'order' => 'ASC',
			'show_count' => 0,
			'hierarchical' => 1,
			'hide_empty' => 0,
			'child_of' => $parent_cat,
			'echo' => 0,
			'title_li' => '',
			'name'	=> 'wpcd_child',
			'id'	=>	'wpcd_child',
			'show_option_none'	=> $child_cat_default_text,
			'value_field'      => 'slug',
			'exclude'	=> $child_cats_exclude,
            'include'	=> $child_cats_include,
		);
		if ( $taxonomy == "product_cat" ) {
			$wc_permalinks = get_option( 'woocommerce_permalinks' );
			$category_base = $wc_permalinks['category_base'];
			$taxonomy = $category_base;
		}

        if($taxonomy == 'category'){
            $category_base = get_option('category_base');
            if(isset($category_base) && $category_base != ''){
                $taxonomy = $category_base;
            }
        }

		$cat_url = home_url() . "/" . $taxonomy;
		$response = wp_dropdown_categories($args);
		?>
		<script type="javascript">
		$("#wpcd_child").change(function(){
			var selected_cat = $(this).val();
			var cat_url_base = "<?php echo $cat_url; ?>";
			var cat_url = cat_url_base + '/' + selected_cat;
			window.location.replace(cat_url);
		});
		</script>
		<?php
	}
	die($response);
}

add_action("wp_ajax_wpcd_show_child_cat_dropdown", "wpcd_show_child_cat_dropdown");
add_action("wp_ajax_nopriv_wpcd_show_child_cat_dropdown", "wpcd_show_child_cat_dropdown");
?>
