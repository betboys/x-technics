<?php get_header();
/* Template Name: Borescope and APU Inspection */
?>
<img class="borescope-linear-1" src="https://x-technics.com/ysteeshy/2024/05/linear.webp" alt="">
<img class="borescope-linear-2" src="https://x-technics.com/ysteeshy/2024/05/linear.webp" alt="">
<img class="borescope-linear-3" src="https://x-technics.com/ysteeshy/2024/05/linear.webp" alt="">
<section class="service-cover aircraft-borescope" data-aos="fade-up">
    <div class="borescope-title-subtitle-inner">
        <h1 class="cover-title about-cover-title"><?= the_field('title'); ?></h1>
        <h2 class="subtitle borescope-cover-subtitle"><?= the_field('description'); ?></h2>
    </div>
    <div class="borescope-image-cover hero-photo">
        <img class="hero-photo-style" src="<?= the_field('image'); ?>" alt="">
    </div>
</section>
<section class="detailing-services borescope-service-single" data-aos="fade-up">
    <p class="title title-before-after-effect none-effect text-left"><?= the_field('ex_heading'); ?></p>
    <ul class="detailing-services-inner">
        <li class="detailing-services-list list-style">
            <?= the_field('ex_desc'); ?>
        </li>
    </ul>
</section>
<section class="download-pdf borescope-pdf" data-aos="fade-up">
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
            endwhile;
        endif; ?>


    </ul>
</section>
<section class="swiper-slide-inner width-center swiper-slide-inner-effect" data-aos="fade-up">
    <h3 class="title title-before-after-effect slide-title-sytle">Explore Other Services</h3>
    <div class="swiper-container swiper-after single-borescope">
        <?php echo get_template_part('templates/related-pages'); ?>
    </div>
</section>
<?php echo get_template_part('templates/contact'); ?>
<?Php get_footer(); ?>