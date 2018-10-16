$(document).ready(function () {
    $(".banner-slide").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        centerMode: true,
        centerPadding: '0',
        dots: false,
        fade: false,
        autoplay: true,
        infinite: true,
    });
    $(".ImagesFrameCrop0").each(function () {
        $(this).removeClass("wide")
        $(this).removeClass("tall")
        if ($(this).width() / $(this).height() > $(this).parent().width() / $(this).parent().height()) {
            $(this).addClass("wide");
        } else {
            $(this).addClass("tall");
        }
    });
    $(".ImagesFrameCrop0").children("img").each(function () {
        $(this).removeClass("wide")
        $(this).removeClass("tall")
        if ($(this).width() / $(this).height() > $(this).parent().width() / $(this).parent().height()) {
            $(this).addClass("wide");
        } else {
            $(this).addClass("tall");
        }
    });
    AOS.init({
        once: true,
        offset: 0,
        easing: 'ease-in-out-cubic',
        duration: "300",
    });
    if ($(this).scrollTop() >= 42) {
        $(".header-nav").addClass("scrolled");


    } else {
        $(".header-nav").removeClass("scrolled");

    }

    $(document).scroll(function () {
        if ($(this).scrollTop() >= $("#main").offset().top) {
            $(".back-top").addClass("active");
            $(".banner-mouse").addClass("deactive");

        } else {
            $(".back-top").removeClass("active");
            $(".banner-mouse").removeClass("deactive");

        }
        if ($(this).scrollTop() >= 42) {
            $(".header-nav").addClass("scrolled");


        } else {
            $(".header-nav").removeClass("scrolled");

        }
    });
    $(".banner-mouse").click(function () {
        $("html, body").animate({
            scrollTop: $("#main").offset().top
        }, 1000);
    })
    $(".back-top").on("click", function () {
        $(".back-top").removeClass("active");
        $("html, body").animate({
            scrollTop: 0
        }, 1000);
    });
    $(".show__top").click(function () {
        $(".menu-top").toggleClass("active");
        $(".menu").removeClass("active");

    });
    $(".close__top").click(function () {
        $(".menu-top").removeClass("active");
    });
    $(".close__menu").click(function () {
        $(".menu").removeClass("active");
    });

    $(".show__menu").click(function () {
        $(".menu").toggleClass("active");
        $(".menu-top").removeClass("active");
    });


});
