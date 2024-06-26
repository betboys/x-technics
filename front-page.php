<?php get_header(); ?>
<img class="home-linear-1" src="https://x-technics.com/ysteeshy/2024/05/linear.webp" alt="">
<img class="home-linear-2" src="https://x-technics.com/ysteeshy/2024/05/linear.webp" alt="">
<img class="home-linear-3" src="https://x-technics.com/ysteeshy/2024/05/linear.webp" alt="">
<section class="home-cover">
	<div class="home-hero-img hero-photo">
		<img class="hero-photo-style" src="<?= the_field('image'); ?>" alt="">
	</div>
	<div class="cover-title-subtitle-inner">
		<div>
			<h1 class="cover-title home-cover-title"><?= the_field('title'); ?></h1>
			<h2 class="subtitle home-cover-subtitle"><?= the_field('description'); ?></h2>
		</div>
		<?php
		$link = get_field('button');
		if ($link): ?>

			<a class="cover-link" href="<?php echo esc_url($link); ?>">
				<svg class="home-cover-link-web" xmlns="http://www.w3.org/2000/svg" width="275" height="53"
					viewBox="0 0 275 53" fill="none">
					<path d="M18.1383 53L0 26V0H255.691L275 26.5V53H18.1383Z" fill="url(#paint0_linear_2038_96772)" />
					<defs>
						<linearGradient id="paint0_linear_2038_96772" x1="0" y1="26.5" x2="275" y2="26.5"
							gradientUnits="userSpaceOnUse">
							<stop stop-color="#0071AA" />
							<stop offset="1" stop-color="#24B6FF" />
						</linearGradient>
					</defs>
				</svg>
				<svg class="home-cover-link-mob" xmlns="http://www.w3.org/2000/svg" width="290" height="53"
					viewBox="0 0 290 53" fill="none">
					<path d="M19.1277 53L0 26V0H269.638L290 26.5V53H19.1277Z" fill="url(#paint0_linear_2038_96756)" />
					<defs>
						<linearGradient id="paint0_linear_2038_96756" x1="0" y1="26.5" x2="290" y2="26.5"
							gradientUnits="userSpaceOnUse">
							<stop stop-color="#0071AA" />
							<stop offset="1" stop-color="#24B6FF" />
						</linearGradient>
					</defs>
				</svg>
				<span class="cover-link-text">Explore Our Services</span>
			</a>
		<?php endif; ?>
	</div>
