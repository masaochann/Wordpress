$('a[href^="#"]').on('click', function() {

    $('#navbarNav').removeClass('show');

    var speed = 500;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    var ua = navigator.userAgent;
    var headerHeight;

    if (ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0 || ua.indexOf('iPad') > 0) {
        // console.log('iPhone or Android or iPad');
        headerHeight = 67;
        // console.log('headerHeight', headerHeight);
    } else {
        // console.log('PC');
        headerHeight = 72;
        // console.log('headerHeight', headerHeight);
    }

    $("html, body").animate({
        scrollTop: position - headerHeight,
    }, speed, "swing");
    return false;
});

$('.gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'ロード中 #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
    },
    zoom: {
        enabled: true,
        duration: 300, // don't foget to change the duration also in CSS
        opener: function(element) {
            return element.find('img');
        }
    },
    image: {
        tError: '<a href="%url%">#%curr%</a> をロードできませんでした。',
        titleSrc: function(item) {
            return item.el.attr('title');
        }
    }
});


$('body').scrollspy({
    target: '#navbarNav',
    offset: 80,
})

$(window).on('scroll', function() {

    // console.log('スクロールされました');

    // console.log($(this).scrollTop());

    if ($(this).scrollTop() > 300) {
        // console.log('> 300');
        $('#pagetop').fadeIn('fast');
    } else {
        // console.log('=< 300');
        $('#pagetop').fadeOut(1000);
    }

});

// $('#pagetop').css({
//     'display': 'none',
// });
