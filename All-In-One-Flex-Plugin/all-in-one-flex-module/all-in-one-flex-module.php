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

        if( have_rows('flexibele_content') ):
            // Loop through rows.
            while ( have_rows('flexibele_content') ) : the_row();
                // Case: Paragraph layout.
  

                if( get_row_layout() == 'text_editor' ):
                    $text = get_sub_field('content');

                    // Do something...
                    echo "<div class='flex-text-editor'>" . $text . "</div>";
                // Case: Download layout.
                elseif( get_row_layout() == 'afbeelding' ): 
                    $text = get_sub_field('content');
                    // Do something...
                    echo "<div class='flex-image'><img src='$text'></img></div>";
                elseif( get_row_layout() == 'quote' ): 
                    
                    $text = get_sub_field('content');
                    // Do something...
                    echo "<div class='flex-quote'><p>" . $text . "</p></div>";
                elseif(get_row_layout() == 'gallery'):
                    $images = get_sub_field('content');
                    $id = 0;
                    echo "<div class='flex-carousel-image-container'>";
                    foreach($images as $image){
                        $id++;
                        $imageUrl = $image['url'];
                        echo "<div class='flex-carousel-image' ><img id='image-$id' src='$imageUrl'></img></div>";
                    }
                    echo "</div>";
                endif;
        
            // End loop.
            endwhile;
        
        // No value.
        else :
            // Do something...
            var_dump($text);

            echo "no content found";
        endif;
    }

}
//VOORBEELD PROBLEEM MET FLEXIBELE OPLOSSING 
// function test(){
//     array(array(),array()) <-- 
// }

function returnModuleProperties(){
    $moduleProperties = array(0);
    array_shift($moduleProperties);
    require('text_section.php');
    require('image_section.php');
    require('quote_section.php');
    require('slideshow_section.php');
    
    array_push($moduleProperties, $text_section);
    array_push($moduleProperties, $image_section);
    array_push($moduleProperties, $quote_section);
    array_push($moduleProperties, $slideshow_section);
    // echo '<pre>';
    // var_dump($moduleProperties);
    // echo '</pre>';
    return $moduleProperties[0] + $moduleProperties[1] + $moduleProperties[2] + $moduleProperties[3];
    // return $moduleProperties[1];
}
// echo '<pre><code>';
// var_dump(returnModuleProperties());
// echo '</code></pre>';
// echo '<pre><code>';
// var_dump($moduleProperties);
// echo '</code></pre>';
    
// die();
FLBuilder::register_module( 'AllInOneFlexModule', returnModuleProperties());


?>