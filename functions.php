<?php

function codespread_files(){
    
    wp_enqueue_style('index_styles', get_theme_file_uri('/css/index-style.css'));
    wp_enqueue_style('page_styles', get_theme_file_uri('/css/page-style.css'));
    wp_enqueue_style('main_styles', get_theme_file_uri('/css/header-style.css'));
    wp_enqueue_style('footer_styles', get_theme_file_uri('/css/footer-style.css'));
    wp_enqueue_style('developers_styles', get_theme_file_uri('/css/developers-style.css'));
    wp_enqueue_style('about_styles', get_theme_file_uri('/css/about-style.css'));
    wp_enqueue_style('contact_styles', get_theme_file_uri('/css/contact-style.css'));
    wp_enqueue_style('general_styles', get_theme_file_uri('/css/general-style.css'));
    wp_enqueue_style('mobile_styles', get_theme_file_uri('/css/mobile-style.css'));

    //Jquery and Script
    wp_enqueue_script('general_scripts', get_theme_file_uri('/scripts/script.js'), array('jquery'));
    wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js');

    //Jquery UI
    wp_enqueue_script('jquery-ui', '//code.jquery.com/ui/1.13.1/jquery-ui.js');

    //bxSlider
    wp_enqueue_style('bxslider-style', '//cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css');
    wp_enqueue_script('bxslider-js', '//cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js');

    //Roboto Font
    wp_enqueue_style('roboto-font', '//fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
    //MUI Icons
    wp_enqueue_style('mui-icons', '//fonts.googleapis.com/icon?family=Material+Icons');
    //Font Awesome
    wp_enqueue_script('fa-icons', '//kit.fontawesome.com/91b81ca322.js');


}

add_action('wp_enqueue_scripts', 'codespread_files');

function codespread_features(){
    register_nav_menu('headerMenu', 'Header Menu');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'codespread_features');
add_filter('ai1wm_exclude_content_from_export', 'ignoreCertainFiles');

function ignoreCertainFiles($exclude_filters){
    $exclude_filters[] = 'themes/codespread-theme/node_modusles';
    return $exclude_filters;
}
