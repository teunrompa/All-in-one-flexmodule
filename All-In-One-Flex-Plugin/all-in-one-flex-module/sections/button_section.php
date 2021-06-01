<?php
$button_section = array(
    'my-tab-5' => array(
        'title' => __('Button Editor', 'fl-builder'),
        'sections' => array(
            'my-section-1' => array(
                'title' => __('Button properties', 'fl-builder'),
                'fields' => array(
                    'button_editor_align' => array(
                        'type'    => 'align',
                        'label'   => 'Button Align',
                        'default' => 'center',
                        'preview' => array(
                            'type'       => 'css',
                            'selector'   => '.flex-button',
                            'property'   => 'text-align',
                        ),
                    ),
                    'button_editor_margin' => array(
                        'type'        => 'dimension',
                        'label'       => 'Margin',
                        'units'          => array( 'px', 'vw', '%' ),
                        'slider' => true,
                        'preview'    => array(
                            'type'          => 'css',
                            'selector'      => '.flex-button',
                            'property'      => 'margin',
                        ),
                    ),
                    'button_editor_padding' => array(
                        'type'        => 'dimension',
                        'label'       => 'Padding',
                        'units'          => array( 'px', 'vw', '%' ),
                        'slider' => true,
                        'preview'    => array(
                            'type'          => 'css',
                            'selector'      => '.flex-button a',
                            'property'      => 'padding',
                        ),
                    ),
                )
            ),
            'my-section-2' => array(
                'title' => __('Button Text Settings', 'fl-builder'),
                'fields' => array(
                    'button_text_color' => array(
                        'type'          => 'color',
                        'label'         => __( 'Text Color', 'fl-builder' ),
                        'default'       => '333333',
                        'show_reset'    => true,
                        'show_alpha'    => true,
                        'preview'    => array(
                            'type'          => 'css',
                            'selector'      => '.flex-button',
                            'property'      => 'color',
                        ),
                    ),
                    'button_hover_color' => array(
                        'type'          => 'color',
                        'label'         => __( 'Text Hover Color', 'fl-builder' ),
                        'default'       => '333333',
                        'show_reset'    => true,
                        'show_alpha'    => true,
                        'preview'    => array(
                            'type'          => 'css',
                            'selector'      => '.flex-button a:hover',
                            'property'      => 'color',
                        ),
                    ),                       

                    'button_typography' => array(
                        'type'       => 'typography',
                        'label'      => 'Button Typography',
                        'responsive' => true,
                        'preview'    => array(
                          'type'      => 'css',
                          'selector'  => '.flex-button a',
                        ),
                    ),
                )
            ),
            'my-section-3' => array(
                'title' => __('Button Background Settings', 'fl-builder'),
                'fields' => array(
                    'button_background_color' => array(
                        'type'          => 'color',
                        'label'         => __( 'Button Background Color', 'fl-builder' ),
                        'default'       => '333333',
                        'show_reset'    => true,
                        'show_alpha'    => true,
                        'preview'    => array(
                            'type'          => 'css',
                            'selector'      => '.flex-button',
                            'property'      => 'color',
                        ),
                    ),
                    'button_background_hover_color' => array(
                        'type'          => 'color',
                        'label'         => __( 'Button Background Hover Color', 'fl-builder' ),
                        'default'       => '333333',
                        'show_reset'    => true,
                        'show_alpha'    => true,
                        'preview'    => array(
                            'type'          => 'css',
                            'selector'      => '.flex-button:hover',
                            'property'      => 'color',
                        ),
                    ),
                )
            ) 
        )
    )
);
?>