<?php

$oembed_section = array(
    'my-tab-6' => array(
        'title' => __('oEmbed Editor', 'fl-builder'),
        'sections' => array(
            'my-section-1' => array(
                'title' => __('oEmbed properties', 'fl-builder'),
                'fields' => array(
                    'oembed_width' => array(
                        'type'         => 'unit',
                        'label'        => 'Width',
                        'units'          => array( 'px', 'vw', '%' ),
                        'default_unit' => '%', // Optional
                        'preview'    => array(
                          'type'          => 'css',
                          'selector'      => '.flex-oembed',
                          'property'      => 'width',
                        ),
                    ),
                    'oembed_align' => array(
                        'type'    => 'align',
                        'label'   => 'oEmbed Align',
                        'default' => 'center',
                        'preview' => array(
                            'type'       => 'css',
                            'selector'   => '.flex-oembed',
                            'property'   => 'text-align',
                        ),
                    ),
                )
            ) 
        )
    )
);
?>