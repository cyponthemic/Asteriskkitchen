<?php
/*
Author: Ole Fredrik Lie
URL: http://olefredrik.com
*/
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

// Various clean up functions
require_once('library/cleanup.php');

// Required for Foundation to work properly
require_once('library/foundation.php');

// Register all navigation menus
require_once('library/navigation.php');

// Add menu walker
require_once('library/menu-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');

// Add Header image
require_once('library/custom-header.php');




if( class_exists( 'kdMultipleFeaturedImages' ) ) {

        $args = array(
                'id' => 'featured-image-2',
                'post_type' => 'page',      // Set this to post or page
                'labels' => array(
                    'name'      => 'Slide 2',
                    'set'       => 'Set featured image 2',
                    'remove'    => 'Remove featured image 2',
                    'use'       => 'Use as featured image 2',
                )
        );

        new kdMultipleFeaturedImages( $args );
}

if( class_exists( 'kdMultipleFeaturedImages' ) ) {

        $args = array(
                'id' => 'featured-image-3',
                'post_type' => 'page',      // Set this to post or page
                'labels' => array(
                    'name'      => 'Slide 3',
                    'set'       => 'Set featured image 2',
                    'remove'    => 'Remove featured image 2',
                    'use'       => 'Use as featured image 2',
                )
        );

        new kdMultipleFeaturedImages( $args );
}

add_action( 'after_setup_theme', 'baw_theme_setup' );
function baw_theme_setup() {
  add_image_size( 'small-slider', 640 ); // 640 pixels wide (and unlimited height)
  add_image_size( 'medium-slider', 1025, 768 ); // 1025 pixels wide (and unlimited height)
  add_image_size( 'large-slider', 1441, 800 ); // 1441 pixels wide (and unlimited height)
}
add_theme_support( 'post-thumbnails', array( 'post', 'page', 'movie', 'product' ) );
?>