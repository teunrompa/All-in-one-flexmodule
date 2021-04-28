<?php

$slideshow_section = array(
    'my-tab-4' => array(
        'title' => __('Carousel editor', 'fl-builder'),
        'sections' => array(
            'my-section-1' => array(
                'title' => __('section-1', 'fl-builder'),
                'fields' => array(
                    'carousel_image_width' => array(
                        'type'         => 'unit',
                        'label'        => 'Image Width',
                        'units'          => array( 'px', 'vw', '%' ),
                        'default_unit' => '%', // Optional
                        'slider' => true,
                        'preview'    => array(
                          'type'          => 'css',
                          'selector'      => '.flex-carousel-image img',
                          'property'      => 'width',
                        ),
                    ),
                    'slides_to_show' => array(
                        'type'        => 'unit',
                        'label'       => 'Slides count',
                        'description' => 'slides',
                        'default' => 1,
                    ),
                    'slides_per_scroll' => array(
                        'type'        => 'unit',
                        'label'       => 'Slides per scroll',
                        'default' => 1,
                    ),
                    
                )
                ),
                'my-section-2' => array(
                    'title' => __('Arrow settings', 'fl-builder'),
                    'fields' => array(
                        'show_arrow_button' => array(
                            'type'    => 'button-group',
                            'label'   => 'Show arrows',
                            'default' => 'two',
                            'options' => array(
                                'none'    => 'Off',
                                'inline' => 'On'
                            ),
                        ),
                        'arrow_width' => array(
                            'type'        => 'unit',
                            'label'       => 'Max Arrow width',
                            'description' => 'px',
                        ),
                        'arrow_margin' => array(
                            'type'        => 'dimension',
                            'label'       => 'Arrow Margins',
                            'units'          => array( 'px', 'vw', '%' ),
                            'slider' => true,
                            'preview'    => array(
                                'type'          => 'css',
                                'selector'      => '.slick-arrow',
                                'property'      => 'margin',
                        ),
                    )
                )
    )

)
             
)



);