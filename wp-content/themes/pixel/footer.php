<footer itemscope itemtype="http://schema.org/WPFooter" class="footer">
	<div class="footer-container">
		<div class="logo-links-inner">
			<a class="footer-logo" href="<?php echo get_bloginfo('url'); ?>">
				<img class="footer-logo-img" src="<?= the_field('footer_logo', 'option'); ?>" alt="Footer Logo">
			</a>

			<?php
			wp_nav_menu(array(
				'theme_location'  => 'footer-menu',
				'container'       => 'ul',
				'menu_class' => 'terms-privacy-cookies',
				'walker'          => new Custom_FMenu_Walker()
			));
			?>
			<p class="website-text">© <?php echo date('Y'); ?> <?php echo bloginfo('name'); ?>. All rights reserved. All rights reserved.</p>
		</div>
		<div class="subscribe-container">
			<div class="subscribe-text"><?= the_field('subscibe_form_title', 'option'); ?></div>
			<?php echo do_shortcode('[contact-form-7 id="5d26094" title="Subscribe"]'); ?>

		</div>
	</div>
</footer>
</main>
<?php wp_footer();
$page_template = get_page_template_slug(get_the_ID());

?>
</body>

</html>