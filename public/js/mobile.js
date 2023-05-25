$("#contact-us-menu").click(function (event) {
    $(".contact-us-box").toggle();
    $(".media-box").hide();
});
$(".items-contact-us").click(function (event) {
    $(".contact-us-box").toggle();
    $(".media-box").hide();
});
$("#media-menu").click(function (event) {
    $(".media-box").toggle();
    $(".contact-us-box").hide();
});
$(".items-menu").click(function (event) {
    $(".media-box").toggle();
    $(".contact-us-box").hide();
});
$(".tawk-btn").click(function (event) {
    $(".container-fixed-menu").css("z-index", 10);
});

$(".popup-carousel").owlCarousel({
    animateOut: "fadeOut",
    loop: true,
    items: 1,
    nav: false,
    dots: true,
    autoplay: true,
    smartSpeed: 5000,
    autoHeight: true,
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>',
    ],
});

$(document).ready(function () {
    $("#show").click(function () {
        $("#hide").show(1000);
        $("#show").hide();
    });
});

$(".read-more-mobile").click(function (event) {
    $(".intro-less-box").hide();
    $(".intro-more-box").show();
});

$(".read-less-mobile").click(function (event) {
    $(".intro-more-box").hide();
    $(".intro-less-box").show();
});

function copyToClipboard(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).text()).select();
    document.execCommand("copy");
    alert("URL copied to clipboard");
    $temp.remove();
}

$(document).ready(function () {
    $(".header-in").click(function () {
        $("#search-text").toggle();
    });
});

$(function () {
    $('#nav a[href~="' + location.href + '"]')
        .parents("li")
        .addClass("active-item");
});

jQuery.event.special.touchstart = {
    setup: function (_, ns, handle) {
        this.addEventListener("touchstart", handle, {
            passive: true,
        });
    },
};
window.addEventListener("load", function () {
    jQuery('a:contains("book now")').click(function () {
        ga("send", "event", "button", "click", "mobile book now");
    });
    jQuery('a:contains("check availability")').click(function () {
        ga("send", "event", "button", "click’,’mobile check availability");
    });
    jQuery('a:contains("select offer")').click(function () {
        // alert('test');
        ga("send", "event", "button", "click’,’mobile select offer");
    });
});

$(".datepicker, #reserveddate").datepicker({
    format: "dd-mm-yyyy",
    startDate: "28-01-2023",
    autoclose: true,
});
$(".datepicker").change(function (e) {
    let str = $(this).val();
    var res = str.split("-");
    $(this)
        .closest(".col")
        .find(".datepicker-input")
        .val(res[2] + "-" + res[1] + "-" + res[0]);
});