</section>
<section class="home-our-services-container" data-aos="fade-up">
	<h3 class="title title-before-after-effect home-our-serive-title"><?= the_field('heading'); ?></h3>
	<ul class="services-content-flex">
		<?php
		if (have_rows('card1')):
			while (have_rows('card1')):
				the_row(); ?>
				<li class="services-content-list">
					<a class="link-el" href="<?php the_sub_field('home_our_service_link1'); ?>">
						<img class="services-content-image" src="<?php the_sub_field('home_our_service_image1'); ?>" alt="">
						<img class="services-content-image-hover" src="<?php the_sub_field('home_our_service_image_hover1'); ?>"
							alt="">
						<p class="services-content-link">
							<span class="service-ttile"><?php the_sub_field('home_our_service_title1'); ?></span>
							<svg class="service-link-svg" xmlns="http://www.w3.org/2000/svg" width="40" height="40"
								viewBox="0 0 40 40" fill="none">
								<path class="card-icon-stroke"
									d="M25.0003 25.0001V15.0001M25.0003 15.0001H15.0003M25.0003 15.0001L15.0003 24.9999M13 35H27C29.8003 35 31.2004 35 32.27 34.455C33.2108 33.9757 33.9757 33.2108 34.455 32.27C35 31.2004 35 29.8003 35 27V13C35 10.1997 35 8.79961 34.455 7.73005C33.9757 6.78924 33.2108 6.02433 32.27 5.54497C31.2004 5 29.8003 5 27 5H13C10.1997 5 8.79961 5 7.73005 5.54497C6.78924 6.02433 6.02433 6.78924 5.54497 7.73005C5 8.79961 5 10.1997 5 13V27C5 29.8003 5 31.2004 5.54497 32.27C6.02433 33.2108 6.78924 33.9757 7.73005 34.455C8.79961 35 10.1997 35 13 35Z"
									stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</p>
					</a>
				</li>
				<?Php
			endwhile;
		endif; ?>
		<?php
		if (have_rows('card2')):
			while (have_rows('card2')):
				the_row(); ?>
				<li class="services-content-list">
					<a class="link-el" href="<?php the_sub_field('home_our_service_link2'); ?>">
						<img class="services-content-image" src="<?php the_sub_field('home_our_service_image2'); ?>" alt="">
						<img class="services-content-image-hover" src="<?php the_sub_field('home_our_service_image_hover2'); ?>"
							alt="">
						<p class="services-content-link">
							<span class="service-ttile"><?php the_sub_field('home_our_service_title2'); ?></span>
							<svg class="service-link-svg" xmlns="http://www.w3.org/2000/svg" width="40" height="40"
								viewBox="0 0 40 40" fill="none">
								<path class="card-icon-stroke"
									d="M25.0003 25.0001V15.0001M25.0003 15.0001H15.0003M25.0003 15.0001L15.0003 24.9999M13 35H27C29.8003 35 31.2004 35 32.27 34.455C33.2108 33.9757 33.9757 33.2108 34.455 32.27C35 31.2004 35 29.8003 35 27V13C35 10.1997 35 8.79961 34.455 7.73005C33.9757 6.78924 33.2108 6.02433 32.27 5.54497C31.2004 5 29.8003 5 27 5H13C10.1997 5 8.79961 5 7.73005 5.54497C6.78924 6.02433 6.02433 6.78924 5.54497 7.73005C5 8.79961 5 10.1997 5 13V27C5 29.8003 5 31.2004 5.54497 32.27C6.02433 33.2108 6.78924 33.9757 7.73005 34.455C8.79961 35 10.1997 35 13 35Z"
									stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</p>
					</a>
				</li>
				<?Php
			endwhile;
		endif; ?>
		<?php
		if (have_rows('card3')):
			while (have_rows('card3')):
				the_row(); ?>
				<li class="services-content-list">
					<a class="link-el" href="<?php the_sub_field('home_our_service_link3'); ?>">
						<img class="services-content-image" src="<?php the_sub_field('home_our_service_image3'); ?>" alt="">
						<img class="services-content-image-hover" src="<?php the_sub_field('home_our_service_image_hover3'); ?>"
							alt="">
						<p class="services-content-link">
							<span class="service-ttile"><?php the_sub_field('home_our_service_title3'); ?></span>
							<svg class="service-link-svg" xmlns="http://www.w3.org/2000/svg" width="40" height="40"
								viewBox="0 0 40 40" fill="none">
								<path class="card-icon-stroke"
									d="M25.0003 25.0001V15.0001M25.0003 15.0001H15.0003M25.0003 15.0001L15.0003 24.9999M13 35H27C29.8003 35 31.2004 35 32.27 34.455C33.2108 33.9757 33.9757 33.2108 34.455 32.27C35 31.2004 35 29.8003 35 27V13C35 10.1997 35 8.79961 34.455 7.73005C33.9757 6.78924 33.2108 6.02433 32.27 5.54497C31.2004 5 29.8003 5 27 5H13C10.1997 5 8.79961 5 7.73005 5.54497C6.78924 6.02433 6.02433 6.78924 5.54497 7.73005C5 8.79961 5 10.1997 5 13V27C5 29.8003 5 31.2004 5.54497 32.27C6.02433 33.2108 6.78924 33.9757 7.73005 34.455C8.79961 35 10.1997 35 13 35Z"
									stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</p>
					</a>
				</li>
				<?Php
			endwhile;
		endif; ?>
		<?php
		if (have_rows('card4')):
			while (have_rows('card4')):
				the_row(); ?>
				<li class="services-content-list">
					<a class="link-el" href="<?php the_sub_field('home_our_service_link4'); ?>">
						<img class="services-content-image" src="<?php the_sub_field('home_our_service_image4'); ?>" alt="">
						<img class="services-content-image-hover" src="<?php the_sub_field('home_our_service_image_hover4'); ?>"
							alt="">
						<p class="services-content-link">
							<span class="service-ttile"><?php the_sub_field('home_our_service_title4'); ?></span>
							<svg class="service-link-svg" xmlns="http://www.w3.org/2000/svg" width="40" height="40"
								viewBox="0 0 40 40" fill="none">
								<path class="card-icon-stroke"
									d="M25.0003 25.0001V15.0001M25.0003 15.0001H15.0003M25.0003 15.0001L15.0003 24.9999M13 35H27C29.8003 35 31.2004 35 32.27 34.455C33.2108 33.9757 33.9757 33.2108 34.455 32.27C35 31.2004 35 29.8003 35 27V13C35 10.1997 35 8.79961 34.455 7.73005C33.9757 6.78924 33.2108 6.02433 32.27 5.54497C31.2004 5 29.8003 5 27 5H13C10.1997 5 8.79961 5 7.73005 5.54497C6.78924 6.02433 6.02433 6.78924 5.54497 7.73005C5 8.79961 5 10.1997 5 13V27C5 29.8003 5 31.2004 5.54497 32.27C6.02433 33.2108 6.78924 33.9757 7.73005 34.455C8.79961 35 10.1997 35 13 35Z"
									stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</p>
					</a>
				</li>
				<?Php
			endwhile;
		endif; ?>
		<?php
		if (have_rows('card5')):
			while (have_rows('card5')):
				the_row(); ?>
				<li class="services-content-list">
					<a class="link-el" href="<?php the_sub_field('home_our_service_link5'); ?>">
						<img class="services-content-image" src="<?php the_sub_field('home_our_service_image5'); ?>" alt="">
						<img class="services-content-image-hover" src="<?php the_sub_field('home_our_service_image_hover5'); ?>"
							alt="">
						<p class="services-content-link">
							<span class="service-ttile"><?php the_sub_field('home_our_service_title5'); ?></span>
							<svg class="service-link-svg" xmlns="http://www.w3.org/2000/svg" width="40" height="40"
								viewBox="0 0 40 40" fill="none">
								<path class="card-icon-stroke"
									d="M25.0003 25.0001V15.0001M25.0003 15.0001H15.0003M25.0003 15.0001L15.0003 24.9999M13 35H27C29.8003 35 31.2004 35 32.27 34.455C33.2108 33.9757 33.9757 33.2108 34.455 32.27C35 31.2004 35 29.8003 35 27V13C35 10.1997 35 8.79961 34.455 7.73005C33.9757 6.78924 33.2108 6.02433 32.27 5.54497C31.2004 5 29.8003 5 27 5H13C10.1997 5 8.79961 5 7.73005 5.54497C6.78924 6.02433 6.02433 6.78924 5.54497 7.73005C5 8.79961 5 10.1997 5 13V27C5 29.8003 5 31.2004 5.54497 32.27C6.02433 33.2108 6.78924 33.9757 7.73005 34.455C8.79961 35 10.1997 35 13 35Z"
									stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</p>
					</a>
				</li>
				<?Php
			endwhile;
		endif; ?>
		<?php
		if (have_rows('card6')):
			while (have_rows('card6')):
				the_row(); ?>
				<li class="services-content-list">
					<a class="link-el" href="<?php the_sub_field('home_our_service_link6'); ?>">
						<img class="services-content-image" src="<?php the_sub_field('home_our_service_image6'); ?>" alt="">
						<img class="services-content-image-hover" src="<?php the_sub_field('home_our_service_image_hover6'); ?>"
							alt="">
						<p class="services-content-link">
							<span class="service-ttile"><?php the_sub_field('home_our_service_title6'); ?></span>
							<svg class="service-link-svg" xmlns="http://www.w3.org/2000/svg" width="40" height="40"
								viewBox="0 0 40 40" fill="none">
								<path class="card-icon-stroke"
									d="M25.0003 25.0001V15.0001M25.0003 15.0001H15.0003M25.0003 15.0001L15.0003 24.9999M13 35H27C29.8003 35 31.2004 35 32.27 34.455C33.2108 33.9757 33.9757 33.2108 34.455 32.27C35 31.2004 35 29.8003 35 27V13C35 10.1997 35 8.79961 34.455 7.73005C33.9757 6.78924 33.2108 6.02433 32.27 5.54497C31.2004 5 29.8003 5 27 5H13C10.1997 5 8.79961 5 7.73005 5.54497C6.78924 6.02433 6.02433 6.78924 5.54497 7.73005C5 8.79961 5 10.1997 5 13V27C5 29.8003 5 31.2004 5.54497 32.27C6.02433 33.2108 6.78924 33.9757 7.73005 34.455C8.79961 35 10.1997 35 13 35Z"
									stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</p>
					</a>
				</li>
				<?Php
			endwhile;
		endif; ?>
		<?php
		if (have_rows('card7')):
			while (have_rows('card7')):
				the_row(); ?>
				<li class="services-content-list">
					<a class="link-el" href="<?php the_sub_field('home_our_service_link7'); ?>">
						<img class="services-content-image" src="<?php the_sub_field('home_our_service_image7'); ?>" alt="">
						<img class="services-content-image-hover" src="<?php the_sub_field('home_our_service_image_hover7'); ?>"
							alt="">
						<p class="services-content-link">
							<span class="service-ttile"><?php the_sub_field('home_our_service_title7'); ?></span>
							<svg class="service-link-svg" xmlns="http://www.w3.org/2000/svg" width="40" height="40"
								viewBox="0 0 40 40" fill="none">
								<path class="card-icon-stroke"
									d="M25.0003 25.0001V15.0001M25.0003 15.0001H15.0003M25.0003 15.0001L15.0003 24.9999M13 35H27C29.8003 35 31.2004 35 32.27 34.455C33.2108 33.9757 33.9757 33.2108 34.455 32.27C35 31.2004 35 29.8003 35 27V13C35 10.1997 35 8.79961 34.455 7.73005C33.9757 6.78924 33.2108 6.02433 32.27 5.54497C31.2004 5 29.8003 5 27 5H13C10.1997 5 8.79961 5 7.73005 5.54497C6.78924 6.02433 6.02433 6.78924 5.54497 7.73005C5 8.79961 5 10.1997 5 13V27C5 29.8003 5 31.2004 5.54497 32.27C6.02433 33.2108 6.78924 33.9757 7.73005 34.455C8.79961 35 10.1997 35 13 35Z"
									stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</p>
					</a>
				</li>
				<?Php
			endwhile;
		endif; ?>
	</ul>
