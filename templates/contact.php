<div id="contact-us"></div>
<section class="contact-us" data-aos="fade-up">
	<h3 class="title title-before-after-effect contact-title"><?= the_field('contact_section_title', 'option'); ?></h3>
	<div class="contact-us-container">
		<div class="contact-us-socal-mekia-links">
			<p class="contact-us-heading"><?= the_field('contact_title'); ?></p>
			<ul class="socal-media-inner">
				<?php if (get_field('phone_number', 'option')): ?>
					<li class="socal-media-iist">
						<a class="socal-media-iink" href="tel:<?= the_field('phone_number', 'option'); ?>">
							<div class="socal-media-img">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
									fill="none">
									<path
										d="M17.5452 9.624H19.5452C19.5452 4.494 15.6722 0.625 10.5352 0.625V2.625C14.5972 2.625 17.5452 5.568 17.5452 9.624Z"
										fill="url(#paint0_linear_4967_1980)" />
									<path
										d="M10.5452 6.62719C12.6482 6.62719 13.5452 7.52419 13.5452 9.62719H15.5452C15.5452 6.40219 13.7702 4.62719 10.5452 4.62719V6.62719ZM13.9672 12.0702C13.7751 11.8955 13.5225 11.8024 13.263 11.8104C13.0035 11.8184 12.7572 11.927 12.5762 12.1132L10.1832 14.5742C9.6072 14.4642 8.4492 14.1032 7.2572 12.9142C6.0652 11.7212 5.7042 10.5602 5.5972 9.98819L8.0562 7.59419C8.24262 7.41332 8.35134 7.16701 8.35937 6.9074C8.36739 6.64778 8.27409 6.39523 8.0992 6.20319L4.4042 2.14019C4.22925 1.94755 3.98608 1.8307 3.72636 1.81445C3.46663 1.79821 3.2108 1.88385 3.0132 2.05319L0.843204 3.91419C0.670315 4.08771 0.567123 4.31864 0.553204 4.56319C0.538204 4.81319 0.252204 10.7352 4.8442 15.3292C8.8502 19.3342 13.8682 19.6272 15.2502 19.6272C15.4522 19.6272 15.5762 19.6212 15.6092 19.6192C15.8537 19.6055 16.0845 19.5019 16.2572 19.3282L18.1172 17.1572C18.2867 16.9597 18.3725 16.704 18.3564 16.4442C18.3404 16.1845 18.2237 15.9413 18.0312 15.7662L13.9672 12.0702Z"
										fill="url(#paint1_linear_4967_1980)" />
									<defs>
										<linearGradient id="paint0_linear_4967_1980" x1="15.0402" y1="0.625" x2="15.0402"
											y2="9.624" gradientUnits="userSpaceOnUse">
											<stop stop-color="#24B6FF" />
											<stop offset="1" stop-color="#0071AA" />
										</linearGradient>
										<linearGradient id="paint1_linear_4967_1980" x1="9.45163" y1="1.8125" x2="9.45163"
											y2="19.6272" gradientUnits="userSpaceOnUse">
											<stop stop-color="#24B6FF" />
											<stop offset="1" stop-color="#0071AA" />
										</linearGradient>
									</defs>
								</svg>
								<!-- <img class="socal-media-image"
							src="https://x-technics.com/ysteeshy/2024/05/Group-1000001755.svg" alt=""> -->
							</div>
							<span><span class="text-underline"><?= the_field('phone_number', 'option'); ?></span></span>
						</a>
					</li>
				<?php endif; ?>
				<?php if (get_field('email', 'option')): ?>
					<li class="socal-media-iist">
						<a class="socal-media-iink" href="mailto:<?= the_field('email', 'option'); ?>">
							<div class="socal-media-img">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16"
									fill="none">
									<path
										d="M19.5756 0.125H0.181641V15.6806H19.5756V0.125ZM17.6362 4.01389L9.87861 8.875L2.12103 4.01389V2.06944L9.87861 6.93056L17.6362 2.06944V4.01389Z"
										fill="url(#paint0_linear_4967_1988)" />
									<defs>
										<linearGradient id="paint0_linear_4967_1988" x1="9.87861" y1="0.125" x2="9.87861"
											y2="15.6806" gradientUnits="userSpaceOnUse">
											<stop stop-color="#24B6FF" />
											<stop offset="1" stop-color="#0071AA" />
										</linearGradient>
									</defs>
								</svg>
								<!-- <img class="socal-media-image" src="https://x-technics.com/ysteeshy/2024/05/Vector.svg" alt=""> -->
							</div>
							<span class="text-underline"><?= the_field('email', 'option'); ?></span>
						</a>
					</li>
				<?php endif; ?>
				<?php if (get_field('location', 'option')): ?>
					<li class="socal-media-iist">
						<a class="socal-media-iink" href="<?= the_field('location_add', 'option'); ?>">
							<div class="socal-media-img">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<path
										d="M12 1.5C9.87904 1.50258 7.84567 2.3726 6.34592 3.91922C4.84617 5.46584 4.00251 7.56276 4.00001 9.75C3.99747 11.5374 4.56363 13.2763 5.61164 14.7C5.61164 14.7 5.82983 14.9963 5.86546 15.039L12 22.5L18.1375 15.0353C18.1695 14.9955 18.3884 14.7 18.3884 14.7L18.3891 14.6978C19.4366 13.2747 20.0025 11.5366 20 9.75C19.9975 7.56276 19.1538 5.46584 17.6541 3.91922C16.1544 2.3726 14.121 1.50258 12 1.5ZM12 12.75C11.4246 12.75 10.8622 12.5741 10.3838 12.2444C9.90541 11.9148 9.53254 11.4462 9.31236 10.8981C9.09218 10.3499 9.03457 9.74667 9.14681 9.16473C9.25906 8.58279 9.53613 8.04824 9.94297 7.62868C10.3498 7.20912 10.8682 6.9234 11.4325 6.80764C11.9968 6.69189 12.5817 6.7513 13.1133 6.97836C13.6448 7.20542 14.0992 7.58994 14.4188 8.08329C14.7385 8.57664 14.9091 9.15666 14.9091 9.75C14.9081 10.5453 14.6013 11.3078 14.056 11.8702C13.5106 12.4326 12.7713 12.749 12 12.75Z"
										fill="url(#paint0_linear_4967_1992)" />
									<defs>
										<linearGradient id="paint0_linear_4967_1992" x1="12" y1="1.5" x2="12" y2="22.5"
											gradientUnits="userSpaceOnUse">
											<stop stop-color="#24B6FF" />
											<stop offset="1" stop-color="#0071AA" />
										</linearGradient>
									</defs>
								</svg>
								<!-- <img class="socal-media-image" src="https://x-technics.com/ysteeshy/2024/05/Icons36.svg" alt=""> -->
							</div>
							<span class="text-underline"><?= the_field('location', 'option'); ?></span>
						</a>
					</li>
				<?php endif; ?>
			</ul>
			<ul class="website-links-inner">
				<?php if (get_field('facebook', 'option')): ?>
					<li class="socal-media-iist">
						<a class="socal-media-iink" href="<?= the_field('facebook', 'option'); ?>">
							FACEBOOK
							<!-- <img class="socal-media-image"
								src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt=""> -->
							<!-- <span
								class="text-underline text-underline-none"><?= the_field('facebook_page_title', 'option'); ?></span> -->
						</a>
					</li>
				<?php endif; ?>
				<?php if (get_field('linkedin', 'option')): ?>
					<li class="socal-media-iist">
						<a class="socal-media-iink" href="<?= the_field('linkedin', 'option'); ?>">
							LINKEDIN
							<!-- <img class="socal-media-image"
								src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" alt=""> -->
							<!-- <span
								class="text-underline text-underline-none"><?= the_field('linkedin_page_title', 'option'); ?></span> -->
						</a>
					</li>
				<?php endif; ?>
			</ul>
		</div>
		<div class="form-inner">
			<p class="form-title">I’m interested in . . .</p>
			<form class="form" method="POST" action="">
				<div class="container-select">
					<div class="select-dropdown">
						<div class="select-dropdown__button">
							<span class="select-text">Select the Service</span>
							<svg class="select-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
								viewBox="0 0 24 24" fill="none">
								<path
									d="M18.7098 8.20986C18.6169 8.11613 18.5063 8.04174 18.3844 7.99097C18.2625 7.9402 18.1318 7.91406 17.9998 7.91406C17.8678 7.91406 17.7371 7.9402 17.6152 7.99097C17.4934 8.04174 17.3828 8.11613 17.2898 8.20986L12.7098 12.7899C12.6169 12.8836 12.5063 12.958 12.3844 13.0087C12.2625 13.0595 12.1318 13.0856 11.9998 13.0856C11.8678 13.0856 11.7371 13.0595 11.6152 13.0087C11.4934 12.958 11.3828 12.8836 11.2898 12.7899L6.70982 8.20986C6.61685 8.11613 6.50625 8.04174 6.38439 7.99097C6.26253 7.9402 6.13183 7.91406 5.99982 7.91406C5.8678 7.91406 5.7371 7.9402 5.61524 7.99097C5.49338 8.04174 5.38278 8.11613 5.28982 8.20986C5.10356 8.39722 4.99902 8.65067 4.99902 8.91486C4.99902 9.17904 5.10356 9.4325 5.28982 9.61986L9.87982 14.2098C10.4423 14.7716 11.2048 15.0872 11.9998 15.0872C12.7948 15.0872 13.5573 14.7716 14.1198 14.2098L18.7098 9.61986C18.8961 9.4325 19.0006 9.17904 19.0006 8.91486C19.0006 8.65067 18.8961 8.39722 18.7098 8.20986Z"
									fill="#ADB5BD" />
							</svg>
						</div>
						<ul class="select-dropdown__list"></ul>
					</div>
				</div>
				<ul class="form-category-intro">
					<div class="checkbox-inner">
						<input class="checkbox" id="" type="checkbox">
						<label class="label" for="">Line Maintenance</label>
					</div>
					<div class="checkbox-inner">
						<input class="checkbox" id="" type="checkbox" />
						<label class="label" for="">AOG Maintenance Support</label>
					</div>
					<div class="checkbox-inner">
						<input class="checkbox" id="" type="checkbox" />
						<label class="label" for="">Aircraft Battery Service</label>
					</div>
					<div class="checkbox-inner">
						<input class="checkbox" id="" type="checkbox" />
						<label class="label" for="">Aircraft Wheels Service</label>
					</div>
					<div class="checkbox-inner">
						<input class="checkbox" id="" type="checkbox" />
						<label class="label" for="">Aircraft Detailing/Wash</label>
					</div>
					<div class="checkbox-inner">
						<input class="checkbox" id="" type="checkbox" />
						<label class="label" for="">Engine Borescope Inspection</label>
					</div>
					<div class="checkbox-inner">
						<input class="checkbox" id="" type="checkbox" />
						<label class="label" for="">NDT (non-destructive-testing)</label>
					</div>
				</ul>

				<input class="input" type="text" name="fullName" id="" placeholder="Full Name" required>
				<div class="email-phone-inner">
					<input class="input" type="email" name="" id="" placeholder="Email Address" required>
					<div class="phone-input">
						<input class="input" type="number" id="mobile_code" class="form-control"
							placeholder="Phone Number" name="" required>
						<!-- <span class="phone-text">Phone Number</span> -->
					</div>
				</div>
				<textarea class="textarea" placeholder="Message" rows="5.5"
					oninput="this.parentNode.dataset.replicatedValue = this.value"
					onblur="this.parentNode.dataset.replicatedValue = null"
					onclick="this.parentNode.dataset.replicatedValue = this.value"></textarea>
				<button class="our-aircraft-link send-btn send-btn-form-cust">
					<img class="button-standart" src="https://x-technics.com/ysteeshy/2024/05/Button-st.webp" alt="">
					<img class="button-hover" src="https://x-technics.com/ysteeshy/2024/05/Button-ho.webp" alt="">
					<span class="menu-link index">SEND A QUOTE</span>
				</button>
			</form>
		</div>

	</div>
</section>