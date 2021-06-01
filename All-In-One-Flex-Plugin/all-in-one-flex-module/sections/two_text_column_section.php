<?php

$multy_column = array(
    'my-tab-7' => array(
        'title' => __('Multy-column Editor', 'fl-builder'),
        'sections' => array(
            'my-section-1' => array(
                'title' => __('Multy-column properties', 'fl-builder'),
                'fields' => array(
                    'multy_column_margin' => array(
                        'type'        => 'dimension',
                        'label'       => 'Margin',
                        'units'          => array( 'px', 'vw', '%' ),
                        'slider' => true,
                        'responsive'  => true,
                        'preview'    => array(
                            'type'          => 'css',
                            'selector'      => '.flex-double-column',
                            'property'      => 'margin',
                        ),
                    ),
                    'space_between_column_center' => array(
                        'type'         => 'unit',
                        'label'        => 'Width',
                        'units'          => array( 'px', 'vw', '%' ),
                        'default_unit' => '%', // Optional
                        'preview'    => array(
                          'type'          => 'css',
                          'selector'      => '.column-1 .column-2',
                          'property'      => 'width',
                        ),
                      ),
                    'multy_column_typography' => array(
                        'type'       => 'typography',
                        'label'      => 'Multy-column Typography',
                        'responsive' => true,
                        'preview'    => array(
                          'type'      => 'css',
                          'selector'  => '.flex-double-column',
                        ),
                    ),
                    
                )
            ) 
        )
    )
);

?>