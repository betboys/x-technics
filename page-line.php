<?php get_header();
/* Template Name: Line Maintenance Template */
?>
<section class="service-cover">
    <div class="about-cover-container">
        <div class="about-title-subtitle">
            <div class="about-title-subtitle-inner">
                <h1 class="cover-title about-cover-title" data-aos="fade-left"><?= the_field('title'); ?></h1>
                <h2 class="subtitle about-cover-subtitle" data-aos="fade-left"><?= the_field('description'); ?></h2>
            </div>
            <img class="about-cover-image single-service-aircraft-image line-single-img"
                src="<?= the_field('image'); ?>" alt="" data-aos="fade-right">

        </div>
        <div class="ensurin-continuous line-ensurin-continuous">
            <div class="content-text-inner">
                <p class="title title-before-after-effect none-effect text-left">
                    <?= the_field('c_heading'); ?>
                </p>
                <p class="this-element-subtitle padding-rigth"><?= the_field('c_desc'); ?></p>
            </div>
            <div class="swiper-container">
                <div class="swiper">
                    <div class="swiper-wrapper info-flex-div" data-aos="fade-right">
                        <?php
                        if (have_rows('features')):
                            while (have_rows('features')):
                                the_row();
                                $icon_feautres = get_sub_field('icon_feautres');
                                $feature_title = get_sub_field('license_title');
                                $feature_desc = get_sub_field('license_desc');
                                ?>

                                <div class="swiper-slide this-content-intro">
                                    <div class="image-title-cont">
                                        <img class="element-img" src="<?= $icon_feautres ?>" alt="">
                                        <p class="element-title"><?= $feature_title ?></p>
                                    </div>
                                    <p class="element-subtitle"><?= $feature_desc ?></p>
                                </div>
                            <?php endwhile;
                        endif;
                        ?>
                    </div>
                    <div class="swiper-pagination mobile-pagination"></div>
                    <div class="next-prev-buuton mobile-buttons">
                        <button class="swiper-button-prev mobile-style-btn-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
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
                        <button class="swiper-button-next mobile-style-btn-next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
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
            </div>
            <div class="content-text-inner top-element">
                <p class="title title-before-after-effect none-effect text-left"> <?= the_field('ex_heading'); ?></p>
                <p class="this-element-subtitle padding-rigth"> <?= the_field('ex_desc'); ?></p>
            </div>
            <ul class="our-expertise-cont">
                <?php
                if (have_rows('expert')):
                    while (have_rows('expert')):
                        the_row();
                        $icon_feautres = get_sub_field('icon_feautres');
                        $feature_title = get_sub_field('license_title');
                        $feature_desc = get_sub_field('license_desc');
                        ?>
                        <li class="our-expertise-list" data-aos="fade-right">
                            <div class="image-texts-container">
                                <img class="img-settings" src="<?= $icon_feautres ?>" alt="">
                                <div class="title-subtitle-lists">
                                    <p class="element-title"><?= $feature_title ?></p>
                                    <p class="element-subtitle el-absolute"><?= $feature_desc ?></p>
                                </div>
                            </div>
                        </li>
                    <?php endwhile;
                endif;
                ?>
            </ul>
            <div class="left-text-rigth-image-cont line-intro">
                <div class="left-text-cont">
                    <p class="title title-before-after-effect none-effect text-left" data-aos="fade-left">
                        <?= the_field('wwd_heading'); ?></p>
                    <p class="element-subtitle" data-aos="fade-left"><?= the_field('wwd_desc'); ?></p>
                </div>
                <img class="air-image-rigth" src="<?= the_field('wwd_img'); ?>" alt="" data-aos="fade-right">
            </div>

            <div class="download-pdf">
                <p class="title title-before-after-effect none-effect text-left"><?= the_field('text_heading'); ?></p>
                <ul class="download-pdf-container">
                    <?php
                    if (have_rows('certs')):
                        while (have_rows('certs')):
                            the_row();
                            $file = get_sub_field('certificate_file');
                            $url = $file['url'];
                            $title = $file['title'];
                            $caption = $file['description'];
                            $file_id = $file['ID'];
                            $filesize = filesize(get_attached_file($file_id));
                            $filesize = size_format($filesize, 2);
                            ?>

                            <li class="download-pdf-list" data-aos="fade-left">
                                <div class="download-pdf-link">
                                    <div class="pdf-img-text-inner">
                                        <img class="pdf-img"
                                            src="<?php echo get_template_directory_uri(); ?>/images/Certificate-pdf.png" alt="">
                                        <div class="pdf-texts-intro">
                                            <p class="pdf-title"><?= $title ?></p>
                                            <p class="pdf-subtitle"><?= $caption ?></p>
                                            <p class="pdf-subtitle">PDF | <?= $filesize ?></p>
                                        </div>
                                    </div>
                                    <a class="download-icon-inner" href="<?= $url ?>" download="download">
                                        <span>
                                            Download
                                        </span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="41" viewBox="0 0 40 41"
                                            fill="none">
                                            <path class="download-icon"
                                                d="M20.1417 26.7355C20.0636 26.8136 19.937 26.8136 19.8589 26.7355L11.806 18.6826C11.7288 18.6054 11.7277 18.4807 11.8035 18.4022L13.8589 16.2734C13.9366 16.1929 14.0652 16.1918 14.1442 16.2709L17.9922 20.1189C18.1182 20.2449 18.3337 20.1556 18.3337 19.9774V7.07695C18.3337 6.9665 18.4232 6.87695 18.5337 6.87695H21.467C21.5774 6.87695 21.667 6.9665 21.667 7.07695V19.9774C21.667 20.1556 21.8824 20.2449 22.0084 20.1189L25.8564 16.2709C25.9355 16.1918 26.064 16.1929 26.1417 16.2734L28.1972 18.4022C28.2729 18.4807 28.2718 18.6054 28.1947 18.6826L20.1417 26.7355ZM10.0003 33.5436C9.08366 33.5436 8.29894 33.2172 7.64616 32.5645C6.99338 31.9117 6.66699 31.127 6.66699 30.2103V25.4103C6.66699 25.2998 6.75654 25.2103 6.86699 25.2103H9.80033C9.91078 25.2103 10.0003 25.2998 10.0003 25.4103V30.0103C10.0003 30.1207 10.0899 30.2103 10.2003 30.2103H29.8003C29.9108 30.2103 30.0003 30.1207 30.0003 30.0103V25.4103C30.0003 25.2998 30.0899 25.2103 30.2003 25.2103H33.1337C33.2441 25.2103 33.3337 25.2998 33.3337 25.4103V30.2103C33.3337 31.127 33.0073 31.9117 32.3545 32.5645C31.7017 33.2172 30.917 33.5436 30.0003 33.5436H10.0003Z"
                                                fill="white"></path>
                                        </svg>
                                    </a>
                                </div>
                            </li>
                            <?php
                        endwhile;
                    endif; ?>


                </ul>
            </div>
        </div>
    </div>

    <div class="swiper-slide-inner swiper-slide-inner-effect width-center">
        <h3 class="title title-before-after-effect slide-title-sytle">Explore Other Services:</h3>
        <div class="swiper-container swiper-after" data-aos="fade-right">
            <?php echo get_template_part('templates/related-pages'); ?>
        </div>
    </div>
</section>
<?php echo get_template_part('templates/contact'); ?>

<?php get_footer(); ?>