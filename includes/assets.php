<?php

function cvd_assets() {
    wp_enqueue_style('cvd-styles', get_template_directory_uri() . "/css/styles.css", microtime());
    wp_enqueue_style('cvd-icon', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css",1.0);
    wp_enqueue_script('cvd-script', get_template_directory_uri() . "/js/script.js", microtime(), [], true);
}

add_action('wp_enqueue_scripts', 'cvd_assets');