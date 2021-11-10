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

                submit_button('Save Settings');
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

    //Register select field
    register_setting(
        'flex-settings-page',
        'flex_settings_checkbox_field'
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
        '_builtin' => true
    );
    $output = 'objects'; // names or objects, note names is the default
    $operator = 'and'; // 'and' or 'or'
    $post_types = get_post_types( $args, $output, $operator ); 
    
    $flex_checkbox_field = get_option('flex_settings_checkbox_field');
    ?>
    
    <div>
        <h3>Check the post type where you want the flexcontent to show</h3>
    </div>
    
    <?php
    foreach ( $post_types  as $post_type ) {
        $post_name = $post_type->name;
        ?>
        <div>
        <input type='checkbox' id=<?= $post_name ?> name='flex_settings_checkbox_field[<?= $post_name ?>]' value='<?= $post_name ?>' <?php checked( isset( $flex_checkbox_field[$post_name] ) ); ?>>
        <label for=<?= $post_name ?>>Post type name:  <?= $post_name ?>  
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
        'key' => 'group_6090feea09e0e',
        'title' => 'flexcontent',
        'fields' => array(
            array(
                'key' => 'field_60a3ce4cb0ce2',
                'label' => 'flexcontent',
                'name' => 'flexcontent',
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
                    'layout_60a3ce5b7f064' => array(
                        'key' => 'layout_60a3ce5b7f064',
                        'name' => 'text_editor',
                        'label' => 'text editor',
                        'display' => 'block',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_60a3ce5eb0ce3',
                                'label' => 'content',
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
                    'layout_60a3ced0b0ce5' => array(
                        'key' => 'layout_60a3ced0b0ce5',
                        'name' => 'image',
                        'label' => 'image',
                        'display' => 'block',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_60a3cee8b0ce6',
                                'label' => 'content',
                                'name' => 'content',
                                'type' => 'image',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'uploader' => '',
                                'acfe_thumbnail' => 0,
                                'return_format' => 'array',
                                'preview_size' => 'medium',
                                'min_width' => '',
                                'min_height' => '',
                                'min_size' => '',
                                'max_width' => '',
                                'max_height' => '',
                                'max_size' => '',
                                'mime_types' => '',
                                'library' => 'all',
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
                    'layout_60a3cf14b0ce7' => array(
                        'key' => 'layout_60a3cf14b0ce7',
                        'name' => 'quote',
                        'label' => 'quote',
                        'display' => 'block',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_60a3cf2fb0ce8',
                                'label' => 'content',
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
                    'layout_60a3d0bbb0ce9' => array(
                        'key' => 'layout_60a3d0bbb0ce9',
                        'name' => 'gallery',
                        'label' => 'gallery',
                        'display' => 'block',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_60a3d0d6b0cea',
                                'label' => 'content',
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
                    'layout_60a3d0e4b0ceb' => array(
                        'key' => 'layout_60a3d0e4b0ceb',
                        'name' => 'button',
                        'label' => 'button',
                        'display' => 'block',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_60a3d0fcb0cec',
                                'label' => 'content',
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
                            array(
                                'key' => 'field_60a3d106b0ced',
                                'label' => 'url',
                                'name' => 'url',
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
                    'layout_60a3d111b0cee' => array(
                        'key' => 'layout_60a3d111b0cee',
                        'name' => 'oembed',
                        'label' => 'oEmbed',
                        'display' => 'block',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_60a3d13eb0cef',
                                'label' => 'content',
                                'name' => 'content',
                                'type' => 'oembed',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'width' => '',
                                'height' => '',
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
                    'layout_60a3d172b0cf1' => array(
                        'key' => 'layout_60a3d172b0cf1',
                        'name' => 'two_text_column',
                        'label' => 'two text column',
                        'display' => 'block',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_60a3d17eb0cf2',
                                'label' => 'column 1',
                                'name' => 'content_1',
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
                            array(
                                'key' => 'field_60a3d189b0cf3',
                                'label' => 'column 2',
                                'name' => 'content_2',
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
                    'layout_60a3d297aa958' => array(
                        'key' => 'layout_60a3d297aa958',
                        'name' => 'empty',
                        'label' => 'empty',
                        'display' => 'block',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_60a3d47af2601',
                                'label' => 'space',
                                'name' => '',
                                'type' => 'message',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'message' => 'this gives margin between your elements',
                                'new_lines' => 'wpautop',
                                'esc_html' => 0,
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
                    'layout_60a3d4b9f2602' => array(
                        'key' => 'layout_60a3d4b9f2602',
                        'name' => 'cta',
                        'label' => 'CTA',
                        'display' => 'block',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_60a3d501f2603',
                                'label' => 'text',
                                'name' => 'text',
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
                            array(
                                'key' => 'field_60af9a2e4c9b9',
                                'label' => 'Button text',
                                'name' => 'button_text',
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
                            array(
                                'key' => 'field_60af9a404c9ba',
                                'label' => 'Button url',
                                'name' => 'button_url',
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
        'location' => $locationSettings,
        'menu_order' => 0,
        'position' => 'normal',
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

?>
