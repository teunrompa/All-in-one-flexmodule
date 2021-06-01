<?php

$cta_section = array(
    'my-tab-9' => array(
        'title' => __('CTA Editor', 'fl-builder'),
        'sections' => array(
            'my-section-1' => array(
                'title' => __('Button properties', 'fl-builder'),
                'fields' => array(
                    'cta_button_align' => array(
                        'type'    => 'align',
                        'label'   => 'Button Align',
                        'default' => 'center',
                        'preview' => array(
                            'type'       => 'css',
                            'selector'   => '.flex-cta-button',
                            'property'   => 'text-align',
                        ),
                    ),
                    'cta_button_margin' => array(
                        'type'        => 'dimension',
                        'label'       => 'Margin',
                        'units'          => array( 'px', 'vw', '%' ),
                        'slider' => true,
                        'responsive'  => true,
                        'preview'    => array(
                            'type'          => 'css',
                            'selector'      => '.flex-cta-button a',
                            'property'      => 'margin',
                        ),
                    ),
                    'cta_button_padding' => array(
                        'type'        => 'dimension',
                        'label'       => 'Padding',
                        'units'          => array( 'px', 'vw', '%' ),
                        'slider' => true,
                        'responsive'  => true,
                        'preview'    => array(
                            'type'          => 'css',
                            'selector'      => '.flex-cta-button a',
                            'property'      => 'padding',
                        ),
                    ),
                )
            ),
            'my-section-2' => array(
                'title' => __('Button Text Settings', 'fl-builder'),
                'fields' => array(
                    'cta_button_color' => array(
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
                    'cta_text_hover_color' => array(
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

                    'cta_button_typography' => array(
                        'type'       => 'typography',
                        'label'      => 'Button Typography',
                        'responsive' => true,
                        'preview'    => array(
                          'type'      => 'css',
                          'selector'  => '.flex-cta-button a',
                        ),
                    ),
                )
            ),
            'my-section-3' => array(
                'title' => __('Button Background Settings', 'fl-builder'),
                'fields' => array(
                    'cta_button_background_color' => array(
                        'type'          => 'color',
                        'label'         => __( 'Button Background Color', 'fl-builder' ),
                        'default'       => '333333',
                        'show_reset'    => true,
                        'show_alpha'    => true,
                        'preview'    => array(
                            'type'          => 'css',
                            'selector'      => '.flex-cta-button ',
                            'property'      => 'color',
                        ),
                    ),
                    'cta_button_hover_color' => array(
                        'type'          => 'color',
                        'label'         => __( 'Button Background Hover Color', 'fl-builder' ),
                        'default'       => '333333',
                        'show_reset'    => true,
                        'show_alpha'    => true,
                        'preview'    => array(
                            'type'          => 'css',
                            'selector'      => '.flex-cta-button:hover',
                            'property'      => 'color',
                        ),
                    ),
                )
            ) 
        )
    )
);

?>