</section>
<section class="home-our-aircraft-engineers" data-aos="fade-up">
	<div class="home-our-aircraft-engineers-inner">
		<h3 class="title title-before-after-effect color-style title-center"><?= the_field('license_heading'); ?></h3>
		<p class="subtitle our-aircraft-subtitle home-oael"><?= the_field('license_description'); ?></p>
		<div class="our-aircraft-flex-container">
			<ul class="our-aircraft-flex-inner">
				<?php
				if (have_rows('licneses')):
					while (have_rows('licneses')):
						the_row();
						$title = get_sub_field('license_title');
						?>
						<li class="our-aircraft-flex-list">
							<p class="our-aircraft-text"><?= $title ?></p>
						</li>
						<?Php
					endwhile;
				endif; ?>
			</ul>
			<p class="subtitle our-aircraft-description"><?= the_field('bottom_description'); ?></p>
			<?php
			$link = get_field('button_license');
			if ($link): ?>
				<a class="our-aircraft-link oal" href="<?php echo esc_url($link); ?>">
					<svg class="oal-link-web" xmlns="http://www.w3.org/2000/svg" width="237" height="55"
						viewBox="0 0 237 55" fill="none">
						<path d="M16.5 54L1 27V1H219.5L236 27.5V54H16.5Z" stroke="url(#paint0_linear_2038_96752)"
							stroke-width="1.5" />
						<defs>
							<linearGradient id="paint0_linear_2038_96752" x1="1" y1="27.5" x2="236" y2="27.5"
								gradientUnits="userSpaceOnUse">
								<stop stop-color="#0071AA" />
								<stop offset="1" stop-color="#24B6FF" />
							</linearGradient>
						</defs>
					</svg>
					<svg class="oal-link-mob" xmlns="http://www.w3.org/2000/svg" width="261" height="55"
						viewBox="0 0 261 55" fill="none">
						<path d="M18.083 54L1 27V1H241.815L260 27.5V54H18.083Z" stroke="url(#paint0_linear_2038_96754)"
							stroke-width="1.5" />
						<defs>
							<linearGradient id="paint0_linear_2038_96754" x1="1" y1="27.5" x2="260" y2="27.5"
								gradientUnits="userSpaceOnUse">
								<stop stop-color="#0071AA" />
								<stop offset="1" stop-color="#24B6FF" />
							</linearGradient>
						</defs>
					</svg>
					<span class="menu-link index em">
						Explore More
						<svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
							<g clip-path="url(#clip0_4006_464)">
								<path
									d="M19.6213 18.3936L23.5403 14.4746C24.1767 13.8078 24.5317 12.9214 24.5317 11.9996C24.5317 11.0779 24.1767 10.1915 23.5403 9.52464L19.6213 5.60564C19.34 5.32425 18.9585 5.16611 18.5607 5.16602C18.1628 5.16592 17.7812 5.32388 17.4998 5.60514C17.2184 5.88641 17.0603 6.26793 17.0602 6.66579C17.0601 7.06365 17.218 7.44525 17.4993 7.72664L20.2793 10.5076L2.0293 10.5306C1.63147 10.5306 1.24994 10.6887 0.968637 10.97C0.687332 11.2513 0.529297 11.6328 0.529297 12.0306C0.529297 12.4285 0.687332 12.81 0.968637 13.0913C1.24994 13.3726 1.63147 13.5306 2.0293 13.5306L20.2603 13.5076L17.4993 16.2726C17.2261 16.5556 17.0749 16.9345 17.0783 17.3278C17.0817 17.721 17.2395 18.0973 17.5176 18.3754C17.7957 18.6535 18.1719 18.8112 18.5652 18.8147C18.9585 18.8181 19.3374 18.6669 19.6203 18.3936H19.6213Z"
									fill="white" />
							</g>
							<defs>
								<clipPath id="clip0_4006_464">
									<rect width="24" height="24" fill="white" transform="translate(0.5)" />
								</clipPath>
							</defs>
						</svg>
					</span>
				</a>
			<?php endif; ?>
		</div>
	</div>
