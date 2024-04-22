/* data aos */
AOS.init({
    duration: 400,
    easing: 'linear',
    once: true
});

// swipet slide
let swipers = document.querySelectorAll('.swiper')
const swiper = new Swiper(swipers[0], {
	slidesPerView: 'auto',
	speed: 1000,
	centeredSlides: true,
	loop: true,
	spaceBetween: 118,
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},

});

const swiper2 = new Swiper(swipers[1], {
	slidesPerView: 'auto',
	speed: 1000,
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
});

let headerContainer = document.querySelector('.header-container');
let swiperContainer = document.querySelectorAll('.swiper-container');
let marginLeft = window.getComputedStyle(headerContainer).getPropertyValue('margin-left');
swiperContainer[1].setAttribute('style', `margin-left: ${marginLeft}`);