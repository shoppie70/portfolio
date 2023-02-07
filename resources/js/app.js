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

function ban_scroll() {
    // PC用
    document.addEventListener("wheel", notscroll, { passive: false });
    // スマホ用
    document.addEventListener("touchmove", notscroll, { passive: false });
}
// スクロール禁止解除
function go_scroll() {
    // PC用
    document.removeEventListener("wheel", notscroll, { passive: false });
    // スマホ用
    document.removeEventListener("touchmove", notscroll, { passive: false });
}

// スクロール禁止関数
function notscroll(e) {
    e.preventDefault();
}
