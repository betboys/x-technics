<footer itemscope itemtype="http://schema.org/WPFooter" class="footer">
	<div class="footer-container">
		<div class="logo-links-inner">
			<a class="footer-logo" href="<?php echo get_bloginfo('url'); ?>">
				<img class="footer-logo-img" src="<?= the_field('footer_logo', 'option'); ?>" alt="Footer Logo">
			</a>

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer-menu',
					'container' => 'ul',
					'menu_class' => 'terms-privacy-cookies',
					'walker' => new Custom_FMenu_Walker()
				)
			);
			?>
			<p class="website-text">© <?php echo date('Y'); ?> <?php echo bloginfo('name'); ?>. All rights reserved.</p>
		</div>
		<div class="subscribe-container">
			<div class="subscribe-text"><?= the_field('subscibe_form_title', 'option'); ?></div>
			<?php echo do_shortcode('[contact-form-7 id="5d26094" title="SUBSCRIBE"]'); ?>

		</div>
	</div>
</footer>
</main>

<div class="popup-form" id="popup-form">
	<div class="popup-cont">
		<div class="popup-intro">
			<svg xmlns="http://www.w3.org/2000/svg" width="63" height="62" viewBox="0 0 63 62" fill="none">
				<path
					d="M26.8365 44.8422L48.7756 22.9032L45.4647 19.5924L26.8365 38.2206L17.4711 28.8552L14.1603 32.166L26.8365 44.8422ZM31.5076 61.9929C27.2214 61.9929 23.1918 61.1783 19.4188 59.5491C15.6458 57.92 12.3638 55.709 9.5728 52.9162C6.7818 50.1234 4.573 46.8441 2.94639 43.0783C1.31977 39.3124 0.50647 35.2887 0.50647 31.007C0.50647 26.7208 1.32105 22.6912 2.95022 18.9182C4.57933 15.1452 6.7903 11.8632 9.58314 9.0722C12.3759 6.28119 15.6552 4.07239 19.4211 2.44578C23.1869 0.819164 27.2106 0.00585938 31.4923 0.00585938C35.7785 0.00585938 39.8081 0.820444 43.5811 2.44961C47.3541 4.07872 50.6361 6.28969 53.4271 9.08253C56.2181 11.8753 58.4269 15.1546 60.0536 18.9204C61.6802 22.6863 62.4935 26.71 62.4935 30.9917C62.4935 35.2779 61.6789 39.3075 60.0497 43.0805C58.4206 46.8535 56.2096 50.1355 53.4168 52.9265C50.624 55.7175 47.3447 57.9263 43.5789 59.5529C39.8131 61.1796 35.7893 61.9929 31.5076 61.9929Z"
					fill="#01BA28" />
			</svg>
			<p class="popup-result">Success!</p>
			<p class="popup-result-text">Your quote has been sent to our customer service team. We'll handle it from
				here and get back to you soon.</p>
			<button class="popup-btn">
				<svg class="popup-svg" xmlns="http://www.w3.org/2000/svg" width="237" height="55" viewBox="0 0 237 55" fill="none">
					<path d="M16.5 54L1 27V1H219.5L236 27.5V54H16.5Z" stroke="#0071AA"
						stroke-width="1.5" />
					<defs>
						<linearGradient id="paint0_linear_2038_96752" x1="1" y1="27.5" x2="236" y2="27.5"
							gradientUnits="userSpaceOnUse">
							<stop stop-color="#0071AA" />
							<stop offset="1" stop-color="#24B6FF" />
						</linearGradient>
					</defs>
				</svg>
				<span class="popup-btn-text">
					<svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
						<g clip-path="url(#clip0_5360_22452)">
							<path
								d="M5.44363 5.60661L1.52463 9.52562C0.88826 10.1925 0.533203 11.0788 0.533203 12.0006C0.533203 12.9224 0.88826 13.8088 1.52463 14.4756L5.44363 18.3946C5.58201 18.5379 5.74752 18.6522 5.93053 18.7308C6.11353 18.8094 6.31036 18.8508 6.50953 18.8525C6.7087 18.8542 6.90622 18.8163 7.09057 18.7409C7.27491 18.6654 7.44239 18.5541 7.58323 18.4132C7.72407 18.2724 7.83545 18.1049 7.91087 17.9206C7.98629 17.7362 8.02424 17.5387 8.02251 17.3395C8.02078 17.1404 7.9794 16.9435 7.90079 16.7605C7.82217 16.5775 7.7079 16.412 7.56464 16.2736L4.78563 13.4926L23.0356 13.4696C23.4335 13.4696 23.815 13.3116 24.0963 13.0303C24.3776 12.749 24.5356 12.3674 24.5356 11.9696C24.5356 11.5718 24.3776 11.1903 24.0963 10.909C23.815 10.6277 23.4335 10.4696 23.0356 10.4696L4.80063 10.4926L7.56464 7.72762C7.83787 7.44471 7.98906 7.06581 7.98565 6.67251C7.98223 6.27922 7.82447 5.903 7.54636 5.62489C7.26825 5.34677 6.89203 5.18902 6.49874 5.1856C6.10544 5.18219 5.72654 5.33338 5.44363 5.60661Z"
								fill="white" />
						</g>
						<defs>
							<clipPath id="clip0_5360_22452">
								<rect width="24" height="24" fill="white" transform="translate(0.5)" />
							</clipPath>
						</defs>
					</svg>
					Go Back
				</span>
			</button>
		</div>
	</div>
