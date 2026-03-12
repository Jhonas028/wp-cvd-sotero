<?php

function cvd_theme_support() {
    add_theme_support('custom-logo');
    add_theme_support('title');
    add_theme_support('post-thumbnails');
    add_image_size('mobile', 350, 350, true);
}

add_action('init', 'cvd_theme_support');
