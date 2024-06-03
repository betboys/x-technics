<?php get_header(); ?>


<img class="security-linear-1" src="https://x-technics.com/ysteeshy/2024/05/linear.webp" alt="">
<section class="security-inner" data-aos="fade-up">
            <div class="security-inner-container">
           
				<?php
	if (have_posts()) :
		while (have_posts()) :
			the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?><?php
		endwhile;
	endif; ?>
           
            </div>
        </section>

<?php get_footer(); ?>