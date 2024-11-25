<?php

// Prevent direct file access
if (!defined('ABSPATH')) {
    exit;
}

if (is_admin()) {

    // Disable WordPress Administration Email verification Screen 
    add_filter( 'admin_email_check_interval', '__return_false' );

};