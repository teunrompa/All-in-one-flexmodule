<style>
    .fl-node- <?php echo $id; ?> {

    background-color: #<?php echo $settings->bg_color; ?>;
    
    }
    <?
    FLBuilderCSS::typography_field_rule( array(
        'settings'    => $settings,
        'setting_name'    => 'text_typography',
        'selector'    => ".fl-node-$id .flex-text-editor",
    ));  
    ?>
    .flex-text-editor{
        margin-top: <?= $settings->text_margin_top . $settings->text_margin_unit;  ?>;
        margin-bottom: <?= $settings->text_margin_bottom . $settings->text_margin_unit;  ?>;
        margin-left: <?= $settings->text_margin_left . $settings->text_margin_unit;  ?>;
        margin-right: <?= $settings->text_margin_right . $settings->text_margin_unit;  ?>;

*/
    }
    /**
     This selector is needed for each type of heading
    */
    .flex-text-editor , 
    .flex-text-editor h1 , 
    .flex-text-editor h2 ,
    .flex-text-editor h3, 
    .flex-text-editor h4, 
    .flex-text-editor h5,
    .flex-text-editor h6  {
 
        color: #<?= $settings->my_color_field?> !important;

    }
    
    .flex-text-editor p{
        font-style: <?= $settings->text_style; ?>;
        max-width: <?= $settings->text_width . $settings->text_width_unit;?>;
        margin-left: auto;
        margin-right: auto;
    }
    .flex-image {
        text-align: <?= $settings->image_align;?>;
        margin-top: <?= $settings->image_margin_top . $settings->image_margin_unit;  ?>;
        margin-bottom: <?= $settings->image_margin_bottom . $settings->image_margin_unit;  ?>;
        margin-left: <?= $settings->image_margin_left . $settings->image_margin_unit;  ?>;
        margin-right: <?= $settings->image_margin_right . $settings->image_margin_unit;  ?>;
    }
    .flex-image img{
        width: <?= $settings->image_width . $settings->image_width_unit;?>;
    }
    .flex-quote{
        color: #<?= $settings->qoute_color;?>;
        text-align: <?= $settings->qoute_align; ?>;
        font-family: <?= $settings->my_font_quote['family'];?>;
        weight: <?= $settings->my_font_quote['weight'];?>;
        text-transform: <?= $settings->qoute_transform; ?>;
        margin-top: <?= $settings->qoute_margin_top . $settings->qoute_margin_unit;  ?>;
        margin-bottom: <?= $settings->qoute_margin_bottom . $settings->qoute_margin_unit;  ?>;
        margin-left: <?= $settings->qoute_margin_left . $settings->qoute_margin_unit;  ?>;
        margin-right: <?= $settings->qoute_margin_right . $settings->qoute_margin_unit;  ?>;
    }

    .flex-quote p{
        max-width: <?= $settings->qoute_width . $settings->qoute_width_unit;?>;
        margin-left: auto;
        margin-right: auto; 
        font-style: <?= $settings->qoute_style;?>;
    }

    .flex-carousel-image-container{
        /* display: flex;
        justify-content: space-evenly;
        align-items: horizontal; */
    }
    
    .slick-slider{
        display: flex !important;
    }
    .flex-carousel-image{
        display: flex;
        align-items: center;
    }
    .flex-carousel-image img{
        margin: 0 auto;
        max-width: <?= $settings->carousel_image_width . $settings->carousel_image_width_unit;?>;
    }
    .slick-arrow{
        display: <?= $settings->show_arrow_button; ?>  !important;
        /* margin-top: <?= $settings->arrow_margin_top . $settings->arrow_margin_unit;  ?>;
        margin-bottom: <?= $settings->arrow_margin_bottom . $settings->arrow_margin_unit;  ?>;
        margin-left: <?= $settings->arrow_margin_left . $settings->arrow_margin_unit;  ?>;
        margin-right: <?= $settings->arrow_margin_right . $settings->arrow_margin_unit;  ?>;
        max-width: <?= $settings->arrow_width . 'px '; ?>  !important; */
    }
    .flex-button{
        color: #<?= $settings->button_background_color?> !important;
        text-align: <?= $settings->button_editor_align?>;
        
        margin-top: <?= $settings->button_editor_margin_top . $settings->button_editor_margin_unit?>;
        margin-bottom: <?= $settings->button_editor_margin_bottom . $settings->button_editor_margin_unit?>;
        margin-left: <?= $settings->button_editor_margin_left . $settings->button_editor_margin_unit?>;
        margin-right: <?= $settings->button_editor_margin_right . $settings->button_editor_margin_unit?>;

    }/*TODO: button moet nog een border krijgen */ 
    .flex-button a:hover{
        background-color: #<?= $settings->button_background_hover_color?> !important;
    }
    .flex-button a{
        font-style: <?= $settings->button_text_style?>  !important;
        color: #<?= $settings->button_text_color ?> !important;
        background-color: #<?= $settings->button_background_color?> !important;
        font-family: <?= $settings->my_button_font_text['family']?>;
        padding-top: <?= $settings->button_editor_padding_top . $settings->button_editor_padding_unit?>;
        padding-bottom: <?= $settings->button_editor_padding_bottom . $settings->button_editor_padding_unit?>;
        padding-left: <?= $settings->button_editor_padding_left . $settings->button_editor_padding_unit?>;
        padding-right: <?= $settings->button_editor_padding_right . $settings->button_editor_padding_unit?>;
    }
    .flex-button a:hover{
        color: #<?= $settings->button_hover_color?> !important;
    }


    /**
    NOTE: If you ever use this function use it between the <style> tags otherwise it wont work
     */
    <?=
    FLBuilderCSS::typography_field_rule( array(
        'settings'    => $settings,
        'setting_name'    => 'button_typography',
        'selector'    => ".fl-node-$id .flex-button a",
    ));      
    ?>

    .flex-oembed{
        position: relative !important;
        overflow: hidden !important;
        width: <?= $settings->oembed_width?> !important;
        text-align: <?= $settings->oembed_align?> !important;
        padding-top: 56.25% !important;
    }

    .responsive-iframe iframe {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 100%;
        border: none;
    }

    .flex-double-column{
        display: flex;
        max-width: 100%; 
        justify-content: space-between;
        margin-top: <?= $settings->multy_column_margin_top . $settings->multy_column_margin_unit;  ?>;
        margin-bottom: <?= $settings->multy_column_margin_bottom . $settings->multy_column_margin_unit;  ?>;
        margin-left: <?= $settings->multy_column_margin_left . $settings->multy_column_margin_unit;  ?>;
        margin-right: <?= $settings->multy_column_margin_right . $settings->multy_column_margin_unit;  ?>;
    
    }
    .column-1 {
        max-width: 50%;
        padding-right: calc(<?=$settings->space_between_column_center . $settings->space_between_column_center_unit;?> / 2);
    }
    .column-2{
        padding-left: calc( <?=$settings->space_between_column_center . $settings->space_between_column_center_unit;?> / 2);
    }

    /*
    .flex-double-column,
    .flex-double-column h1, 
    .flex-double-column h2,
    .flex-double-column h3,
    .flex-double-column h4,
    .flex-double-column h5,
    .flex-double-column h6 {

    } */

    <?php
       FLBuilderCSS::typography_field_rule( array(
        'settings'    => $settings,
        'setting_name'    => 'multy_column_typography',
        'selector'    => ".fl-node-$id .flex-double-column",
    ));     
    ?>

    .flex-empty{
        margin-top: <?= $settings->empty_margin_top . $settings->empty_margin_unit;  ?>;
        margin-bottom: <?= $settings->empty_margin_bottom . $settings->empty_margin_unit;  ?>;
        margin-left: <?= $settings->empty_margin_left . $settings->empty_margin_unit;  ?>;
        margin-right: <?= $settings->empty_margin_right . $settings->empty_margin_unit;  ?>;
    }

    .flex-cta-button{
        color: #<?= $settings->cta_button_background_color?> !important;
        margin-top: <?= $settings->cta_button_margin_top . $settings->cta_button_margin_unit?>;
        margin-bottom: <?= $settings->cta_button_margin_bottom . $settings->cta_button_margin_unit?>;
        margin-left: <?= $settings->cta_button_margin_left . $settings->cta_button_margin_unit?>;
        margin-right: <?= $settings->cta_button_margin_right . $settings->cta_button_margin_unit?>;

    }

    .flex-cta-button a{
        color: #<?= $settings->cta_button_color ?> !important;
        background-color: #<?= $settings->cta_button_background_color?> !important;
        padding-top: <?= $settings->cta_button_padding_top . $settings->cta_button_padding_unit?>;
        padding-bottom: <?= $settings->cta_button_padding_bottom . $settings->cta_button_padding_unit?>;
        padding-left: <?= $settings->cta_button_padding_left . $settings->cta_button_padding_unit?>;
        padding-right: <?= $settings->cta_button_padding_right . $settings->cta_button_padding_unit?>;
    }
    .flex-cta-button a:hover{
        color: #<?= $settings->cta_text_hover_color?> !important;
        background-color: #<?= $settings->cta_button_hover_color?> !important;
    }

    <?php
       FLBuilderCSS::typography_field_rule( array(
        'settings'    => $settings,
        'setting_name'    => 'cta_button_typography',
        'selector'    => ".fl-node-$id .flex-cta-wrapper",
    ));
    ?>

    @media screen and (max-width: 600px) {
       .flex-double-column{
            display: block;
       }
       .column-1, .column-2{
           padding: 0px;
           max-width: 100%;
       }

    }

    <?= $settings->slides_custom_style ?>

</style>
