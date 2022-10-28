const swiper = new Swiper(".swiperLoop", {
    spaceBetween: 0,
    loop:true,
    centeredSlides: true,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
});


const sr = ScrollReveal({
    origin: "rigth",
    distance: '60px',
    duration: 2500,
    delay: 400,
    reset: true,
});

sr.reveal(`.form-container, .swiperLoop`);