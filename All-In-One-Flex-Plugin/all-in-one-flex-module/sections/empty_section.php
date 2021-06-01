<?php

$empty_section = array(
    'my-tab-8' => array(
        'title' => __('Empty Editor', 'fl-builder'),
        'sections' => array(
            'my-section-1' => array(
                'title' => __('Empty properties', 'fl-builder'),
                'fields' => array(
                    'empty_margin' => array(
                        'type'        => 'dimension',
                        'label'       => 'Margin',
                        'units'          => array( 'px', 'vw', '%' ),
                        'slider' => true,
                        'preview'    => array(
                            'type'          => 'css',
                            'selector'      => '.flex-empty',
                            'property'      => 'margin',
                        ),
                    ),
                )
            ) 
        )
    )
);
?>