</div>

<div class="popup-form popup-form-error" id="popup-form-error">
	<div class="popup-cont">
		<div class="popup-intro">
			<svg xmlns="http://www.w3.org/2000/svg" width="63" height="62" viewBox="0 0 63 62" fill="none">
				<path
					d="M19.6346 46.1083L31.5 34.2429L43.3654 46.1083L46.6089 42.8648L34.7435 30.9994L46.6089 19.1339L43.3654 15.8904L31.5 27.7559L19.6346 15.8904L16.3911 19.1339L28.2565 30.9994L16.3911 42.8648L19.6346 46.1083ZM31.5076 61.9929C27.2214 61.9929 23.1918 61.1783 19.4188 59.5491C15.6458 57.92 12.3638 55.709 9.5728 52.9162C6.7818 50.1234 4.573 46.8441 2.94639 43.0783C1.31977 39.3124 0.50647 35.2887 0.50647 31.007C0.50647 26.7208 1.32105 22.6912 2.95022 18.9182C4.57933 15.1452 6.7903 11.8632 9.58314 9.0722C12.3759 6.28119 15.6552 4.07239 19.4211 2.44578C23.1869 0.819164 27.2106 0.00585938 31.4923 0.00585938C35.7785 0.00585938 39.8081 0.820444 43.5811 2.44961C47.3541 4.07872 50.6361 6.28969 53.4271 9.08253C56.2181 11.8753 58.4269 15.1546 60.0536 18.9204C61.6802 22.6863 62.4935 26.71 62.4935 30.9917C62.4935 35.2779 61.6789 39.3075 60.0497 43.0805C58.4206 46.8535 56.2096 50.1355 53.4168 52.9265C50.624 55.7175 47.3447 57.9263 43.5789 59.5529C39.8131 61.1796 35.7893 61.9929 31.5076 61.9929Z"
					fill="#F30E10" />
			</svg>
			<p class="popup-result">Error!</p>
			<p class="popup-result-text">Oops! It seems there was an issue submitting your quote request to our customer
				service team. Please try again later, or if the problem persists, feel free to contact us directly for
				assistance.</p>
			<button class="popup-btn popup-btn-error">
			<svg class="popup-svg" xmlns="http://www.w3.org/2000/svg" width="237" height="55" viewBox="0 0 237 55" fill="none">
					<path d="M16.5 54L1 27V1H219.5L236 27.5V54H16.5Z" stroke="#0071AA"
						stroke-width="1.5" />
					<defs>
						<linearGradient id="paint0_linear_2038_96752" x1="1" y1="27.5" x2="236" y2="27.5"
							gradientUnits="userSpaceOnUse">
							<stop stop-color="#0071AA" />
							<stop offset="1" stop-color="#24B6FF" />
						</linearGradient>
					</defs>
				</svg>
				<span class="popup-btn-text">
					<svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
						<g clip-path="url(#clip0_5360_22452)">
							<path
								d="M5.44363 5.60661L1.52463 9.52562C0.88826 10.1925 0.533203 11.0788 0.533203 12.0006C0.533203 12.9224 0.88826 13.8088 1.52463 14.4756L5.44363 18.3946C5.58201 18.5379 5.74752 18.6522 5.93053 18.7308C6.11353 18.8094 6.31036 18.8508 6.50953 18.8525C6.7087 18.8542 6.90622 18.8163 7.09057 18.7409C7.27491 18.6654 7.44239 18.5541 7.58323 18.4132C7.72407 18.2724 7.83545 18.1049 7.91087 17.9206C7.98629 17.7362 8.02424 17.5387 8.02251 17.3395C8.02078 17.1404 7.9794 16.9435 7.90079 16.7605C7.82217 16.5775 7.7079 16.412 7.56464 16.2736L4.78563 13.4926L23.0356 13.4696C23.4335 13.4696 23.815 13.3116 24.0963 13.0303C24.3776 12.749 24.5356 12.3674 24.5356 11.9696C24.5356 11.5718 24.3776 11.1903 24.0963 10.909C23.815 10.6277 23.4335 10.4696 23.0356 10.4696L4.80063 10.4926L7.56464 7.72762C7.83787 7.44471 7.98906 7.06581 7.98565 6.67251C7.98223 6.27922 7.82447 5.903 7.54636 5.62489C7.26825 5.34677 6.89203 5.18902 6.49874 5.1856C6.10544 5.18219 5.72654 5.33338 5.44363 5.60661Z"
								fill="white" />
						</g>
						<defs>
							<clipPath id="clip0_5360_22452">
								<rect width="24" height="24" fill="white" transform="translate(0.5)" />
							</clipPath>
						</defs>
					</svg>
					Try Again
				</span>
			</button>
		</div>
	</div>
