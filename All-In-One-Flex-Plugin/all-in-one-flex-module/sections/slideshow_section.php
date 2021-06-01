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
                    'show_arrow_button' => array(
                        'type'    => 'button-group',
                        'label'   => 'Show arrows',
                        'default' => 'two',
                        'options' => array(
                            'none'    => 'Off',
                            'inline' => 'On'
                        ),
                    ),   


                )
            ),
            'my-section-2' => array(
                'title' => __('Flex Settings Section', 'fl-builder'),
                'fields' => array(
                    'break_point_carousel' => array(
                        'type'   => 'unit',
                        'label'  => 'Break Point Carousel',
                        'slider' => true,
                    ),
                    'flex_slides_to_show_carousel' => array(
                        'type'   => 'unit',
                        'label'  => 'Flex Slides To Show Carousel',
                        'slider' => true,
                    ),
                    'flex_slides_per_scroll_carousel' => array(
                        'type'   => 'unit',
                        'label'  => 'Flex Slides Per Scroll Carousel',
                        'slider' => true,
                    ),
                )
            )
        )
    )
);