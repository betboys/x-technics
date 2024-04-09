// swipet slide
const swiper = new Swiper('.swiper', {
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