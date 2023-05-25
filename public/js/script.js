$(function () {
    if (window.pageYOffset == 0) {
        $(".navbar").addClass("grow-menu");
    }
    $(window).scroll(function () {
        var top_offset = $(window).scrollTop();
        if (top_offset == 0) {
            $(".navbar").addClass(
                "grow-menu navbar-dark bg-dark bg-opacity-50"
            );
            $(".navbar").removeClass("navbar-light bg-white");
            $(".navlogo").css("filter", "brightness(0) invert(1)");
            $(".nav-link").addClass("text-white");
            $(".nav-link").removeClass("text-dark");
        } else {
            $(".navbar").removeClass(
                "grow-menu navbar-dark bg-dark bg-opacity-50"
            );
            $(".navbar").addClass("navbar-light bg-white");
            $(".navlogo").css("filter", "unset");
            $(".nav-link").removeClass("text-white");
            $(".nav-link").addClass("text-dark");
        }
    });

    if (window.pageYOffset <= 800) {
        $("header").addClass("top-menu");
    }
    $(window).scroll(function () {
        var top_offset = $(window).scrollTop();
        if (top_offset <= 800) {
            $("header").addClass("top-menu");
        } else {
            $("header").removeClass("top-menu");
        }
    });

    if (window.pageYOffset <= 800) {
        $(".special-offers-link").removeClass("top");
    }
    $(window).scroll(function () {
        var top_offset = $(window).scrollTop();
        if (top_offset <= 800) {
            $(".special-offers-link").removeClass("top");
        } else {
            $(".special-offers-link").addClass("top");
        }
    });
});
setInterval(function () {
    $(".opacity-0").toggleClass("opacity-100");
}, 5000);
