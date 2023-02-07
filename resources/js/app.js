import './bootstrap';

import Alpine from 'alpinejs';

import.meta.glob([
    '../images/**',
    '../fonts/**',
]);

window.Alpine = Alpine;

Alpine.start();

const swiper = new Swiper(".swiper", {
    slidesPerView: 3,
    pagination: {
        el: ".swiper-pagination"
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
    }
});

const CLASSNAME = "-visible";
const TIMEOUT = 1500;
const targets = document.querySelectorAll('.title');

setInterval(() => {
    for (let index = 0; index < targets.length; index += 1) {
        const element = targets[index];
        element.classList.add(CLASSNAME);
    }
}, TIMEOUT);
