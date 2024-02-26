<?php

// Get theme version
define("VERSION", wp_get_theme()->get("Version"));


// Setup styles for the theme
function thestartutor_enqueue_styles() {
  wp_enqueue_style("thestartutor-main", get_template_directory_uri() . "/assets/css/main.css", array(), VERSION, "all");
}

add_action("wp_enqueue_scripts", "thestartutor_enqueue_styles");


// Setup scripts for the theme
function thestartutor_enqueue_scripts() {
  wp_enqueue_script("thestartutor-main", get_template_directory_uri() . "/assets/js/main.js", array(), VERSION, true);
}

add_action("wp_enqueue_scripts", "thestartutor_enqueue_scripts");


// Setup custom logo functionality
function thestartutor_custom_logo_setup() {
  add_theme_support("custom-logo");
}

add_action("after_setup_theme", "thestartutor_custom_logo_setup");


// Register nav menus
if(!function_exists("thestartutor_register_nav_menus")) {
  function thestartutor_register_nav_menus($locations = array()) {
    register_nav_menus(
      array(
        "primary_menu" => __("Primary Menu"),
        "footer_menu" => __("Footer Menu")
      )
    );
  }

  add_action("after_setup_theme", "thestartutor_register_nav_menus");
}


// Custom walker nav menu
if(!function_exists("thestartutor_custom_walker_nav_menu_setup")) {
  function thestartutor_custom_walker_nav_menu_setup() {
    require_once("inc/CustomWalkerNavMenu.php");
  }
  
  add_action("after_setup_theme", "thestartutor_custom_walker_nav_menu_setup");
}


// Get static image
function thestartutor_get_static_img($img_name) {
  return get_template_directory_uri() . "/assets/images/" . $img_name;
}
