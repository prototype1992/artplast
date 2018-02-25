jQuery(function($) {

    // modal заказать звонок
    var shadow = $('.shadow');
    var header_phone_call = $('.header-phone__call');
    var modal_ordercall = $('.modal-ordercall');
    var modal_ordercall__close = $('.modal-ordercall__close');
    // закрытие при клике на тень
    shadow.click(function (e) {
        e.preventDefault();
        shadow.fadeOut();
        modal_ordercall.fadeOut();
    });
    // открываем окно заказать звонок
    header_phone_call.click(function (e) {
        e.preventDefault();
        shadow.fadeIn();
        modal_ordercall.fadeIn();
    });

    // окно заказать звонок close
    modal_ordercall__close.click(function (e) {
        e.preventDefault();
        shadow.fadeOut();
        modal_ordercall.fadeOut();
    });
    // modal заказать звонок end ////////////////////////////////////////////////////////////////////


    // появление тени при наведении на категории
    $('.sidebar .categories__item_drop').hover(function (e) {
        shadow.stop().fadeIn();
    }, function (e) {
        shadow.stop().fadeOut();
    });
    // появление тени при наведении на категории end //////////////////////////////////////////////////


    // при наведение на меню пункта родителя подсвечивается
    $('.sub-category-menu').hover(function (e) {
        $(this).parent().addClass('categories__item_active');
    }, function (e) {
        $(this).parent().removeClass('categories__item_active');
    });


    // accardeon vakansii list
    var vakansii_list_item = $('.vakansii-list-item__title');
    var vakansii_list_item_body = $('.vakansii-list-item__body');

    vakansii_list_item.on('click', function(e){
        $(this).parent().toggleClass('active');
        $(this).next('.vakansii-list-item__body').slideToggle();
    });
    // accardeon vakansii list end ///////////////////////////////////////////////


    // contact tabs
    var contact_info_tab = $(".contact-info-cityes .tab");
    var contact_info_item = $(".tab_item");

    contact_info_item.not(":first").hide();
    contact_info_tab.click(function() {
        contact_info_tab.removeClass("active").eq($(this).index()).addClass("active");
        contact_info_item.hide().eq($(this).index()).fadeIn()
    }).eq(0).addClass("active");
    // contact tabs end //////////////////////////////////////////////////////////


    // contact maps tabs
    var center_office_tab = $(".center-office__right .center-office__tab");
    var center_office_item = $(".center-office__right .center-office__item");

    center_office_item.not(":first").hide();
    center_office_tab.click(function() {
        center_office_tab.removeClass("active").eq($(this).index()).addClass("active");
        center_office_item.hide().eq($(this).index()).fadeIn()
    }).eq(0).addClass("active");
    // contact maps tabs end


    //
    var our_products_sub = $('.our-products-sub');
    var our_products_subwrap = $('.our-product-item__link');

    our_products_subwrap.on('click', function (e) {
        e.preventDefault();
        $(this).parent().toggleClass('active');

        $(this).parent().parent().next().addClass('our-product-item__allcats--hide').text('Скрыть');

    });

    $('.our-product-item__allcats--hide').on('click', function (e) {
        e.preventDefault();
        $(this).prev().children().children('.our-products-sub').hide();
        $(this).text('Все разделы');
        $(this).removeClass('our-product-item__allcats--hide');
    });

    // /////////////////////////////////////////////////

    
    // открытие блока в наличии
    $('.product-item-home__pod-order > a').on('click', function (e) {
        e.preventDefault();
        $(this).next('.block-in-stock').stop().fadeToggle();
    });

    $('.in-nalichie__toggle').on('click', function (e) {
        e.preventDefault();
        $(this).next('.block-in-stock').stop().fadeToggle();
    });

    $('.frequently-bought-list__pod-order').on('click', function (e) {
        e.preventDefault();
        //$(this).children('.block-in-stock').stop().fadeToggle();
        $(this).children('.block-in-stock').stop().show();
    });
    // открытие блока в наличии end ///////////////////////////////////////


    // shipping-addresses ///////////////////////////////// при нажатии появляется инпут и кнопка ок
    $('.shipping-addresses-item__editbtn').on('click', function (e) {
        e.preventDefault();
        var titleText = $(this).next('.shipping-addresses-item__title').children('a').text();

        $(this).hide();
        $(this).parent().children('.shipping-addresses-item__title').hide();

        $(this).parent().children('.shipping-addresses-item__input').show().focus();
        $(this).parent().children('.shipping-addresses-item__input').val( titleText );
        $(this).parent().children('.shipping-addresses-item__okbtn').show();
    });
    // shipping-addresses ///////////////////////////////// end


    // обработка надатия кнопки ок, когда открыто редактирование
    $('.shipping-addresses-item__okbtn').on('click', function (e) {
        e.preventDefault();
        var inputVal = $(this).parent().children('.shipping-addresses-item__input').val();

        $(this).parent().children('.shipping-addresses-item__input').hide();
        $(this).hide();

        $(this).parent().children('.shipping-addresses-item__title').show();
        $(this).parent().children('.shipping-addresses-item__title').children('a').text(inputVal).show();
        $(this).parent().children('.shipping-addresses-item__editbtn').show();

    });
    // обработка надатия кнопки ок, когда открыто редактирование end ////////////////////////////


    // Каталог список табы
    $('.catalog-list--list__tab').on('click', function (e) {
        e.preventDefault();
        $(this).parent().children('.catalog-list--list__tab').removeClass('active');
        $(this).addClass('active');
    });

    $('.catalog-list--list__tab_shtook').on('click', function (e) {
        $(this).parent().next().children('.catalog-list--list__tab-item').hide();
        $(this).parent().next().children('.catalog-list--list__tab-item_shtook').show();
    });
    $('.catalog-list--list__tab_upak').on('click', function (e) {
        $(this).parent().next().children('.catalog-list--list__tab-item').hide();
        $(this).parent().next().children('.catalog-list--list__tab-item_upak').show();
    });
    $('.catalog-list--list__tab_mest').on('click', function (e) {
        $(this).parent().next().children('.catalog-list--list__tab-item').hide();
        $(this).parent().next().children('.catalog-list--list__tab-item_mest').show();
    });
    // Каталог список табы end ////////////////////////////////////////////////////


    // Карточка товара табы
    $(".product-detail-descr__tab-item").not(":first").hide();
    $(".product-detail-descr__tab").click(function() {
        $(".product-detail-descr__tab").removeClass("active").eq($(this).index()).addClass("active");
        $(".product-detail-descr__tab-item").hide().eq($(this).index()).fadeIn()
    }).eq(0).addClass("active");
    // Карточка товара табы end //////////////////////////////////////////////////


    // login dropdown menu
    $('.top-bar-cabinet__drop').on('click', function (e) {
        e.preventDefault();
        $(this).next('.top-bar-cabinet__down-list').stop().slideToggle();
    });
    // login dropdown menu end ///////////////////////////////////////////////
    
    
    // page cart scripts
    $('.frequently-bought-list__no-forget-order').on('click', function (e) {
        e.preventDefault();

        $(this).addClass('forget-order--act');
        $(this).parent().parent().children('.frequently-bought-list__modal').stop().fadeIn();

    });
    // page cart scripts end //////////////////////////////////////////////////


    //
    $('.frequently-bought-btns__right .btn-oneclick').on('click', function (e) {
        e.preventDefault();
        $('.oneclick-block').stop().slideDown();
    });
    $('.oneclick-block__close').on('click', function (e) {
        e.preventDefault();
        $('.oneclick-block').stop().slideUp();
    });

    $('#oneclick-block__right-check').on('click', function (e) {
        if( $(this).prop("checked") ) {
            $('.oneclick-block__right-email').slideDown();
        }
        else {
            $('.oneclick-block__right-email').slideUp();
        }
    });

    // page cart scripts end ///////////////////////////////////////////


    // filter
    $('.module-filters-list__showall').on('click', function (e) {
        e.preventDefault();
        $(this).parent()
            .children('.module-filters-list__sub')
            .children('.module-filters-list__sub-item--hide')
            .slideToggle();
    });
    // filter end


    // accardeon menu
    var accardeon_sub = $('.accardeon-menu--sub');
    $('.accardeon-menu__item--drop').on('click', function (e) {
        e.preventDefault();

        if( $(this).children('.accardeon-menu--sub').css('display') == 'block' ) {
            $(this).removeClass('active');
            $(this).children('.accardeon-menu--sub').slideUp();
        }
        else {
            $('.accardeon-menu__item--drop').removeClass('active');
            accardeon_sub.slideUp();
            $(this).toggleClass('active');
            $(this).children('.accardeon-menu--sub').stop().slideToggle();
        }
    });
    // accardeon menu end


    // input file script page 43, 35, 34, 33, 11
    // 43
    $('.file-input-main__label').on('click', function (e) {
        $(this).prev().trigger('click');
        e.preventDefault();
    });
    $('.file-input-main__field').on('change', function() {
        var filename = $(this).val();

        if( filename != '' ) {
            $(this).next().text('Прикреплена схема проезда');
            $(this).next().addClass('file-input-main__label--active');
            $(this).parent().children('.file-delete').addClass('file-delete--active');
        }
        else {}
    });
    $('.file-delete').on('click', function (e) {
        e.preventDefault();
        $(this).removeClass('file-delete--active');
        $(this).parent().children('.file-input-main__field').val('');
        $(this).parent().children('.file-input-main__label').removeClass('file-input-main__label--active');
        $(this).parent().children('.file-input-main__label').text('Прикрепить схему проезда');
    });
    // 43 end

    // 34
    $('.file-input-payment__label').on('click', function (e) {
        $(this).prev().trigger('click');
        e.preventDefault();
    });
    $('.file-input-payment__field').on('change', function() {
        var filename = $(this).val();

        if( filename != '' ) {
            $(this).next().text('Прикреплен файл с реквизитами ');
            $(this).next().addClass('file-input-payment__field--active');
            $(this).parent().children('.file-delete').addClass('file-delete--active');
        }
        else {}
    });
    $('.file-delete').on('click', function (e) {
        e.preventDefault();
        $(this).removeClass('file-delete--active');
        $(this).parent().children('.file-input-payment__field').val('');
        $(this).parent().children('.file-input-payment__label').removeClass('file-input-payment__field--active');
        $(this).parent().children('.file-input-payment__label').text('Прикрепить файл с реквизитами');
    });
    // 34 end

    // 34 2
    $('.file-input-producing__label').on('click', function (e) {
        $(this).prev().trigger('click');
        e.preventDefault();
    });
    $('.file-input-producing__field').on('change', function() {
        var filename = $(this).val();

        if( filename != '' ) {
            $(this).next().text('Прикреплена схема проезда ');
            $(this).next().addClass('file-input-producing__label--active');
            $(this).parent().children('.file-delete').addClass('file-delete--active');
        }
        else {}
    });
    $('.file-delete').on('click', function (e) {
        e.preventDefault();
        $(this).removeClass('file-delete--active');
        $(this).parent().children('.file-input-producing__field').val('');
        $(this).parent().children('.file-input-producing__label').removeClass('file-input-producing__label--active');
        $(this).parent().children('.file-input-producing__label').text('Прикрепить схему проезда');
    });
    // 34 2 end

    // 11
    $('.file-input-vakansii__label').on('click', function (e) {
        $(this).prev().trigger('click');
        e.preventDefault();
    });
    $('.file-input-vakansii__field').on('change', function() {
        var filename = $(this).val();

        if( filename != '' ) {
            $(this).next().text('Прикреплен файл с резюме  ');
            $(this).next().addClass('file-input-vakansii__label--active');
            $(this).parent().children('.file-delete').addClass('file-delete--active');
        }
        else {}
    });
    $('.file-input-vakansii .file-delete').on('click', function (e) {
        e.preventDefault();
        $(this).removeClass('file-delete--active');
        $(this).parent().children('.file-input-vakansii__field').val('');
        $(this).parent().children('.file-input-vakansii__label').removeClass('file-input-vakansii__label--active');
        $(this).parent().children('.file-input-vakansii__label').text('Прикрепить файл с резюме');
    });
    // 11 end
    // input file script page 43, 35, 34, 33, 11 end

    $('.top-bar-language a').on('click', function (e) {
        e.preventDefault();
        $('.top-bar-language a').removeClass('active');
        $(this).addClass('active');
    });

    $('.header-phone__sad').on('click', function (e) {
        $('.modal-feedback__title').css('background-image', 'url(static/img/header-sad.png)');
    });
    $('.header-phone__smile').on('click', function (e) {
        $('.modal-feedback__title').css('background-image', 'url(static/img/header-smile.png)');
    });


    $('.header-youcity__middle button').on('click', function (e) {
        e.preventDefault();
        $('.header-youcity__middle').hide();
    });


});