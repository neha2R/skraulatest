
<style>
 .search-field{
        
    width: 200px !important;
    font-size: 9px;
    padding: 6px 8px 6px 8px;
    
    }
</style>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'skrau' ); ?></span>
		<input type="search"  class="search-field" placeholder="<?php echo esc_attr_x( 'Search here &hellip;', 'placeholder', 'skrau' ); ?>" value="<?php echo get_search_query(); ?>" name="s"  style="border:none;"/>
	</label>
	<!--<button type="submit" class="search-submit"><span class="screen-reader-text"><?php //echo _x( 'Search', 'submit button', 'skrau' ); ?></span></button>-->
</form>