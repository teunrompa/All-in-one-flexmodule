<?php

$text_section = array(
    'my-tab-1'      => array(
        'title'         => __( 'Text editor ', 'fl-builder' ),
        'sections'      => array(
            'my-section-1'  => array(
                'title'         => __( 'Section 1', 'fl-builder' ),
                'fields'        => array(
                    'my_color_field' => array(
                        'type'          => 'color',
                        'label'         => __( 'Color Picker', 'fl-builder' ),
                        'default'       => '333333',
                        'show_reset'    => true,
                        'show_alpha'    => true,
                        'preview'    => array(
                            'type'          => 'css',
                            'selector'      => '.flex-text-editor',
                            'property'      => 'color',
                        ),
                    ),
         
                    'text_margin' => array(
                        'type'        => 'dimension',
                        'label'       => 'Text Margins',
                        'units'          => array( 'px', 'vw', '%' ),
                        'slider' => true,
                        'preview'    => array(
                            'type'          => 'css',
                            'selector'      => '.flex-text-editor',
                            'property'      => 'margin',
                        ),
                    ),


                    'text_width' => array(
                        'type'         => 'unit',
                        'label'        => 'Max-width',
                        'units'          => array( 'px', 'vw', '%' ),
                        'default_unit' => '%', // Optional
                        'slider' => true,
                    ),
                    
                    )
                ),
                    'my-section-2' => array(
                    'title' => __('Text settings', 'fl-builder' ),
                    'fields' => array(
                        'text_editor_align' => array(
                            'type'    => 'align',   
                            'label'   => 'Text Align',
                            'values'  => array(
                                'left'   => 'left',
                                'center' => 'center',
                                'right'  => 'right',
                            ),
                            'preview'    => array(
                                'type'          => 'css',
                                'selector'      => '.flex-text-editor',
                                'property'      => 'text-align',
                            ),
                        ), 
                        'text_typography' => array(
                            'type'       => 'typography',
                            'label'      => 'Text Typography',
                            'responsive' => true,
                            'preview'    => array(
                              'type'      => 'css',
                              'selector'  => '.flex-text-editor',
                            ),
                        ),
                        // 'text_style' => array(
                        //     'type'    => 'button-group',
                        //     'label'   => 'My text font style',
                        //     'default' => 'two',
                        //     'options' => array(
                        //         'normal'    => 'Normal',
                        //         'italic'    => 'Italic',
                        //         'oblique'  => 'Oblique',
                        //         'bold' => 'Bold'
                        //     ), 
                        // ),
                        // 'my_font_text' => array(
                        //     'type'          => 'font',
                        //     'label'         => __( 'Font', 'fl-builder' ),
                        //     'default'       => array(
                        //       'family'        => 'Helvetica',
                        //       'weight'        => 300,
    
                        //     ),
                        // ),
                    )
                )
        )  
    )
);