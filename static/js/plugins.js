jQuery(function($) {

    // run plugins
    $(".myphone").mask("+7 (999) 999-99-99");

    // style scroll
    $('.frequently-bought-list__modal-inner').niceScroll({
        cursorfixedheight: 80
    });

    $('.modal-select-city__right-inner').niceScroll({
        cursorfixedheight: 80
    });
    
    // slider
    var owl = $(".owl-carousel").owlCarousel({
        items: 4,
        margin: 30
    });
    // Go to the next item
    $('.recommended-products__next').click(function() {
        owl.trigger('next.owl.carousel');
    });
    // Go to the previous item
    $('.recommended-products__prev').click(function() {
        owl.trigger('prev.owl.carousel', [300]);
    });
    // slider end

    // slider
    var slider2 = $('.related-items-list--netv').owlCarousel({
        items: 4,
        margin: 30
    });
    // Go to the next item
    $('.related-items-list-wrap__next--net').click(function() {
        slider2.trigger('next.owl.carousel');
    });
    // Go to the previous item
    $('.related-items-list-wrap__prev--net').click(function() {
        slider2.trigger('prev.owl.carousel', [300]);
    });
    // slider end
    
    
    // slider
    var slider3 = $('.related-items-list--view').owlCarousel({
        items: 4,
        margin: 30
    });
    // Go to the next item
    $('.related-items-list-wrap__next--view').click(function() {
        slider3.trigger('next.owl.carousel');
    });
    // Go to the previous item
    $('.related-items-list-wrap__prev--view').click(function() {
        slider3.trigger('prev.owl.carousel', [300]);
    });
    // slider end

    // fancybox
    $('.fancybox').fancybox({
        helpers : {
            overlay : {
                locked: false
            }
        },
        padding: 0,
        fitToView:false,
        scrolling: 'hidden'
    });
    // fancybox end

    // fancybox-city
    $('.fancybox-city').fancybox();
    // fancybox-city end
    // run plugins end

});