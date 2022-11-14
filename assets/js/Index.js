var swiper = new Swiper(".home-slider", {
    spaceBetween: 20,
    effect: "fade",
    grabCursor: true,
    loop:true,
    centeredSlides: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
});

var swiper = new Swiper(".review-slider", {
    spaceBetween: 20,
    grabCursor: true,
    loop:true,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    breakpoints:{
        0:{
            slidesPerView:1,
        },
        600:{
            slidesPerView:2,
        },
    },
});


const sr = ScrollReveal({
    origin: "rigth",
    distance: '60px',
    duration: 2500,
    delay: 400,
});
sr.reveal(`.about, .review`)
sr.reveal(`.features`,{origin:"left"})
sr.reveal(`.trainers, .info-plans, .basic, .plan, .footer-box`,{origin:"bottom", interval:500})
sr.reveal(` .home-slider`,{origin:"top"})