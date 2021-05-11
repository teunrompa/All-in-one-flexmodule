<?php

/**
 * Plugin Name: All in one flex module
 * Plugin URI: https://www.pageking.nl
 * Description: This is my all in one flex module. You only need one module to style and display all off your flex content.
 * Version: 1.0
 * Author: Teun Rompa
 * Author URI: https://pageking.nl
 */

define( 'MY_MODULES_DIR', plugin_dir_path( __FILE__ ) );
define( 'MY_MODULES_URL', plugins_url( '/', __FILE__ ) );
function my_load_module_examples() {
if ( class_exists( 'FLBuilder' ) ) {
            // Include your custom modules here.
            require_once 'all-in-one-flex-module/all-in-one-flex-module.php';
    }
}
$test = 'all';
// include './includes/menu.php';
add_action( 'init', 'my_load_module_examples' );

require_once 'inc/settings/settings.php';

add_action('acf/init','return_location_settings');
?>