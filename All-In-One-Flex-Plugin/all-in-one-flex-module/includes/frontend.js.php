console.log('<?= $settings->slides_to_show; ?>');

let slideCount = parseInt('<?= $settings->slides_to_show; ?>');
let slidesPerScroll = parseInt('<?= $settings->slides_per_scroll; ?>');

jQuery(document).ready(function(){    
    if(slideCount > 0 && slidesPerScroll > 0){
        console.log('custom slides');
        jQuery('.flex-carousel-image-container').slick({
            infinite: true,
            slidesToShow:  slideCount ,
            slidesToScroll:  slidesPerScroll ,
        });
    }else{
        console.log('go to default settings');
        jQuery('.flex-carousel-image-container').slick({
            infinite: true,
            slidesToShow:   3,
            slidesToScroll:   3,
        });
    }

});
