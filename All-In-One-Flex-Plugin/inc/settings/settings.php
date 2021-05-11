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
    $output = 'objects'; // names or objects, note names is the default
    $operator = 'and'; // 'and' or 'or'
    $post_types = get_post_types( $args, $output, $operator ); 
    $i = 0;

    $flex_checkbox_field = get_option('flex_settings_checkbox_field');

    foreach ( $post_types  as $post_type ) {
        $post_name = $post_type->name;
        ?>
        <div>
        <input type='checkbox' id=<?= $post_name ?> name='flex_settings_checkbox_field[<?= $post_name ?>]' value='<?= $post_name ?>' <?php checked( isset( $flex_checkbox_field[$post_name] ) ); ?>>
        <label for=<?= $post_name ?>>Custom Post Type name:  <?= $post_name ?>  
        </div>
        <?php
    }


}
//this setting uses all the items in flex_checkbox_field and returns them
function return_location_settings(){
    $locationSettingField = get_option('flex_settings_checkbox_field');
    $locationSettings = array();
    if($locationSettingField != null){
        foreach($locationSettingField as $location){
            $locationArray = array( 
                array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => $location, // this is the instance of the location
            ));
    

            array_push  ($locationSettings, $locationArray);
        }
    }

    acf_add_local_field_group(array(
        'key' => 'group_5bd180b0438cb',
        'title' => 'Flexibele Content',
        'fields' => array(
            array(
                'key' => 'field_60742b70143cb',
                'label' => 'Flexibele Content',
                'name' => 'flexibele_content',
                'type' => 'flexible_content',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'acfe_flexible_advanced' => 0,
                'layouts' => array(
                    'layout_60742b7860cec' => array(
                        'key' => 'layout_60742b7860cec',
                        'name' => 'text_editor',
                        'label' => 'Text ',
                        'display' => 'block',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_60742c8a8ce69',
                                'label' => 'Content',
                                'name' => 'content',
                                'type' => 'wysiwyg',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'tabs' => 'all',
                                'toolbar' => 'full',
                                'media_upload' => 1,
                                'delay' => 0,
                            ),
                        ),
                        'min' => '',
                        'max' => '',
                        'acfe_flexible_render_template' => false,
                        'acfe_flexible_render_style' => false,
                        'acfe_flexible_render_script' => false,
                        'acfe_flexible_thumbnail' => false,
                        'acfe_flexible_settings' => false,
                        'acfe_flexible_settings_size' => 'medium',
                        'acfe_flexible_modal_edit_size' => false,
                        'acfe_flexible_category' => false,
                    ),
                    'layout_60745ff62b636' => array(
                        'key' => 'layout_60745ff62b636',
                        'name' => 'afbeelding',
                        'label' => 'Afbeelding',
                        'display' => 'block',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_607548882b637',
                                'label' => 'Content',
                                'name' => 'content',
                                'type' => 'url',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                            ),
                        ),
                        'min' => '',
                        'max' => '',
                        'acfe_flexible_render_template' => false,
                        'acfe_flexible_render_style' => false,
                        'acfe_flexible_render_script' => false,
                        'acfe_flexible_thumbnail' => false,
                        'acfe_flexible_settings' => false,
                        'acfe_flexible_settings_size' => 'medium',
                        'acfe_flexible_modal_edit_size' => false,
                        'acfe_flexible_category' => false,
                    ),
                    'layout_607548972b638' => array(
                        'key' => 'layout_607548972b638',
                        'name' => 'quote',
                        'label' => 'Quote',
                        'display' => 'block',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_607548d32b639',
                                'label' => 'Content',
                                'name' => 'content',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                            ),
                        ),
                        'min' => '',
                        'max' => '',
                        'acfe_flexible_render_template' => false,
                        'acfe_flexible_render_style' => false,
                        'acfe_flexible_render_script' => false,
                        'acfe_flexible_thumbnail' => false,
                        'acfe_flexible_settings' => false,
                        'acfe_flexible_settings_size' => 'medium',
                        'acfe_flexible_modal_edit_size' => false,
                        'acfe_flexible_category' => false,
                    ),
                    'layout_60812cbc803db' => array(
                        'key' => 'layout_60812cbc803db',
                        'name' => 'gallery',
                        'label' => 'Gallery',
                        'display' => 'block',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_60812ce2803dc',
                                'label' => 'Content',
                                'name' => 'content',
                                'type' => 'gallery',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'array',
                                'preview_size' => 'medium',
                                'insert' => 'append',
                                'library' => 'all',
                                'min' => '',
                                'max' => '',
                                'min_width' => '',
                                'min_height' => '',
                                'min_size' => '',
                                'max_width' => '',
                                'max_height' => '',
                                'max_size' => '',
                                'mime_types' => '',
                            ),
                        ),
                        'min' => '',
                        'max' => '',
                        'acfe_flexible_render_template' => false,
                        'acfe_flexible_render_style' => false,
                        'acfe_flexible_render_script' => false,
                        'acfe_flexible_thumbnail' => false,
                        'acfe_flexible_settings' => false,
                        'acfe_flexible_settings_size' => 'medium',
                        'acfe_flexible_modal_edit_size' => false,
                        'acfe_flexible_category' => false,
                    ),
                ),
                'button_label' => 'Nieuwe regel',
                'min' => '',
                'max' => '',
                'acfe_flexible_stylised_button' => false,
                'acfe_flexible_hide_empty_message' => false,
                'acfe_flexible_empty_message' => '',
                'acfe_flexible_layouts_templates' => false,
                'acfe_flexible_layouts_previews' => false,
                'acfe_flexible_layouts_placeholder' => false,
                'acfe_flexible_layouts_thumbnails' => false,
                'acfe_flexible_layouts_settings' => false,
                'acfe_flexible_disable_ajax_title' => false,
                'acfe_flexible_layouts_ajax' => false,
                'acfe_flexible_add_actions' => array(
                ),
                'acfe_flexible_remove_button' => array(
                ),
                'acfe_flexible_layouts_state' => false,
                'acfe_flexible_modal_edit' => array(
                    'acfe_flexible_modal_edit_enabled' => false,
                    'acfe_flexible_modal_edit_size' => 'large',
                ),
                'acfe_flexible_modal' => array(
                    'acfe_flexible_modal_enabled' => false,
                    'acfe_flexible_modal_title' => false,
                    'acfe_flexible_modal_size' => 'full',
                    'acfe_flexible_modal_col' => '4',
                    'acfe_flexible_modal_categories' => false,
                ),
            ),
        ),
        'location' => $locationSettings
        ,
        'menu_order' => 0,
        'position' => 'acf_after_title',
        'style' => 'default',
        'label_placement' => 'left',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'acfe_display_title' => '',
        'acfe_autosync' => '',
        'acfe_form' => 0,
        'acfe_meta' => '',
        'acfe_note' => '',
    ));
}



function return_location_group_settings(){
    $location =  array(

        array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'cases', // HIER MOET FUNCTIE KOMEN
                ),
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'team', // HIER MOET FUNCTIE KOMEN
                )
            ),
        );
    
 
    return $location;
}



?>