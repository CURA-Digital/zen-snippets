<?php

// Prevent direct file access
if (!defined('ABSPATH')) {
    exit;
}

// Images - Add Custom Image Sizes
add_image_size( 'one-third', 854, 0, false );
add_image_size( 'post-friendly', 425, 0, false );

// Images - Make Additional Image Sizes Selectable In Editor
add_filter( 'image_size_names_choose', 'cura_custom_sizes' );
 
function cura_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
		'one-third' => __( 'One Third' ),
		'post-friendly' => __( 'Post Friendly' ),
    ) );
}