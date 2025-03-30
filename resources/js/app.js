import './bootstrap';
import { createIcons, icons } from "lucide";

document.addEventListener("DOMContentLoaded", function () {
    const toggleButton = document.getElementById("menu-toggle");
    const menu = document.getElementById("mobile-menu");

    if (toggleButton && menu) {
        toggleButton.addEventListener("click", function () {
            menu.classList.toggle("hidden");
        });
    }

    new Swiper(".mySwiper", {
        effect: "fade", 
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: true,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    createIcons({ icons });
    
});