
console.log('<?= $settings->button_typography; ?>');

let slideCount = parseInt('<?= $settings->slides_to_show ?>');
let slidesPerScroll = parseInt('<?= $settings->slides_per_scroll ?>');
let breakPoint =  parseInt('<?= $settings->break_point_carousel ?>');
let flexSlidestoShow = parseInt('<?= $settings->flex_slides_to_show_carousel ?>');
let flexSlidesPerScroll = parseInt('<?= $settings->flex_slides_per_scroll_carousel ?>');

console.log(breakPoint);

jQuery(document).ready(function(){    
    if(slideCount > 0 && slidesPerScroll > 0 && breakPoint > 0 && flexSlidestoShow > 0){
        console.log('custom slides');
        jQuery('.flex-carousel-image-container').slick({
            infinite: true,
            slidesToShow:  slideCount ,
            slidesToScroll:  slidesPerScroll ,
            responsive: [
            {
                breakpoint: breakPoint,
                settings:{
                    slidesToShow: flexSlidestoShow,
                    slidesToScroll: flexSlidesPerScroll,
                    infinite: true,
                }
            }
            ],
      
        });
    }else{
        console.log('go to default settings');
        jQuery('.flex-carousel-image-container').slick({
            infinite: true,
            slidesToShow:   3,
            slidesToScroll:   3,
            prevArrow: jQuery('.prev'),
            nextArrow: jQuery('.next'),
            responsive: [
            {
                breakpoint: 600,
                settings:{
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            }
            ],
        });
    }

});

