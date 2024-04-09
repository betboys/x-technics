// swipet slide
let swipers = document.querySelectorAll('.swiper');
let pagination = document.querySelectorAll('.swiper-pagination');
const swiper = new Swiper(swipers[0], {
	slidesPerView: 'auto',
	speed: 1000,
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	pagination: {
		el: pagination[0],
		clickable: true,
	},
});

const swipe2 = new Swiper(swipers[1], {
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
		el: pagination[1],
		clickable: true,
	},
});

if (window.innerWidth > 1201) {
	const swiper3 = new Swiper(swipers[2], {
		slidesPerView: 'auto',
		speed: 1000,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});
}

let headerContainer = document.querySelector('.header-container');
let swiperContainer = document.querySelectorAll('.swiper-container');
let marginLeft = window.getComputedStyle(headerContainer).getPropertyValue('margin-left');
swiperContainer[2].setAttribute('style', `margin-left: ${marginLeft}`);