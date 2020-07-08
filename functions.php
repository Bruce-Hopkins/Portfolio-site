<?php

//https://www.lyrathemes.com/bootstrap-wordpress-theme-tutorial-1/

function bootstrapstarter_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies ); 
}

function bootstrapstarter_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '4.4.1', false );
    
    /*name of the script just in case you want to de-register it, location, The array of depenencies (in this case jquery) 
    and version 
    more info https://stackoverflow.com/questions/11159860/how-do-i-add-a-simple-jquery-script-to-wordpress
    */
    wp_enqueue_script('js-file', get_template_directory_uri().'/js/new.js', $dependencies, '4.4.1', false);

}

add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );


function bootstrapstarter_wp_setup() {
    add_theme_support( 'title-tag' );
}

function bootstrapstarter_register_menu() {
    register_nav_menu('header-menu', __( 'Header Menu' ));
}
add_action( 'init', 'bootstrapstarter_register_menu' );


add_action( 'after_setup_theme', 'bootstrapstarter_wp_setup' );

?>