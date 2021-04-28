<?php

$quote_section = array(
    'my-tab-3'      => array(
        'title'         => __( 'Quote editor ', 'fl-builder' ),
        'sections'      => array(
            'my-section-1'  => array(
                'title'         => __( 'Section 1', 'fl-builder' ),
                'fields'        => array(
                    'qoute_color' => array(
                        'type'          => 'color',
                        'label'         => __( 'Qoute color Picker', 'fl-builder' ),
                        'default'       => '333333',
                        'show_reset'    => true,
                        'show_alpha'    => true,
                        'preview'    => array(
                            'type'          => 'css',
                            'selector'      => '.flex-quote',
                            'property'      => 'color',
                        ),
                    ),
                    'qoute_align' => array(
                        'type'    => 'align',
                        'label'   => 'Text Align',
                        'default' => 'left',
                        'preview' => array(
                            'type'       => 'css',
                            'selector'   => '.flex-quote',
                            'property'   => 'text-align',
                    ),
                    ),
                    'my_font_quote' => array(
                        'type'          => 'font',
                        'label'         => __( 'Font', 'fl-builder' ),
                        'default'       => array(
                          'family'        => 'Helvetica',
                          'weight'        => 300,

                        ),
                    ),
                    'qoute_transform' => array(
                        'type'    => 'button-group',
                        'label'   => 'My Setting',
                        'default' => 'two',
                        'options' => array(
                            'initial'    => 'Normal',
                            'capitalize'    => 'Tt',
                            'uppercase'  => 'TT',
                            'lowercase' => 'tt'
                        ),
                    ),
                    'qoute_style' => array(
                        'type'    => 'button-group',
                        'label'   => 'My qoute font style',
                        'default' => 'two',
                        'options' => array(
                            'normal'    => 'Normal',
                            'italic'    => 'Italic',
                            'oblique'  => 'Oblique',
                            'bold' => 'Bold'
                        ),
                    ),


                      'qoute_margin' => array(
                        'type'        => 'dimension',
                        'label'       => 'Text Margins',
                        'units'          => array( 'px', 'vw', '%' ),
                        'slider' => true,
                        'default' => 20,
                        'preview'    => array(
                            'type'          => 'css',
                            'selector'      => '.flex-quote',
                            'property'      => 'margin',
                          ),
                    ),
                        'qoute_width' => array(
                            'type'         => 'unit',
                            'label'        => 'Max-width',
                            'units'          => array( 'px', 'vw', '%' ),
                            'default_unit' => '%', // Optional
                            'slider' => true,
                            'preview'    => array(
                            'type'          => 'css',
                            'selector'      => '.flex-qoute p',
                            'property'      => 'max-width',
                        ),
                    ),
                )
            )
        )  
                )



);