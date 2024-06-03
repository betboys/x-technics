<?php get_header();
/* Template Name: Aircraft Battery Maintenance */
?>
<img class="battery-linear-1" src="https://x-technics.com/ysteeshy/2024/05/linear.webp" alt="">
<img class="battery-linear-2" src="https://x-technics.com/ysteeshy/2024/05/linear.webp" alt="">
<img class="battery-linear-3" style="display: none;" src="https://x-technics.com/ysteeshy/2024/05/linear.webp" alt="">
<section class="service-cover aircraft-battery" data-aos="fade-up">
    <div class="battery-title-subtitle-inner">
        <h1 class="cover-title about-cover-title"><?= the_field('title'); ?></h1>
        <h2 class="subtitle battery-cover-subtitle"><?= the_field('description'); ?></h2>
    </div>
    <div class="battery-hero-img hero-photo">
        <img class="hero-photo-style" src="<?= the_field('image'); ?>" alt="">
    </div>
</section>
<section class="offer-inner battery-offer" data-aos="fade-up">
    <div class="left-text-rigth-image-cont row-reverse">
        <div class="left-text-cont">
            <p class="title title-before-after-effect none-effect text-left"><?= the_field('wwd_heading'); ?>
            </p>
            <p class="element-subtitle element-subtitle-top"><?= the_field('wwd_desc'); ?></p>
        </div>
        <img class="air-image-rigth" src="<?= the_field('wwd_img'); ?>" alt="">
    </div>
</section>
<section class="card-inner battery-card" data-aos="fade-up">
    <p class="title title-before-after-effect slide-title-sytle">Our Aircraft Battery Maintenance</p>
    <div class="swiper-container swiper-after battery-swiper-cont">
        <div class="swiper card-swiper">
            <div class="swiper-wrapper card-container">
                <?php
                if (have_rows('features')):
                    while (have_rows('features')):
                        the_row();
                        $icon_feautres = get_sub_field('icon_feautres');
                        $feature_title = get_sub_field('license_title');
                        $feature_desc = get_sub_field('license_desc');
                        ?>
                        <div class="swiper-slide card-list battery-card-list">
                            <div class="card-image-text">
                                <img class="card-image" src="<?= $icon_feautres ?>" alt="">
                                <p class="element-title font-size battery-card-subtitle"><?= $feature_title ?></p>
                            </div>
                            <p class="element-subtitle battery-card-bottom-subtitle"><?= $feature_desc ?></p>
                        </div>
                    <?php endwhile;
                endif;
                ?>
            </div>
            <div class="swiper-pagination mobile-pagination"></div>
            <div class="next-prev-buuton mobile-buttons">
                <button class="swiper-button-prev mobile-style-btn-prev">
                    <img class="prev-mobile" src="https://x-technics.com/ysteeshy/2024/05/prev-mobile.webp" alt="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
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
                <button class="swiper-button-next mobile-style-btn-next">
                    <img class="next-mobile" src="https://x-technics.com/ysteeshy/2024/05/next-mobile.webp" alt="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
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
    </div>
</section>
<section class="two-card-inner" data-aos="fade-up">
    <p class="title title-before-after-effect color-style text-center title-center">
        <?= the_field('ex_heading'); ?>
    </p>
    <ul class="two-card-container">
        <?php
        if (have_rows('expert')):
            while (have_rows('expert')):
                the_row();
                $icon_feautres = get_sub_field('icon_feautres');
                $feature_title = get_sub_field('license_title');
                ?>
                <li class="two-card-list">
                    <img class="two-card-image" src="<?= $icon_feautres ?>" alt="">
                    <p class="two-card-text"><?= $feature_title ?></p>
                </li>
            <?php endwhile;
        endif;
        ?>
    </ul>
</section>
<section class="swiper-slide-inner width-center swiper-slide-inner-effect" data-aos="fade-up">
    <h3 class="title title-before-after-effect slide-title-sytle">Explore Other Services</h3>
    <div class="swiper-container swiper-after single-battery">
        <?php echo get_template_part('templates/related-pages'); ?>
    </div>
</section>
<?php echo get_template_part('templates/contact'); ?>
<?php get_footer(); ?>