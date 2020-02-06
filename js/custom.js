
AOS.init();

$(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 65) {
        $(".navbar").addClass("fixed");
    } else {
        $(".navbar").removeClass("fixed");
    }
});

$(".toggle-project").click(function () {
    $(".all-project").toggleClass("active");
});

$(".menu-toggle").click(function () {
    $(this).toggleClass("active");
    // $('.sidebar-nav').toggleClass("active");
    $('.page-content-wrapper').toggleClass("active");
    $('.sidebar-nav ul li').each(function (i,k) {
        var t = $(k);
        setTimeout(function () { t.addClass('animation'); }, (i) * 50);
    });
});
$(".submenu .nav-link").click(function () {
   $('.sidebar-nav').toggleClass("active");
   $('.page-content-wrapper').toggleClass("active");
   $(".menu-toggle").toggleClass("active");
   
});

$(".head-search").focus(function () {
    $(this).parent().find('span').hide();
    $(this).parent().find('.after').show();
});


//Check to see if the window is top if not then display button
$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $('.scrollToTop').fadeIn();
    } else {
        $('.scrollToTop').fadeOut();
    }
});

//Click event to scroll to top
$('.scrollToTop').click(function () {
    $('html, body').animate({ scrollTop: 0 }, 800);
    return false;
});