</section>
<section class="swiper-slide-inner swiper-slide-inner-home" data-aos="fade-up">
	<h3 class="title title-before-after-effect slide-title-sytle"><?= the_field('slider_title'); ?></h3>
	<div class="swiper-container">
		<div class="swiper">
			<div class="swiper-wrapper loop-wrapper">
				<?php
				if (have_rows('airplanes')):
					while (have_rows('airplanes')):
						the_row();
						$title = get_sub_field('airplane_title');
						$image = get_sub_field('airplane_image');
						?>

						<div class="swiper-slide loop-slide">
							<img class="slide-image" src="<?= $image ?>" alt="">
							<p class="slide-image-text"><?= $title ?></p>
						</div>
						<?Php
					endwhile;
				endif; ?>
			</div>
		</div>
		<div class="swiper-pagination"></div>
		<div class="next-prev-buuton">
			<button class="swiper-button-prev">
				<svg class="prev-web" xmlns="http://www.w3.org/2000/svg" width="181" height="55" viewBox="0 0 181 55"
					fill="none">
					<path class="arrow-path" d="M17 1L1 28V54H164L180 27.5V1H17Z" stroke="#0071AA" stroke-width="1.5" />
					<defs>
						<linearGradient id="paint0_linear_2038_96210" x1="1" y1="27.5" x2="180" y2="27.5"
							gradientUnits="userSpaceOnUse">
							<stop stop-color="#0071AA" />
							<stop offset="1" stop-color="#24B6FF" />
						</linearGradient>
					</defs>
				</svg>
				<svg class="prev-mob" xmlns="http://www.w3.org/2000/svg" width="124" height="56" viewBox="0 0 124 56"
					fill="none">
					<path class="arrow-path" d="M31.5 1L1 37.5V55H92.5L123 18.5V0.999996L31.5 1Z" stroke="#0071AA"
						stroke-width="1.5" />
					<defs>
						<linearGradient id="paint0_linear_2038_96776" x1="1" y1="28" x2="103" y2="28"
							gradientUnits="userSpaceOnUse">
							<stop stop-color="#0071AA" />
							<stop offset="1" stop-color="#24B6FF" />
						</linearGradient>
					</defs>
				</svg>
				<svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
					fill="none">
					<g clip-path="url(#clip0_4019_3733)">
						<path
							d="M4.8787 18.3936L0.959702 14.4746C0.323326 13.8078 -0.0317307 12.9214 -0.0317307 11.9996C-0.0317307 11.0779 0.323326 10.1915 0.959702 9.52464L4.8787 5.60564C5.15996 5.32425 5.54149 5.16611 5.93935 5.16602C6.33721 5.16592 6.71881 5.32388 7.0002 5.60514C7.2816 5.88641 7.43974 6.26793 7.43983 6.66579C7.43992 7.06365 7.28196 7.44525 7.0007 7.72664L4.2207 10.5076L22.4707 10.5306C22.8685 10.5306 23.2501 10.6887 23.5314 10.97C23.8127 11.2513 23.9707 11.6328 23.9707 12.0306C23.9707 12.4285 23.8127 12.81 23.5314 13.0913C23.2501 13.3726 22.8685 13.5306 22.4707 13.5306L4.2397 13.5076L7.0007 16.2726C7.27394 16.5556 7.42513 16.9345 7.42171 17.3278C7.41829 17.721 7.26054 18.0973 6.98243 18.3754C6.70432 18.6535 6.3281 18.8112 5.9348 18.8147C5.54151 18.8181 5.16261 18.6669 4.8797 18.3936H4.8787Z"
							fill="white" />
					</g>
					<defs>
						<clipPath id="clip0_4019_3733">
							<rect width="24" height="24" fill="white" transform="matrix(-1 0 0 1 24 0)" />
						</clipPath>
					</defs>
				</svg>
			</button>
			<button class="swiper-button-next">
				<svg class="next-web" xmlns="http://www.w3.org/2000/svg" width="181" height="55" viewBox="0 0 181 55"
					fill="none">
					<path class="arrow-path" d="M17 54L1 27V1H164L180 27.5V54H17Z" stroke="#0071AA"
						stroke-width="1.5" />
					<defs>
						<linearGradient id="paint0_linear_2038_96206" x1="1" y1="27.5" x2="180" y2="27.5"
							gradientUnits="userSpaceOnUse">
							<stop stop-color="#0071AA" />
							<stop offset="1" stop-color="#24B6FF" />
						</linearGradient>
					</defs>
				</svg>
				<svg class="next-mob" xmlns="http://www.w3.org/2000/svg" width="124" height="56" viewBox="0 0 124 56"
					fill="none">
					<path class="arrow-path" d="M92.5 1L123 37.5V55H31.5L1 18.5V0.999996L92.5 1Z" stroke="#0071AA"
						stroke-width="1.5" />
					<defs>
						<linearGradient id="paint0_linear_2038_96793" x1="123" y1="28" x2="21" y2="28"
							gradientUnits="userSpaceOnUse">
							<stop stop-color="#0071AA" />
							<stop offset="1" stop-color="#24B6FF" />
						</linearGradient>
					</defs>
				</svg>
				<svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
					fill="none">
					<g clip-path="url(#clip0_4019_3743)">
						<path
							d="M19.1213 18.3936L23.0403 14.4746C23.6767 13.8078 24.0317 12.9214 24.0317 11.9996C24.0317 11.0779 23.6767 10.1915 23.0403 9.52464L19.1213 5.60564C18.84 5.32425 18.4585 5.16611 18.0607 5.16602C17.6628 5.16592 17.2812 5.32388 16.9998 5.60514C16.7184 5.88641 16.5603 6.26793 16.5602 6.66579C16.5601 7.06365 16.718 7.44525 16.9993 7.72664L19.7793 10.5076L1.5293 10.5306C1.13147 10.5306 0.749941 10.6887 0.468637 10.97C0.187332 11.2513 0.0292969 11.6328 0.0292969 12.0306C0.0292969 12.4285 0.187332 12.81 0.468637 13.0913C0.749941 13.3726 1.13147 13.5306 1.5293 13.5306L19.7603 13.5076L16.9993 16.2726C16.7261 16.5556 16.5749 16.9345 16.5783 17.3278C16.5817 17.721 16.7395 18.0973 17.0176 18.3754C17.2957 18.6535 17.6719 18.8112 18.0652 18.8147C18.4585 18.8181 18.8374 18.6669 19.1203 18.3936H19.1213Z"
							fill="white" />
					</g>
					<defs>
						<clipPath id="clip0_4019_3743">
							<rect width="24" height="24" fill="white" />
						</clipPath>
					</defs>
				</svg>
			</button>
		</div>
	</div>
