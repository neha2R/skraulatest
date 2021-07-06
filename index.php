<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';
// <?php $referrer = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

// if (preg_match("/http://neologicx.in/sku/",$referrer) ) {
//     define('WP_USE_THEMES', true);
//     require( dirname( __FILE__ ) . '/wp-blog-header.php' );
//     $R=1;
// } else {
//     header('Location: http://neologicx.in/sku/splash.html');
// }; 
//  define('WP_USE_THEMES', true);
//     require( dirname( __FILE__ ) . '/wp-blog-header.php' );
  
// ?>
