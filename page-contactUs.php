<?php get_header(); 
/* Template Name: Contact us Template */ ?>

<section class="contact-us" id="contact-us-mobile">
	<h3 class="contact-title"><?= the_field('contact_section_title', 'option'); ?></h3>
	<div class="contact-us-container">
		<div class="contact-us-socal-mekia-links">
			<p class="contact-us-heading"><?= the_field('contact_section_subtitle', 'option'); ?></p>
			<ul class="socal-media-inner">
				<?php if (get_field('phone_number', 'option')): ?>
					<li class="socal-media-iist">
						<a class="socal-media-iink" href="tel:<?= the_field('phone_number', 'option'); ?>">
							<img class="socal-media-image"
								src="<?php echo get_template_directory_uri(); ?>/images/phone.svg" alt="">
							<span><span class="text-underline"><?= the_field('phone_number', 'option'); ?></span></span>
						</a>
					</li>
				<?php endif; ?>
				<?php if (get_field('email', 'option')): ?>
					<li class="socal-media-iist">
						<a class="socal-media-iink" href="mailto:<?= the_field('email', 'option'); ?>">
							<img class="socal-media-image"
								src="<?php echo get_template_directory_uri(); ?>/images/message.svg" alt="">
							<span class="text-underline"><?= the_field('email', 'option'); ?></span>
						</a>
					</li>
				<?php endif; ?>
				<?php if (get_field('location', 'option')): ?>
					<li class="socal-media-iist">
						<a class="socal-media-iink" href="">
							<img class="socal-media-image"
								src="<?php echo get_template_directory_uri(); ?>/images/location.svg" alt="">
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
						<label class="label" for="">NDT(non-destructive-testing)</label>
					</div>
				</ul>

				<input class="input" type="text" name="fullName" id="" placeholder="Full Name" required>
				<div class="email-phone-inner">
					<input class="input" type="email" name="" id="" placeholder="Email Address" required>
					<div class="phone-input">
						<input class="input" type="number" id="mobile_code" class="form-control" placeholder="Phone Number" name="" required>
						<!-- <span class="phone-text">Phone Number</span> -->
					</div>
				</div>
				<textarea class="textarea" placeholder="Message" rows="5.5"
					oninput="this.parentNode.dataset.replicatedValue = this.value"
					onblur="this.parentNode.dataset.replicatedValue = null"
					onclick="this.parentNode.dataset.replicatedValue = this.value"></textarea>
				<button class="our-aircraft-link send-btn send-btn-form-cust">
					<span class="menu-link index">SEND A QUOTE</span>
				</button>
			</form>
		</div>

	</div>
</section>

<?php get_footer(); ?>