<?php
//Creates the menu
function epicure_menus()
{
    register_nav_menus(array(
        'main-menu' => 'Main Menu'
    ));
}
add_action('init', 'epicure_menus');

// Adds Stylesheets and JS files
function epicure_scripts()
{
    // Normalize CSS
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');

    // Main Stylesheet
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');
}
add_action('wp_enqueue_scripts', 'epicure_scripts');

?>
