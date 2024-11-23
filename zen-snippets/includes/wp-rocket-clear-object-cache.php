<?php

// Prevent direct file access
if (!defined('ABSPATH')) {
    exit;
}

// Clear object cache when flushing WP-Rocket 
add_action('rocket_after_clean_domain', 'custom_wp_rocket_additional_cache_flush');
function custom_wp_rocket_additional_cache_flush() {
    wp_cache_flush();
}