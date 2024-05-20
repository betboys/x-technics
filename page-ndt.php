<?php get_header();
/* Template Name: Aircraft NDT */
?>
<img class="ndt-linear-1" src="https://x-technics.com/ysteeshy/2024/05/linear.webp" alt="">
<img class="ndt-linear-2" src="https://x-technics.com/ysteeshy/2024/05/linear.webp" alt="">
<img class="ndt-linear-3" src="https://x-technics.com/ysteeshy/2024/05/linear.webp" alt="">
<section class="service-cover aircraft-ndt">
    <div class="ndt-title-subtitle-inner">
        <h1 class="cover-title about-cover-title"><?= the_field('title'); ?></h1>
        <h2 class="subtitle ndt-cover-subtitle"><?= the_field('description'); ?></h2>
    </div>
    <div class="ndt-image-cover hero-photo">
        <img class="hero-photo-style" src="<?= the_field('image'); ?>" alt="">
    </div>
</section>
<section class="detailing-services borescope-service-single ndt-onm">
    <p class="title title-before-after-effect none-effect text-left"><?= the_field('c_heading'); ?></p>
    <p class="this-element-subtitle"><?= the_field('c_desc'); ?></p>
    <ul class="detailing-services-inner ndt-inner" data-aos="fade-right">
        <?php
        if (have_rows('features')):
            while (have_rows('features')):
                the_row();
                $title = get_sub_field('license_desc');

                ?>

                <li class="detailing-services-list"><?= $title ?></li>
                <?Php
            endwhile;
        endif; ?>


    </ul>
</section>
<section class="offer-inner ndt-linear">
    <p class="title title-before-after-effect color-style title-center"><?= the_field('ex_heading'); ?></p>
    <div class="swiper-container swiper-after detailing-swiper">
        <div class="swiper">
            <div class="swiper-wrapper offer-flex detailing-swiper-wrapper" data-aos="fade-right">
                <?php
                if (have_rows('airplanes')):
                    while (have_rows('airplanes')):
                        the_row();
                        $img = get_sub_field('airplane_image');
                        $desc = get_sub_field('airplane_title');
                        ?>
                        <div class="swiper-slide offer-list detailing-slides">
                            <img class="offer-img detailing-slide-img" src="<?php echo $img; ?>" alt="">
                            <div class="offer-content detailing-slide-content"><?= $desc ?></div>
                        </div>
                        <?Php
                    endwhile;
                endif; ?>


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
<section class="detailing-services borescope-service-single ndt-wcx">
    <p class="title title-before-after-effect none-effect text-left"><?= the_field('c_heading_copy'); ?></p>
    <p class="this-element-subtitle"><?= the_field('c_desc_copy'); ?></p>
    <ul class="detailing-services-inner ndt-inner" data-aos="fade-right">
        <?php
        if (have_rows('features_copy')):
            while (have_rows('features_copy')):
                the_row();
                $title = get_sub_field('license_desc');

                ?>

                <li class="detailing-services-list"><?= $title ?></li>
                <?Php
            endwhile;
        endif; ?>

    </ul>
</section>
<section class="ndt-oae">
    <h3 class="title title-before-after-effect color-style title-center"><?= the_field('license_heading'); ?>
    </h3>
    <div class="our-aircraft-flex-container">
        <ul class="our-aircraft-flex-inner width-max">
            <?php
            if (have_rows('licneses')):
                while (have_rows('licneses')):
                    the_row();
                    $title = get_sub_field('license_title');

                    ?>
                    <li class="our-aircraft-flex-list" data-aos="fade-right">
                        <p class="our-aircraft-text"><?= $title ?></p>
                    </li>
                    <?Php
                endwhile;
            endif; ?>

        </ul>
    </div>
</section>
<section class="swiper-slide-inner ndt-slide width-center swiper-slide-inner-effect">
    <h3 class="title title-before-after-effect slide-title-sytle">Explore Other Services:</h3>
    <div class="swiper-container swiper-after" data-aos="fade-right">
        <?php echo get_template_part('templates/related-pages'); ?>
    </div>
</section>
<?php echo get_template_part('templates/contact'); ?>
<?php get_footer(); ?>