</section>
<section class="download-pdf borescope-pdf" data-aos="fade-up">
	<p class="title title-before-after-effect none-effect text-left"><?= the_field('text_heading_cert'); ?></p>
	<ul class="download-pdf-container">
		<?php
		if (have_rows('certs')):
			the_row();
			$file = get_sub_field('certificate_file');
			$url = $file['url'];
			$title = $file['title'];
			$caption = $file['description'];
			$file_id = $file['ID'];
			$filesize = filesize(get_attached_file($file_id));
			$filesize = size_format($filesize, 2);
			?>

			<li class="download-pdf-list">
				<div class="download-pdf-link">
					<div class="pdf-img-text-inner">
						<img class="pdf-img" src="https://x-technics.com/ysteeshy/2024/05/Certificate.png" alt="">
						<div class="pdf-texts-intro">
							<p class="pdf-title"><?= $title ?></p>
							<p class="pdf-subtitle"><?= $caption ?></p>
							<p class="pdf-subtitle">PDF | <?= $filesize ?></p>
						</div>
					</div>
					<a class="download-icon-inner" href="<?= $url ?>" target="_blank">
						<span>
							Open
						</span>
						<svg class="service-link-svg" xmlns="http://www.w3.org/2000/svg" width="40" height="40"
							viewBox="0 0 40 40" fill="none">
							<path class="card-icon-stroke"
								d="M25.0003 25.0001V15.0001M25.0003 15.0001H15.0003M25.0003 15.0001L15.0003 24.9999M13 35H27C29.8003 35 31.2004 35 32.27 34.455C33.2108 33.9757 33.9757 33.2108 34.455 32.27C35 31.2004 35 29.8003 35 27V13C35 10.1997 35 8.79961 34.455 7.73005C33.9757 6.78924 33.2108 6.02433 32.27 5.54497C31.2004 5 29.8003 5 27 5H13C10.1997 5 8.79961 5 7.73005 5.54497C6.78924 6.02433 6.02433 6.78924 5.54497 7.73005C5 8.79961 5 10.1997 5 13V27C5 29.8003 5 31.2004 5.54497 32.27C6.02433 33.2108 6.78924 33.9757 7.73005 34.455C8.79961 35 10.1997 35 13 35Z"
								stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
						</svg>
					</a>
				</div>
			</li>
			<?Php
		endif; ?>


	</ul>
</section>
<section class="value-trust" data-aos="fade-up">
	<div class="value-trust-text-cont">
		<p class="title title-before-after-effect none-effect"><?= the_field('text_heading'); ?></p>
		<p class="subtitle value-trust-subtitle-top home-wvtap"><?= the_field('text_content'); ?></p>
	</div>
	<img class="value-trust-image" src="<?= the_field('text_image'); ?>" alt="">
</section>
<?php echo get_template_part('templates/contact'); ?>

<?php get_footer(); ?>