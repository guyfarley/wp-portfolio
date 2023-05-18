<?php

/**
 * _s functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _s
 */

function my_theme_scripts()
{
  wp_deregister_script('jquery');
  wp_enqueue_script("script", get_template_directory_uri() . "/assets/main.min.js", array('jquery'), false, true);
  wp_enqueue_style("style", get_template_directory_uri() . "/assets/main.css", [], false);
}
add_action("wp_enqueue_scripts", "my_theme_scripts");

/**
 * Font Awesome Kit Setup
 * 
 * This will add your Font Awesome Kit to the front-end, the admin back-end,
 * and the login screen area.
 */
if (!function_exists('fa_custom_setup_kit')) {
  function fa_custom_setup_kit($kit_url = '')
  {
    foreach (['wp_enqueue_scripts', 'admin_enqueue_scripts', 'login_enqueue_scripts'] as $action) {
      add_action(
        $action,
        function () use ($kit_url) {
          wp_enqueue_script('font-awesome-kit', $kit_url, [], null);
        }
      );
    }
  }
}

fa_custom_setup_kit('https://kit.fontawesome.com/db1716593f.js');

/**
 * Register main menu
 */

//  function register_main_menu() {
// 	register_nav_menus(array(
// 		"menu-icon" => "Menu Icon",
// 		"main-menu" => "Main Menu"
// 	));
//  }
//  add_action("init", "register_main_menu");


add_action('admin_bar_menu', function () {
  remove_action('wp_before_admin_bar_render', 'wp_customize_support_script');
}, 50);


// if acf_register_block function exists, call the acf/init action and pass a custom function called register_acf_blocks
if (function_exists('acf_register_block')) {
  add_action('acf/init', 'register_acf_blocks');
}

// create register_acf_blocks function to loop over blocks directory and pass each block.json file to the wordpress register_block_type function
function register_acf_blocks()
{
  $blocks = glob(__DIR__ . '/blocks/*');
  foreach ($blocks as $block) {
    if (is_dir($block)) {
      register_block_type($block);
    }
  }
}
