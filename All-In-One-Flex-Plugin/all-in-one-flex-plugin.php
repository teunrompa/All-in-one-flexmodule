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



// if ( ! function_exists( 'PostCreator' ) ) {

// 	function PostCreator(
// 		$name      = 'AUTO POST',
// 		$type      = 'post',
// 		$content   = 'DUMMY CONTENT',
// 		$category  = array(1,2),
// 		$template  = NULL,
// 		$author_id = '1',
// 		$status    = 'publish'
// 	) {

// 		define( POST_NAME, $name );
// 		define( POST_TYPE, $type );
// 		define( POST_CONTENT, $content );
// 		define( POST_CATEGORY, $category );
// 		define( POST_TEMPLATE, '' );
// 		define( POST_AUTH_ID, $author_id );
// 		define( POST_STATUS, $status );

// 		if ( $type == 'page' ) {
// 			$post      = get_page_by_title( POST_NAME, 'OBJECT', $type );
// 			$post_id   = $post->ID;
// 			$post_data = get_page( $post_id );
// 			define( POST_TEMPLATE, $template );
// 		} else {
// 			$post      = get_page_by_title( POST_NAME, 'OBJECT', $type );
// 			$post_id   = $post->ID;
// 			$post_data = get_post( $post_id );
// 		}

// 		function hbt_create_post() {
// 			$post_data = array(
// 				'post_title'    => wp_strip_all_tags( POST_NAME ),
// 				'post_content'  => POST_CONTENT,
// 				'post_status'   => POST_STATUS,
// 				'post_type'     => POST_TYPE,
// 				'post_author'   => POST_AUTH_ID,
// 				'post_category' => POST_CATEGORY,
// 				'page_template' => POST_TEMPLATE
// 			);
// 			wp_insert_post( $post_data, $error_obj );
// 		}

// 		if ( ! isset( $post ) ) {
// 			add_action( 'admin_init', 'hbt_create_post' ,'', '1','publish');
// 			return $error_obj;
// 		}

// 	}
// }
// PostCreator(
// 	'flexcontent',
// 	'acf-field-group',
// 	'test',
// 	array( 1, 2 ) ,
// 	'',
// 	'1',
//     'publish'
// );
// $post = get_page_by_title('flexcontent', 'OBJECT', 'acf-field-group');
// $post_id = $post->ID;
// echo 'owidajoiawjdoiawjd';

// var_dump($post_id);



// function registerCustomField(){
//     acf_add_local_field(array(
//         'key' => 'field_1',
//         'label' => 'Sub Title',
//         'name' => 'sub_title',
//         'type' => 'text',
//         'parent' => 'group_6090feea09e0e'
//     ));
// }

require_once 'inc/settings/settings.php';

add_action('acf/init','registerCustomField');
?>