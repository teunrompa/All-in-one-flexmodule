<?php 

class AllInOneFlexModule extends FLBuilderModule {
    public function __construct()
    {
        parent::__construct(array(
            'name'            => __( 'All in one Flex Module', 'fl-builder' ),
            'description'     => __( 'A module used for styling flex content!', 'fl-builder' ),
            'group'           => __( 'All in one Flex Module', 'fl-builder' ),
            'category'        => __( 'All in one Flex Module', 'fl-builder' ),
            'dir'             => MY_MODULES_DIR . 'all-in-one-flex-module/',
            'url'             => MY_MODULES_URL . 'all-in-one-flex-module/',
            'icon'            => 'button.svg',
            'editor_export'   => true, // Defaults to true and can be omitted.
            'enabled'         => true, // Defaults to true and can be omitted.
            'partial_refresh' => false, // Defaults to false and can be omitted.
        ));
    }
    public function returnFlexContent(){
    
        $instance = 0;
        if( have_rows('flexcontent') ):
            // Loop through rows.
            while ( have_rows('flexcontent') ) : the_row();
                // Case: Paragraph layout.
                $instance++;

                if( get_row_layout() == 'text_editor' ):
                    $text = get_sub_field('content');

                    ?>
                        <div class='flex-text-editor' id='text-<?=$instance?>'><?=$text;?></div>;
                    <?php
                elseif( get_row_layout() == 'image' ): 
                    $image = get_sub_field('content');
                    ?>
                    <div class="flex-image" id="image-<?=$instance?>">
                        <img src="<?=$image['url']?>" alt="">
                    </div>
                    <?php
                    //   echo "<div class='flex-image></div>";
                elseif( get_row_layout() == 'quote' ): 
                    
                    $qoute = get_sub_field('content');
                    ?>
                    <div class='flex-quote' id='qoute-<?=$instance?>'><p><?=$qoute?></p></div>;
                    <?php
                elseif(get_row_layout() == 'gallery'):
                    $images = get_sub_field('content');
                    ?>
                    <!-- <div class="prev"></div> -->
                    <div class='flex-carousel-image-container' id='<?=$instance?>'>;
                    <!-- <div class="next"></div> -->
                    <?php
                    foreach($images as $image){
                        
                        $imageUrl = $image['url'];
                        echo "<div class='flex-carousel-image' ><img id='image-$instance' src='$imageUrl'></img></div>";
                    }
                    echo "</div>";
                                
                elseif(get_row_layout() == 'button'):
                    $btnText = get_sub_field('content');
                    $btnUrl = get_sub_field('url');               
                    ?>
                        <div class='flex-button' id='button-<?=$instance?>'><a href='<?= $btnUrl?>'><span><?= $btnText?></span></a></div>
                    <?php
                
                elseif(get_row_layout() == 'oembed'):
                    $iframe = get_sub_field('content');
                    
                    ?>
                    <div class='flex-oembed responsive-iframe' id="oembed-<?=$instance?>">
                        <?=$iframe?>
                    </div>
                    <?php
                
                elseif(get_row_layout() == 'two_text_column'):
                    $column_1 = get_sub_field('content_1');
                    $column_2 = get_sub_field('content_2');
                    ?>
                    
                    <div class='flex-double-column' id='double-column-<?=$instance?>'>
                        <div class="column-1">
                            <?=$column_1?>
                        </div>
                        <div class='column-2'>
                            <?=$column_2?>
                        </div>
                    </div>
                    
                    <?php
                elseif(get_row_layout() == 'empty'):
                    ?>
                        <div class='flex-empty' id='empty-<?=$instance?>'></div>
                    <?php

                elseif(get_row_layout() == 'cta'):
                    $cta_text = get_sub_field('text');
                    $btn_text = get_sub_field('button_text');
                    $btn_url = get_sub_field('button_url');
                    
                    ?>
                        <div class='flex-cta-wrapper' id="flex-cta-<?=$instance?>">
                            <div class='flex-cta-text'>
                                <?=$cta_text?>
                            </div>
                            <div class='flex-cta-button'>
                                <a href="<?=$btn_url?>"><?=$btn_text?></a>  
                            </div>
                        </div>
                    <?php
                endif;

            // End loop.
            endwhile;
        
        // No value.
        else :
            echo "no content found";
        endif;
    }

}


function returnModuleProperties(){
    $moduleProperties = array(0);
    array_shift($moduleProperties);

    require('sections/text_section.php');
    require('sections/image_section.php');
    require('sections/quote_section.php');
    require('sections/slideshow_section.php');
    require('sections/button_section.php');
    require('sections/oembed_section.php');
    require('sections/two_text_column_section.php');
    require('sections/empty_section.php');
    require('sections/cta_section.php');


    
    array_push($moduleProperties, $text_section);
    array_push($moduleProperties, $image_section);
    array_push($moduleProperties, $quote_section);
    array_push($moduleProperties, $slideshow_section);
    array_push($moduleProperties, $button_section);
    array_push($moduleProperties, $oembed_section);
    array_push($moduleProperties, $multy_column);
    array_push($moduleProperties, $empty_section);
    array_push($moduleProperties, $cta_section);

    return $moduleProperties[0] + $moduleProperties[1] + $moduleProperties[2] + $moduleProperties[3] + $moduleProperties[4] + $moduleProperties[5] + $moduleProperties[6] + $moduleProperties[7] + $moduleProperties[8];
  
}

FLBuilder::register_module( 'AllInOneFlexModule', returnModuleProperties());


?>