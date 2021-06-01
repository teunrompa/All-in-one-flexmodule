<?php

$image_section = array(
    'my-tab-2' => array(
        'title' => __('Image Editor', 'fl-builder'),
        'sections' => array(
            'my-section-2' => array(
                'title' => __('image properties', 'fl-builder'),
                'fields' => array(
                    'image_width' => array(
                        'type'         => 'unit',
                        'label'        => 'Width',
                        'units'          => array( 'px', 'vw', '%' ),
                        'default_unit' => '%', // Optional
                        'slider' => true,
                        'preview'    => array(
                          'type'          => 'css',
                          'selector'      => '.flex-image img',
                          'property'      => 'width',
                        ),
                      ),
                      'image_align' => array(
                        'type'    => 'align',
                        'label'   => 'image Align',
                        'values'  => array(
                            'left'   => 'left',
                            'center' => 'center',
                            'right'  => 'right',
                        ),
                        'preview'    => array(
                            'type'          => 'css',
                            'selector'      => '.flex-image',
                            'property'      => 'text-align',
                        ),
                    ),
                    'image_margin' => array(
                        'type'        => 'dimension',
                        'label'       => 'Text Margins',
                        'units'       => array( 'px', 'vw', '%' ),
                        'slider' => true,
                        'preview'    => array(
                            'type'          => 'css',
                            'selector'      => '.flex-image',
                            'property'      => 'margin',
                          ),
                    ),

                )
            ) 
        )
        )



);

