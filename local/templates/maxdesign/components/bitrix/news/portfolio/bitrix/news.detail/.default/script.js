$(function(){
    if($('.portfolio-slider .portfolio-item').length > 1){
        $('.portfolio-slider').owlCarousel({
            items: 1,
            loop: true,
            dots: false,
            center: true
        });
    }
    // var gallery = new Viewer($('.portfolio-detail-container img'));
})