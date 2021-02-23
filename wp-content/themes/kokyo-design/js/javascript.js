//div-link
/*
jQuery(function(){
    jQuery('.div-link').on("click",function(){
        location.href = jQuery(this).attr('data-href');
    });
});
*/
//hiraku
/*jQuery(".offcanvas-right").hiraku({
    btn:"#offcanvas-btn-right",
    direction:"right"
});
*/

//swiper スライダー
var swiper = new Swiper('.swiper-container', {
    slidesPerView: 3,
    slidesPerGroup: 1,
    speed: 600,
    spaceBetween: 30,
    navigation:{
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    },
    breakpoints: {
        1200: {
            slidesPerView: 2,
            spaceBetween: 30
            },//window width is >= 991px
        767: {
            slidesPerView: 2,
            spaceBetween: 50
            },//window width is >= 767px
        575: {
            slidesPerView: 1,
            spaceBetween: 25
            },//window width is >= 575px
        250: {
        slidesPerView: 1,
        spaceBetween: 55
        },
    }
});

/**
 * スムーススクロール
 */
/*
jQuery(function(){
    jQuery('','a[href^="#"]:not(a.notscroll)').click(function(){
        var speed = 500;
        var href= jQuery(this).attr("href");
        var target = jQuery(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top + 100;
        jQuery("html, body").animate({scrollTop:position}, speed, "swing");
        return false;
    });
});
*/

/**
 * popup nav
 */
jQuery(function(){
    jQuery('#nav__btn').click(function(){
        jQuery('#popup__nav').toggleClass('active');
    });
    jQuery('#close').click(function(){
        jQuery('#popup__nav').toggleClass('active');
    });
});
jQuery('#list a[href]').on('click',function(event){
    jQuery('#nav__btn').trigger('click');
});

//modaal
jQuery('.modal__open').modaal({
    background_scroll: 'false',
    overlay_opacity: 0.9,
});