</div>

<div class="popup-form" id="popup-sbc">
	<div class="popup-cont">
		<div class="popup-intro">
			<svg xmlns="http://www.w3.org/2000/svg" width="63" height="62" viewBox="0 0 63 62" fill="none">
				<path
					d="M26.8365 44.8422L48.7756 22.9032L45.4647 19.5924L26.8365 38.2206L17.4711 28.8552L14.1603 32.166L26.8365 44.8422ZM31.5076 61.9929C27.2214 61.9929 23.1918 61.1783 19.4188 59.5491C15.6458 57.92 12.3638 55.709 9.5728 52.9162C6.7818 50.1234 4.573 46.8441 2.94639 43.0783C1.31977 39.3124 0.50647 35.2887 0.50647 31.007C0.50647 26.7208 1.32105 22.6912 2.95022 18.9182C4.57933 15.1452 6.7903 11.8632 9.58314 9.0722C12.3759 6.28119 15.6552 4.07239 19.4211 2.44578C23.1869 0.819164 27.2106 0.00585938 31.4923 0.00585938C35.7785 0.00585938 39.8081 0.820444 43.5811 2.44961C47.3541 4.07872 50.6361 6.28969 53.4271 9.08253C56.2181 11.8753 58.4269 15.1546 60.0536 18.9204C61.6802 22.6863 62.4935 26.71 62.4935 30.9917C62.4935 35.2779 61.6789 39.3075 60.0497 43.0805C58.4206 46.8535 56.2096 50.1355 53.4168 52.9265C50.624 55.7175 47.3447 57.9263 43.5789 59.5529C39.8131 61.1796 35.7893 61.9929 31.5076 61.9929Z"
					fill="#01BA28" />
			</svg>
			<p class="popup-result">Success!</p>
			<p class="popup-result-text">You’ve successfully subscribed to our newsletter.</p>
			<button class="popup-btn" id="popup-sbc-btn">
			<svg class="popup-svg" xmlns="http://www.w3.org/2000/svg" width="237" height="55" viewBox="0 0 237 55" fill="none">
					<path d="M16.5 54L1 27V1H219.5L236 27.5V54H16.5Z" stroke="#0071AA"
						stroke-width="1.5" />
					<defs>
						<linearGradient id="paint0_linear_2038_96752" x1="1" y1="27.5" x2="236" y2="27.5"
							gradientUnits="userSpaceOnUse">
							<stop stop-color="#0071AA" />
							<stop offset="1" stop-color="#24B6FF" />
						</linearGradient>
					</defs>
				</svg>
				<span class="popup-btn-text">
					<svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
						<g clip-path="url(#clip0_5360_22452)">
							<path
								d="M5.44363 5.60661L1.52463 9.52562C0.88826 10.1925 0.533203 11.0788 0.533203 12.0006C0.533203 12.9224 0.88826 13.8088 1.52463 14.4756L5.44363 18.3946C5.58201 18.5379 5.74752 18.6522 5.93053 18.7308C6.11353 18.8094 6.31036 18.8508 6.50953 18.8525C6.7087 18.8542 6.90622 18.8163 7.09057 18.7409C7.27491 18.6654 7.44239 18.5541 7.58323 18.4132C7.72407 18.2724 7.83545 18.1049 7.91087 17.9206C7.98629 17.7362 8.02424 17.5387 8.02251 17.3395C8.02078 17.1404 7.9794 16.9435 7.90079 16.7605C7.82217 16.5775 7.7079 16.412 7.56464 16.2736L4.78563 13.4926L23.0356 13.4696C23.4335 13.4696 23.815 13.3116 24.0963 13.0303C24.3776 12.749 24.5356 12.3674 24.5356 11.9696C24.5356 11.5718 24.3776 11.1903 24.0963 10.909C23.815 10.6277 23.4335 10.4696 23.0356 10.4696L4.80063 10.4926L7.56464 7.72762C7.83787 7.44471 7.98906 7.06581 7.98565 6.67251C7.98223 6.27922 7.82447 5.903 7.54636 5.62489C7.26825 5.34677 6.89203 5.18902 6.49874 5.1856C6.10544 5.18219 5.72654 5.33338 5.44363 5.60661Z"
								fill="white" />
						</g>
						<defs>
							<clipPath id="clip0_5360_22452">
								<rect width="24" height="24" fill="white" transform="translate(0.5)" />
							</clipPath>
						</defs>
					</svg>
					Go Back
				</span>
			</button>
		</div>
	</div>
</div>

<?php wp_footer();
$page_template = get_page_template_slug(get_the_ID());

?>
</body>

</html>