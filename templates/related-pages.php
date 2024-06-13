<div class="swiper">
    <div class="swiper-wrapper single-slider">
        <?php
        $current_page_id = get_the_ID();
        $parent_page_id = wp_get_post_parent_id($current_page_id);
        $args = array(
            'post_type' => 'page',
            'post_parent' => $parent_page_id,
            'posts_per_page' => -1, // -1 to retrieve all child pages
            'post__not_in' => array($current_page_id), // Exclude the current page
            'orderby' => 'date',
            'order' => 'ASC',
        );

        // Query child pages
        $related_pages = new WP_Query($args);
        // Display the popular posts
        if ($related_pages->have_posts()):
            ?>
            <?php while ($related_pages->have_posts()):
                $related_pages->the_post();
                $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                ?>

                <div class="swiper-slide swiper-slide-margin-rigth">
                    <a class="service-single-link" href="<?php echo get_permalink(); ?>">
                    <div class="slide-single-img-inner">
                        <img class="slide-image slide-image-size single-slide-photo" src="<?= $featured_image_url ?>" alt="">
                    </div>
                        <p class="slide-text-style single-slide-text"><?php the_title(); ?></p>
                    </a>
                </div>
            <?php endwhile;
            wp_reset_postdata();
            ?>
        <?php endif; ?>

    </div>
    <div class="next-prev-buuton">
			<button class="swiper-button-prev">
				<svg class="prev-web" xmlns="http://www.w3.org/2000/svg" width="181" height="55" viewBox="0 0 181 55"
					fill="none">
					<path class="arrow-path" d="M17 1L1 28V54H164L180 27.5V1H17Z" stroke="url(#paint0_linear_2038_96210)"
						stroke-width="1.5" />
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
					<path class="arrow-path" d="M31.5 1L1 37.5V55H92.5L123 18.5V0.999996L31.5 1Z" stroke="url(#paint0_linear_2038_96776)"
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
				<svg class="next-web" xmlns="http://www.w3.org/2000/svg" width="181" height="55" viewBox="0 0 181 55" fill="none">
					<path class="arrow-path" d="M17 54L1 27V1H164L180 27.5V54H17Z" stroke="url(#paint0_linear_2038_96206)"
						stroke-width="1.5" />
					<defs>
						<linearGradient id="paint0_linear_2038_96206" x1="1" y1="27.5" x2="180" y2="27.5"
							gradientUnits="userSpaceOnUse">
							<stop stop-color="#0071AA" />
							<stop offset="1" stop-color="#24B6FF" />
						</linearGradient>
					</defs>
				</svg>
				<svg class="next-mob" xmlns="http://www.w3.org/2000/svg" width="124" height="56" viewBox="0 0 124 56" fill="none">
					<path class="arrow-path" d="M92.5 1L123 37.5V55H31.5L1 18.5V0.999996L92.5 1Z" stroke="url(#paint0_linear_2038_96793)"
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