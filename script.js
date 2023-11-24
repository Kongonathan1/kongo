const btnToggle = document.querySelector('.toggle-btn')
const navbar = document.querySelector('.navbar')

btnToggle.addEventListener('click', () => {
    navbar.classList.toggle('open')
})

 const swiper = new Swiper(".slide-content", {
    slidesPerView: 1,
    centeredSlides: false,
    grabCursor: true,
    keyboard: {
    enabled: true,
    },
    breakpoints: {
    769: {
        slidesPerView: 3,
        slidesPerGroup: 3,
    },
    },
    scrollbar: {
    el: ".swiper-scrollbar",
    },
    navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
    },
    pagination: {
    el: ".swiper-pagination",
    clickable: true,
    },
});

const swiperFlip = new Swiper(".mySwiper", {
    effect: "flip",
    grabCursor: true,
    pagination: {
        el: ".swiper-pagination",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});