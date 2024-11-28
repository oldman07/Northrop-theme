<?php
function enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function my_theme_scripts() {
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
    

}
add_action('wp_enqueue_scripts', 'my_theme_scripts');

?>
