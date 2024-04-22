<?php get_header();
/* Template Name: Our Services Template */
?>

<section class="service-cover">
    <div class="about-cover-container">
        <div class="about-title-subtitle">
            <div class="about-title-subtitle-inner">
                <h1 class="cover-title about-cover-title" data-aos="fade-left"><?= the_field('title'); ?></h1>
                <h2 class="subtitle about-cover-subtitle" data-aos="fade-left"><?= the_field('description'); ?></h2>
            </div>
            <img class="about-cover-image service-image serive-cover-image" src="<?= the_field('image'); ?>" alt="" data-aos="fade-right">
        </div>
        <div class="service-provider-container our-service-inner our-service-inner-effect">
            <div class="provider-text-inner text-center">
                <p class="title title-before-after-effect color-style text-center title-center"><?= the_field('s_heading'); ?></p>
            </div>

            <?php
            $featured_posts = get_field('services');
            if ($featured_posts) : ?>
                <ul class="about-cards-container service-card">
                    <?php foreach ($featured_posts as $featured_post) :
                        $permalink = get_permalink($featured_post->ID);
                        $title = get_the_title($featured_post->ID);
                        $featured_image_url = get_the_post_thumbnail_url($featured_post->ID, 'full');
                    ?>
                        <li class="about-card-list" data-aos="fade-right">
                            <a class="about-card-link" href="<?php echo esc_url($permalink); ?>">
                                <img class="about-card-img" src="<?php echo     $featured_image_url; ?>" alt="">
                                <p class="about-card-text"> <?php echo esc_html($title); ?></p>
                            </a>
                        </li>
                    <?php endforeach;
                    wp_reset_postdata();                    ?>
                </ul>
            <?php endif; ?>
        </div>
		      <?php
		
                        if (have_rows('services_boxes')) :
		$count = 1;
                            while (have_rows('services_boxes')) : the_row();
                                $service_title = get_sub_field('service_title');
                                 $service_subtitle = get_sub_field('service_subtitle');
		     
		       $service_link = get_sub_field('service_link');
                        ?>

			    <div class="information-inner child-<?= $count ?>" data-aos="fade-right">
            <p class="title title-before-after-effect none-effect text-left max-width"><?= $service_title ?></p>
            <p class="this-element-subtitle"><?= $service_subtitle ?></p>
            <ul class="information-intro">
				 <?php
                        if (have_rows('service_list')) :
                            while (have_rows('service_list')) : the_row();
				 $service_list_text = get_sub_field('service_list_text');
				?>
				 <li class="information-intro-list"><?= $service_list_text ?></li>
				<?php   endwhile;
                        endif; ?>
				<?php if($service_link) : ?>
                <a class="menu-link our-aircraft-link link-left-inner" href="<?= $service_link ?>">
                    Explore More
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                        <g clip-path="url(#clip0_4006_464)">
                            <path d="M19.6213 18.3936L23.5403 14.4746C24.1767 13.8078 24.5317 12.9214 24.5317 11.9996C24.5317 11.0779 24.1767 10.1915 23.5403 9.52464L19.6213 5.60564C19.34 5.32425 18.9585 5.16611 18.5607 5.16602C18.1628 5.16592 17.7812 5.32388 17.4998 5.60514C17.2184 5.88641 17.0603 6.26793 17.0602 6.66579C17.0601 7.06365 17.218 7.44525 17.4993 7.72664L20.2793 10.5076L2.0293 10.5306C1.63147 10.5306 1.24994 10.6887 0.968637 10.97C0.687332 11.2513 0.529297 11.6328 0.529297 12.0306C0.529297 12.4285 0.687332 12.81 0.968637 13.0913C1.24994 13.3726 1.63147 13.5306 2.0293 13.5306L20.2603 13.5076L17.4993 16.2726C17.2261 16.5556 17.0749 16.9345 17.0783 17.3278C17.0817 17.721 17.2395 18.0973 17.5176 18.3754C17.7957 18.6535 18.1719 18.8112 18.5652 18.8147C18.9585 18.8181 19.3374 18.6669 19.6203 18.3936H19.6213Z" fill="white"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_4006_464">
                                <rect width="24" height="24" fill="white" transform="translate(0.5)"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                </a>
				<?php endif; ?>
            </ul>
        </div>
                        <?Php $count++;
                            endwhile;
                        endif; ?>
    
       
      
      
    </div>
</section>
<?php echo get_template_part('templates/contact'); ?>

<?php get_footer(); ?>