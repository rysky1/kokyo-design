//div-link
$(function(){
    $('.div-link').on("click",function(){
        location.href = $(this).attr('data-href');
    });
});

//hiraku
/*$(".offcanvas-right").hiraku({
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
        250: {
        slidesPerView: 1,
        spaceBetween: 55
        },
        575: {
        slidesPerView: 2,
        spaceBetween: 25
        },//window width is >= 575px
        767: {
        slidesPerView: 2,
        spaceBetween: 50
        },//window width is >= 767px
        991: {
        slidesPerView: 3,
        spaceBetween: 30    
        }//window width is >= 991px
    }
});

//スクロール
$(function(){
    $('a[href^="#"]').click(function(){
        var speed = 500;
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top -80;
        $('body,html').animate({scrollTop:position},speed,'swing');
        return false;
    });
});

//popup
function popupImage() {
    var popup = document.getElementById('js-popup');
    if(!popup) return;

    var blackBg = document.getElementById('js-black-bg');
    var closeBtn = document.getElementById('js-close-btn');
    var showBtn = document.getElementById('js-show-popup');

    closePopUp(blackBg);
    closePopUp(closeBtn);
    closePopUp(showBtn);
    function closePopUp(elem) {
        if(!elem) return;
        elem.addEventListener('click', function() {
            popup.classList.toggle('is-show');
        });
    }
}
popupImage();

//micromodal
MicroModal.init({
    disableScroll: true,
    disableFocus: true,
    awaitCloseAnimation: true,
});