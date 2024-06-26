<?php get_header();
/* Template Name: About us Template */ ?>
<img class="about-linear-1" src="https://x-technics.com/ysteeshy/2024/05/linear.webp" alt="">
<section class="about-cover" data-aos="fade-up">
    <div class="about-title-subtitle-inner">
        <h1 class="cover-title about-cover-title"><?= the_field('title'); ?></h1>
        <h2 class="subtitle about-cover-subtitle"><?= the_field('description'); ?></h2>
    </div>
    <div class="about-hero-img hero-photo">
        <img class="hero-photo-style" src="<?= the_field('image'); ?>" alt="">
    </div>
</section>
<section class="about-aour-mission" data-aos="fade-up">
    <h3 class="title title-before-after-effect"><?= the_field('our_mission_title'); ?></h3>
    <p class="subtitle subtitle-center"><?= the_field('our_mission_description'); ?></p>
</section>
<section class="image-text-inner" data-aos="fade-up">
    <img class="about-left-img" src="<?= the_field('wwd_image'); ?>" alt="">
    <div class="right-text-inner">
        <p class="title title-before-after-effect none-effect text-left"><?= the_field('wwd_title'); ?></p>
        <p class="subtitle subtitle-inner-top"><?= the_field('wwd_description'); ?></p>
    </div>
