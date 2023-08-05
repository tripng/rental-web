import Swiper from "swiper/bundle";
Swiper.use([Swiper.Navigation]);

var swiper = new Swiper(".banner-swiper", {
    // configure Swiper to use modules
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    effect: "coverflow",
    autoplay: true,
    speed: 1000,
    loop: true,
    centeredSlides: "true",
    slidesPerView: 1,
});
