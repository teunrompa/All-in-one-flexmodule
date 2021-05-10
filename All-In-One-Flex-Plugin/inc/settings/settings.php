<?php 

/**
 * Create settings menu
 */

function flex_plugin_settings_menu(){
    add_menu_page(
        __('All-in-one-flex Settings', 'flex-plugin'),
        __('All-in-one-flex Settings', 'flex-plugin'),
        'manage_options',
        'flex-settings-page',
        'flex_settings_template_callback',
        '',
        null
    );
}

function flex_settings_template_callback(){
    ?>
    <div class="wrapper">
        <h1><?= esc_html(get_admin_page_title()); ?><h1>

        <form action="options.php" method="post">
            <?php
                // security field 
                settings_fields('flex-settings-page');
               
                //output settings section here
                do_settings_sections('flex-settings-page');

                // save settings button

                submit_button('Save Settings')
            ?>
        </form>
    </div>
    <?php
}

/**
 * Settings setup
 */

function flex_settings_init(){
    //setup settings section
    add_settings_section(
        'flex_settings_section',
        'Flex Settings Page',
        '',
        'flex-settings-page'
    );

    //Register text field
    register_setting(
        'flex-settings-page',
        'flex_settings_input_field',
        array(
            'type' => 'string',
            'sanitize_callback' => 'sanitize_text_field',
            'default' => ''
        )
    );

    //add settings field
    add_settings_field(
        'flex_settings_input_field',
        __('Input Field' , 'flex-plugin'),
        'flex_settings_input_field_callback',
        'flex-settings-page',
        'flex_settings_section'
    );

    //Register select field
    register_setting(
        'flex-settings-page',
        'flex_settings_checkbox_field'
        // array(
        //     'type' => 'array',
        //     'sanitize_callback' => 'sanitize_check_box', // not a function yet
        //     'default' => ''
        // )
    );
    //add select field
    add_settings_field(
        'flex_settings_checkbox_field',
        __('Checkbox Field' , 'flex-plugin'),
        'flex_settings_checkbox_field_callback',
        'flex-settings-page',
        'flex_settings_section'
    );


}
add_action('admin_init','flex_settings_init');


add_action('admin_menu', 'flex_plugin_settings_menu');

/**
 * Setting in field template
 */


/**
 * text template
 */

function flex_settings_input_field_callback(){
    $flex_input_field = get_option('flex_settings_input_field');
    ?>
    
    <input type="text" name="flex_settings_input_field" class="regular-text" value="<?php echo isset($flex_input_field) ? esc_attr($flex_input_field) : '' ; ?>" />
    <?php
}

/**
 * select settings field
 */

function flex_settings_checkbox_field_callback(){
    
    
    $args = array(
        'public'   => true,
        '_builtin' => false
    );
    $output = 'names'; // names or objects, note names is the default
    $operator = 'and'; // 'and' or 'or'
    $post_types = get_post_types( $args, $output, $operator ); 
    $i = 0;
    var_dump($post_types);
    foreach ( $post_types  as $post_type ) {
        echo '<p>Custom Post Type name: ' . $post_type->name . "<br />\n";
        echo 'Single name: ' . $post_type->labels->singular_name . "<br />\n";
        echo 'Menu icon URL: ' . $post_type->menu_icon . "</p>\n";;
     }


    $hold = false; // dit is puur om de code te stoppen
    if($hold){
        $flex_checkbox_field = get_option('flex_settings_checkbox_field');
        $args = array(
            'post_type' => 'all'        
        );
        $all_posts = new WP_Query($args);
        // echo '<pre>';
        // var_dump($all_posts);
        // echo '</pre>';
    
    
        if($all_posts->have_posts()){
    
            $i = 0;
    
            while($all_posts->have_posts()){
                $all_posts->the_post();
                $post_id = get_the_ID();
                $post_title = get_the_title();
    
                $i++;
                ?>
                <div>
                    <input type="checkbox" id="option<?=$i ?>" name= "flex_settings_checkbox_field[<?=$post_id ?>]" value="<?= $post_id ?>" <?php checked( isset( $flex_checkbox_field[$post_id] ) ); ?> />
                    <label for="option<?=$i ?>"><?=$post_title ?></label>
                </div>
                <?php
            }
        }
    
    }

    ?>

    <?php

    var_dump($flex_checkbox_field);
}


?>