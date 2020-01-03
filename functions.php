<?php

//require get_theme_file_path('/includes/file.php');

//remove_action( 'wp_head', '_wp_render_title_tag', 1 );


/**
 * Edit scripts type to work with modules
 **/
function edit_script_type( $tag, $handle, $source ) {
   if ( 'bundled-js' === $handle) {      
      $tag = '<script type="module" src="' . $source . '"></script>';
   }
   return $tag;
}
add_filter( 'script_loader_tag', 'edit_script_type', 10, 3 );


/**
 * Add Website files (stylesheets)
 **/
function load_stylesheets(){
   // TODO: remove microtime after publishing wp
   wp_enqueue_style('stylesheet', get_stylesheet_uri(), NULL, microtime());
}
add_action('wp_enqueue_scripts', 'load_stylesheets');


/**
 * Add Website files (Scripts)
 **/
function load_scripts(){
   wp_enqueue_script('bundled-js', esc_url(get_theme_file_uri('/js/bundled-script.js')), null, '1.0', true);
   
   wp_localize_script('bundled-js','websiteData',array(
      'root_url' => esc_url(get_site_url())
   ));
}
add_action('wp_enqueue_scripts', 'load_scripts');


/**
 * Add Thumbnail feature
 **/
function theme_features(){
   add_theme_support('title-tag');
   add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','theme_features');


/**
 * Add [Description]
 **/



?>