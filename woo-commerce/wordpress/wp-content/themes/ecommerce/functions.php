<?php 

    function load_css_of_theme() {
        
        wp_enqueue_style("google-font",);
        wp_enqueue_style("normalize", get_stylesheet_directory_uri());
        wp_enqueue_style("style", get_stylesheet_directory_uri());
    }

    add_action("", "load_css_of_theme");