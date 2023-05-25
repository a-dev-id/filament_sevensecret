$(document).ready(function () {
    $(".slider").slick({
        dots: false,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: "linear",
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
    });
    $('[data-fancybox="gallery"]').fancybox({
        loop: true,
        infobar: false,
        buttons: ["zoom", "close"],
    });
});

$(".anc-close").click(function (event) {
    $(".anc-box").remove();
});

$(window).scroll(function () {
    var height = $(window).scrollTop();

    if (height > 100) {
        $(".anc-box").hide("slow");
    } else {
        $(".anc-box").show("slow");
    }
});
