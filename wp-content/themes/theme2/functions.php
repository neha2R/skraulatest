<?php




function load_stylesheet()
{
	// wp_register_style('font',get_template_directory_uri().'/fonts/beyond_the_mountains-webfont.css',array(),1,'all');
	// wp_enqueue_style('font');


	wp_register_style('bootstrap',get_template_directory_uri().'/plugin-frameworks/bootstrap.min.css',array(),1,'all');
	wp_enqueue_style('bootstrap');

	wp_register_style('bootstrap-theme',get_template_directory_uri().'/plugin-frameworks/bootstrap-theme.min.css',array(),1,'all');
	wp_enqueue_style('bootstrap-theme');

	wp_register_style('custom',get_template_directory_uri().'/plugin-frameworks/custom.css',array(),1,'all');
	wp_enqueue_style('custom');

	wp_register_style('CustomNew',get_template_directory_uri().'/plugin-frameworks/CustomNew.css',array(),1,'all');
	wp_enqueue_style('CustomNew');

	wp_register_style('menu-style',get_template_directory_uri().'/plugin-frameworks/menu/style.css',array(),1,'all');
	wp_enqueue_style('menu-style');
	

	
	wp_register_style('styles',get_template_directory_uri().'/common/styles.css',array(),1,'all');
	wp_enqueue_style('styles');


}

add_action('wp_enqueue_scripts','load_stylesheet');

add_filter( 'relevanssi_modify_wp_query', 'rlv_force_post_types' );
function rlv_force_post_types( $query ) {
    $query->query_vars['post_types'] = 'post,page';
    return $query;
}

// add js
function addjs(){
	//wp_deregister_script('jquery');


	wp_register_script('myjs',get_template_directory_uri().'/plugin-frameworks/my.js',array(),1,1,1);
	wp_enqueue_script('myjs');

	wp_register_script('jquery-1.10.2.min',get_template_directory_uri().'/plugin-frameworks/jquery-1.10.2.min.js',array(),1,1,1);
	wp_enqueue_script('jquery-1.10.2.min');

	wp_register_script('jqueryjs',get_template_directory_uri().'/plugin-frameworks/jquery.js',array(),1,1,1);
	wp_enqueue_script('jqueryjs');

	wp_register_script('bootstrap_js',get_template_directory_uri().'/plugin-frameworks/bootstrap.js',array(),1,1,1);
	wp_enqueue_script('bootstrap_js');
	
	wp_register_script('menu-jquery-min-js',get_template_directory_uri().'/plugin-frameworks/menu/jquery.min.js',array(),1,1,1);
	wp_enqueue_script('menu-jquery-min-js');

    wp_register_script('menu-script',get_template_directory_uri().'/plugin-frameworks/menu/script.js',array(),1,1,1);
	wp_enqueue_script('menu-script');

wp_enqueue_script('ajax', get_template_directory_uri().'/plugin-frameworks/scriptajax.js', array('jquery'), NULL, true);
    wp_localize_script('ajax', 'wpAjax',
    array('ajaxUrl' => admin_url('admin-ajax.php'))
);

	

	
	

// 	wp_register_script('angular-min',get_template_directory_uri().'/plugin-frameworks/angular.min.js',array(),1,1,1);
// 	wp_enqueue_script('angular-min');

// 	wp_register_script('angular-sanitize',get_template_directory_uri().'/plugin-frameworks/angular-sanitize.min.js',array(),1,1,1);
// 	wp_enqueue_script('angular-sanitize');
	
// 	wp_register_script('owl-carousel',get_template_directory_uri().'/plugin-frameworks/owl/owl.carousel.min.js',array(),1,1,1);
// 	wp_enqueue_script('owl-carousel');

// 	wp_register_script('owl-script',get_template_directory_uri().'/plugin-frameworks/owl/script.js',array(),1,1,1);
// 	wp_enqueue_script('owl-script');

// 	wp_register_script('smoothscroll',get_template_directory_uri().'/plugin-frameworks/smoothscroll.js',array(),1,1,1);
// 	wp_enqueue_script('smoothscroll');

// 	wp_register_script('jquery.easing',get_template_directory_uri().'/plugin-frameworks/jquery.easing.min.js',array(),1,1,1);
// 	wp_enqueue_script('jquery.easing');

// 	wp_register_script('jquery-ticker',get_template_directory_uri().'/plugin-frameworks/jquery.easy-ticker.js',array(),1,1,1);
// 	wp_enqueue_script('jquery-ticker');

	
	
	
	

	
	
	
	
	



   


}
add_action('wp_enqueue_scripts','addjs');


add_theme_support('menus');   //for adding menus
add_theme_support('post-thumbnails'); //for adding featured image



