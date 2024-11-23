<?php

// Prevent direct file access
if (!defined('ABSPATH')) {
    exit;
}

function remove_x_image_sizes() {
    remove_image_size('entry');
    remove_image_size('entry-cropped');
    remove_image_size('entry-fullwidth');
    remove_image_size('entry-cropped-fullwidth');
    remove_image_size('1536x1536');
    remove_image_size('2048x2048');
  }
  add_action('init', 'remove_x_image_sizes');