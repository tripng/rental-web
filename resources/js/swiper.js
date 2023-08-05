import Swiper from "swiper/bundle";
Swiper.use([Swiper.Navigation]);

var banner = new Swiper(".banner-swiper", {
    // configure Swiper to use modules
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    effect: "coverflow",
    autoplay: true,
    speed: 1000,
    slidesPerView: 1,
    spaceBetween: "10",
    loop: true,
});
var category = new Swiper(".category-swiper", {
    // configure Swiper to use modules
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    effect: "slide",
    autoplay: true,
    speed: 1000,
    slidesPerView: 4,
    slidesPerGroup: 2,
    spaceBetween: "10",
    loop: true,
    breakpoints: {
        // when window width is >= 640px
        720: {
            slidesPerView: 6,
            slidesPerGroup: 3,
        },
        1024: {
            slidesPerView: 8,
            slidesPerGroup: 4,
        },
    },
});
var category = new Swiper(".category-swiper", {
    // configure Swiper to use modules
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    effect: "slide",
    autoplay: true,
    speed: 1000,
    slidesPerView: 2,
    slidesPerGroup: 2,
    spaceBetween: "10",
    loop: true,
    breakpoints: {
        // when window width is >= 640px
        720: {
            slidesPerView: 4,
            slidesPerGroup: 4,
        },
        1024: {
            slidesPerView: 6,
            slidesPerGroup: 6,
        },
    },
});
