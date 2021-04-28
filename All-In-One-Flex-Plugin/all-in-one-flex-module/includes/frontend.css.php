<style>
    .fl-node- <?php echo $id; ?> {

    background-color: #<?php echo $settings->bg_color; ?>;
    
    }
    .flex-text-editor {
        text-align: <?= $settings->text_editor_align; ?>;
        font-family: <?= $settings->my_font_text['family'];?>;
        margin-top: <?= $settings->text_margin_top . $settings->text_margin_unit;  ?>;
        margin-bottom: <?= $settings->text_margin_bottom . $settings->text_margin_unit;  ?>;
        margin-left: <?= $settings->text_margin_left . $settings->text_margin_unit;  ?>;
        margin-right: <?= $settings->text_margin_right . $settings->text_margin_unit;  ?>;
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
        color: #<?= $settings->qoute_color; ?>;
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
        margin-top: <?= $settings->arrow_margin_top . $settings->arrow_margin_unit;  ?>;
        margin-bottom: <?= $settings->arrow_margin_bottom . $settings->arrow_margin_unit;  ?>;
        margin-left: <?= $settings->arrow_margin_left . $settings->arrow_margin_unit;  ?>;
        margin-right: <?= $settings->arrow_margin_right . $settings->arrow_margin_unit;  ?>;
        max-width: <?= $settings->arrow_width . 'px '; ?>  !important;
    }

    <?= $settings->slides_custom_style ?>

</style>

