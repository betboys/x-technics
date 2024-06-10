<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo wp_get_document_title(); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!-- Generate favicon here http://www.favicon-generator.org/ -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="preloader">
		<video class="preloader-video" src="https://x-technics.com/ysteeshy/2024/06/draft.mp4" type="video/mp4" autoplay muted loop></video>
	</div>

	<main class="main">
		<div class="left"></div>

		<header itemscope itemtype="http://schema.org/WPHeader" class="header">
			<div class="header-container">
				<a class="link" href="<?php echo get_bloginfo('url'); ?>">
					<img class="header-logo" src="<?= the_field('header_logo', 'option'); ?>" alt="Header Logo">
				</a>
				<div class="burger-menu-container">
					<button class="open-menu">
						<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
							<path
								d="M5.33333 24C4.59695 24 4 23.403 4 22.6667C4 21.9303 4.59695 21.3333 5.33333 21.3333H26.6667C27.403 21.3333 28 21.9303 28 22.6667C28 23.403 27.403 24 26.6667 24H5.33333ZM5.33333 17.3333C4.59695 17.3333 4 16.7364 4 16C4 15.2636 4.59695 14.6667 5.33333 14.6667H26.6667C27.403 14.6667 28 15.2636 28 16C28 16.7364 27.403 17.3333 26.6667 17.3333H5.33333ZM5.33333 10.6667C4.59695 10.6667 4 10.0697 4 9.33333C4 8.59695 4.59695 8 5.33333 8H26.6667C27.403 8 28 8.59695 28 9.33333C28 10.0697 27.403 10.6667 26.6667 10.6667H5.33333Z"
								fill="#687EFF" />
						</svg>
					</button>
					<button class="close-menu">
						<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
							<path
								d="M9.24174 24.6256C8.85122 25.0161 8.21805 25.0161 7.82753 24.6256L7.37508 24.1731C6.98455 23.7826 6.98455 23.1494 7.37508 22.7589L13.4275 16.7065C13.8181 16.3159 13.8181 15.6828 13.4275 15.2922L7.37508 9.23979C6.98455 8.84927 6.98455 8.2161 7.37508 7.82558L7.82753 7.37312C8.21805 6.9826 8.85122 6.9826 9.24174 7.37312L15.2942 13.4256C15.6847 13.8161 16.3179 13.8161 16.7084 13.4256L22.7609 7.37312C23.1514 6.9826 23.7845 6.9826 24.1751 7.37312L24.6275 7.82557C25.0181 8.2161 25.0181 8.84926 24.6275 9.23979L18.5751 15.2922C18.1846 15.6828 18.1846 16.3159 18.5751 16.7065L24.6275 22.7589C25.0181 23.1494 25.0181 23.7826 24.6275 24.1731L24.1751 24.6256C23.7846 25.0161 23.1514 25.0161 22.7609 24.6256L16.7084 18.5731C16.3179 18.1826 15.6847 18.1826 15.2942 18.5731L9.24174 24.6256Z"
								fill="#24B6FF" />
						</svg>
					</button>
				</div>
				<nav class="header-navigation">

					<?php
					wp_nav_menu([
						'theme_location' => 'primary-menu',
						'menu_class' => 'header-menu-inner',
						'container' => 'ul',
						'container_class' => 'header-menu-inner',
						'walker' => new Custom_Menu_Walker(),

					]); ?>


				</nav>
			</div>
		</header>