add_action('wp_ajax_nopriv_filter', 'filter_ajax');
add_action('wp_ajax_filter', 'filter_ajax');
function filter_ajax(){
    $start = 1;
     $endpost = 10 ;
    $category = $_POST['category'];
    $args= array(
        'post_type'=>'post',
    'posts_per_page'=>-1,
'order' => 'ASC',
'category_name' => 'skrau-tenders,office-orders,recruitment-advertisement,latest-skrau-news,skrau-publications'
    

    );
    if(isset($category)){
        $args['category__in'] = array($category);

    }
    $query = new WP_Query($args);
if($query->have_posts()):
    
    while($query->have_posts()): $query->the_post();
   
    ?>
    <div class="col-md-12 all-content" id="limitid<?php echo $start; ?>" style="display:none; margin-bottom: 35px;">
    <h4 class="heading_news_events"><i class="fa fa-calendar calender-icon" aria-hidden="true" style="color:red;"></i>&nbsp; Posted On <?php echo get_the_date();?> </h4>
    <p class="subheading_news_events"> <b><?php the_title();?> </b></p>
    <a href="<?php echo get_permalink($post->ID);?>"><?php echo wp_trim_words(get_the_content(), 10);?></a>
    </div>
   
    


    


   
<?php 
$start ++;?>

<?php
endwhile;?>
 
 


<?php endif;?>

<?php
wp_reset_postdata(); ?>

<?php
die();
}


function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'my-custom-menu' => __( 'My Custom Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );


//adding project in dashboard
function gt_project(){
	register_post_type('project',
    array(
     'rewrite'=>array('slug'=>'projects'),
     'labels'=>array(
        'name'=>'projects',
        'singular_name'=>'project',
        'add_new_item'=>'Add New Project',
        'edit_item'=>'Edit Project'
     ),
     'menu-icon'=>'dashicons-clipboard',
     'public'=>true,
     'has-archive'=>true,
     'supports'=>array(
        'title','thumbnail','editor','excerpt','comments'
     )
    )
);
}
add_action('init','gt_project');


//adding widgets in dashboard
function gt_widgets(){
	register_sidebar(
    array(
     'name'=>'Main Sidebar',
     'id'=>'main_sidebar',
     'before_title'=>'<h3>',
     'after_title'=>'<h3>'
	),
	
	array(
     'name'=>'Second Sidebar',
     'id'=>'second_sidebar',
     'before_title'=>'<h3>',
     'after_title'=>'<h3>'
	)
	);
}
add_action('widgets_init','gt_widgets');




function my_acf_input_admin_footer() {
	
?>
<script type="text/javascript">
(function($) {
		          
acf.add_action('wysiwyg_tinymce_init', function( ed, id, mceInit, $field ){
    		        	$('#wp-'+id+'-editor-container .mce-statusbar').append('<div class="acfcounter" style="background-color: red; color: #444; padding: 2px 10px; font-size: 12px; border-top: 1px solid #e5e5e5;"><span class="words" style="font-size: 12px; padding-right: 30px;"></span><span class="chars" style="font-size: 12px;"></span></div>');


	counter = function() {

	    var value = $('#acf-editor-84').val();
	    if (value.length == 0) {
	        $('#wp-'+id+'-editor-container .mce-statusbar .acfcounter .words').html('Word Count: 0');
	        $('#wp-'+id+'-editor-container .mce-statusbar .acfcounter .chars').html('Characters: 0');
	        return;
	    }
	
	    var regex = /\s+/gi;
	    var wordCount = value.trim().replace(regex, ' ').split(' ').length;
	    var totalChars = value.length;

	    $('#wp-'+id+'-editor-container .mce-statusbar .acfcounter .words').html('Word Count: '+wordCount);
	    $('#wp-'+id+'-editor-container .mce-statusbar .acfcounter .chars').html('Characters: '+totalChars);
          if(wordCount>138)
          {
                 
	        		        	tinyMCE.get('acf-editor-84').getBody().setAttribute('contenteditable', false);


          }
	};

    $('#wp-'+id+'-editor-container .mce-statusbar .acfcounter .words').html('Word Count: 0');
    $('#wp-'+id+'-editor-container .mce-statusbar .acfcounter .chars').html('Characters: 0');

    $('#acf-editor-84').change(counter);
    $('#acf-editor-84').keydown(counter);
    $('#acf-editor-84').keypress(counter);
    $('#acf-editor-84').keyup(counter);
	$('#acf-editor-84').blur(counter);
    $('#acf-editor-84').focus(counter);

	
});

})(jQuery);	
</script>
<?php
		
}

add_action('acf/input/admin_footer', 'my_acf_input_admin_footer');

?>




