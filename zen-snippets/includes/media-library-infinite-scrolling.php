<?php

// Prevent direct file access
if (!defined('ABSPATH')) {
    exit;
}

add_filter( 'media_library_infinite_scrolling', '__return_true' );