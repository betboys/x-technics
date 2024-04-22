/* data aos */
AOS.init({
    duration: 400,
    easing: 'linear',
    once: true
});

// swipet slide
const swiper = new Swiper('.swiper', {
	slidesPerView: 'auto',
	speed: 1000,
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
});

let headerContainer = document.querySelector('.header-container');
let swiperContainer = document.querySelectorAll('.swiper-container');
let marginLeft = window.getComputedStyle(headerContainer).getPropertyValue('margin-left');
swiperContainer[1].setAttribute('style', `margin-left: ${marginLeft}`);