</section>
<section class="service-provider-container" data-aos="fade-up">
    <div class="provider-text-inner">
        <p class="title title-before-after-effect none-effect text-left"><?= the_field('s_heading'); ?></p>
        <p class="subtitle subtitle-inner-top"><?= the_field('s_desc'); ?></p>
    </div>

    <?php
    $featured_posts = get_field('services');
    if ($featured_posts): ?>
        <ul class="about-cards-container about-main">
            <?php foreach ($featured_posts as $featured_post):
                $permalink = get_permalink($featured_post->ID);
                $title = get_the_title($featured_post->ID);
                $card_subtitle = get_field('card_subtitle', $featured_post->ID);
                $featured_image_url = get_the_post_thumbnail_url($featured_post->ID, 'full');
                ?>
                <li class="about-card-list">
                    <img class="about-card-img" src="<?php echo $featured_image_url; ?>" alt="">
                    <p class="about-card-text"> <?php echo esc_html($title); ?></p>
                    <p class="subtitle about-card-text-hidden"><?php echo $card_subtitle; ?></p>
                    <a class="about-card-link" href="<?php echo esc_url($permalink); ?>">
                        <svg class="hov-svg" xmlns="http://www.w3.org/2000/svg" width="154" height="55" viewBox="0 0 154 55"
                            fill="none">
                            <path d="M14.5866 54L1 27V1H139.413L153 27.5V54H14.5866Z" stroke="#0071AA" stroke-width="1.5" />
                            <defs>
                                <linearGradient id="paint0_linear_2053_96794" x1="1" y1="27.5" x2="153" y2="27.5"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#0071AA" />
                                    <stop offset="1" stop-color="#24B6FF" />
                                </linearGradient>
                            </defs>
                        </svg>
                        <svg class="hov-svg-arrow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <g clip-path="url(#clip0_4019_3743)">
                                <path
                                    d="M19.1213 18.3936L23.0403 14.4746C23.6767 13.8078 24.0317 12.9214 24.0317 11.9996C24.0317 11.0779 23.6767 10.1915 23.0403 9.52464L19.1213 5.60564C18.84 5.32425 18.4585 5.16611 18.0607 5.16602C17.6628 5.16592 17.2812 5.32388 16.9998 5.60514C16.7184 5.88641 16.5603 6.26793 16.5602 6.66579C16.5601 7.06365 16.718 7.44525 16.9993 7.72664L19.7793 10.5076L1.5293 10.5306C1.13147 10.5306 0.749941 10.6887 0.468637 10.97C0.187332 11.2513 0.0292969 11.6328 0.0292969 12.0306C0.0292969 12.4285 0.187332 12.81 0.468637 13.0913C0.749941 13.3726 1.13147 13.5306 1.5293 13.5306L19.7603 13.5076L16.9993 16.2726C16.7261 16.5556 16.5749 16.9345 16.5783 17.3278C16.5817 17.721 16.7395 18.0973 17.0176 18.3754C17.2957 18.6535 17.6719 18.8112 18.0652 18.8147C18.4585 18.8181 18.8374 18.6669 19.1203 18.3936H19.1213Z"
                                    fill="white"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_4019_3743">
                                    <rect width="24" height="24" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </li>
            <?php endforeach;
            wp_reset_postdata(); ?>
            <?php if (get_field('service_link')): ?>
                <li class="about-card-list about-card-list-last">
                    <img class="about-card-img" src="https://x-technics.com/ysteeshy/2024/05/Subtract-style-1.webp" alt="">
                    <div class="text-link">
                        <p class="card-text-link">Explore more
                            by clicking on the button</p>
                        <a class="swiper-button-next" href="<?= the_field('service_link'); ?>">
                            <svg class="ab-svg" xmlns="http://www.w3.org/2000/svg" width="181" height="55" viewBox="0 0 181 55" fill="none">
                                <path d="M17 54L1 27V1H164L180 27.5V54H17Z" stroke="#0071AA"
                                    stroke-width="1.5" />
                                <defs>
                                    <linearGradient id="paint0_linear_2038_96206" x1="1" y1="27.5" x2="180" y2="27.5"
                                        gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#0071AA" />
                                        <stop offset="1" stop-color="#24B6FF" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <svg class="ab-arrow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <g clip-path="url(#clip0_4019_3743)">
                                    <path
                                        d="M19.1213 18.3936L23.0403 14.4746C23.6767 13.8078 24.0317 12.9214 24.0317 11.9996C24.0317 11.0779 23.6767 10.1915 23.0403 9.52464L19.1213 5.60564C18.84 5.32425 18.4585 5.16611 18.0607 5.16602C17.6628 5.16592 17.2812 5.32388 16.9998 5.60514C16.7184 5.88641 16.5603 6.26793 16.5602 6.66579C16.5601 7.06365 16.718 7.44525 16.9993 7.72664L19.7793 10.5076L1.5293 10.5306C1.13147 10.5306 0.749941 10.6887 0.468637 10.97C0.187332 11.2513 0.0292969 11.6328 0.0292969 12.0306C0.0292969 12.4285 0.187332 12.81 0.468637 13.0913C0.749941 13.3726 1.13147 13.5306 1.5293 13.5306L19.7603 13.5076L16.9993 16.2726C16.7261 16.5556 16.5749 16.9345 16.5783 17.3278C16.5817 17.721 16.7395 18.0973 17.0176 18.3754C17.2957 18.6535 17.6719 18.8112 18.0652 18.8147C18.4585 18.8181 18.8374 18.6669 19.1203 18.3936H19.1213Z"
                                        fill="white"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_4019_3743">
                                        <rect width="24" height="24" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </div>
                </li>
            <?php endif; ?>
        </ul>
    <?php endif; ?>


    <div class="mobile-verion">
        <a class="explore-more" href="<?= the_field('service_link'); ?>">
            Explore More
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                <g clip-path="url(#clip0_4006_464)">
                    <path
                        d="M19.6213 18.3936L23.5403 14.4746C24.1767 13.8078 24.5317 12.9214 24.5317 11.9996C24.5317 11.0779 24.1767 10.1915 23.5403 9.52464L19.6213 5.60564C19.34 5.32425 18.9585 5.16611 18.5607 5.16602C18.1628 5.16592 17.7812 5.32388 17.4998 5.60514C17.2184 5.88641 17.0603 6.26793 17.0602 6.66579C17.0601 7.06365 17.218 7.44525 17.4993 7.72664L20.2793 10.5076L2.0293 10.5306C1.63147 10.5306 1.24994 10.6887 0.968637 10.97C0.687332 11.2513 0.529297 11.6328 0.529297 12.0306C0.529297 12.4285 0.687332 12.81 0.968637 13.0913C1.24994 13.3726 1.63147 13.5306 2.0293 13.5306L20.2603 13.5076L17.4993 16.2726C17.2261 16.5556 17.0749 16.9345 17.0783 17.3278C17.0817 17.721 17.2395 18.0973 17.5176 18.3754C17.7957 18.6535 18.1719 18.8112 18.5652 18.8147C18.9585 18.8181 19.3374 18.6669 19.6203 18.3936H19.6213Z"
                        fill="white"></path>
                </g>
                <defs>
                    <clipPath id="clip0_4006_464">
                        <rect width="24" height="24" fill="white" transform="translate(0.5)"></rect>
                    </clipPath>
                </defs>
            </svg>
        </a>
    </div>
</section>
<?php echo get_template_part('templates/contact'); ?>

<?php get_footer(); ?>