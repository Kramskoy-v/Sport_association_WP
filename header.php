<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php the_title() ?></title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
	<header class="header">
		<div class="header__top">
			<div class="container d-flex f-wrap">
				<div class="header__logo">
					<a href="<?php echo get_permalink(8) ?>" class="logo__link">
						<img src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" alt="" class="logo__img">
					</a>
				</div>
				<!-- <p class="header__lang lang-desctop">
					<span class="header__lang-item">ru</span> / <span class="header__lang-item lang-active">en</span>
				</p> -->

			<?php get_search_form(); ?>
				<div class="hamburger">
					<span></span>
					<span></span>
					<span></span>
				</div>
				<p class="header__phone">
					<a href="tel:+7<?php echo get_field( 'contact_phone_link', 14 ); ?>" class="header__phone-link"><?php echo get_field( 'contact_phone_visual', 14 ); ?></a>
				</p>
				<div class="music">
					<div class="music__cover"></div>
					<div class="music__btn"></div>
					<p class="music__title">гимн ассоциации</p>
					<audio class="audio">
						<source src="<?php bloginfo('template_url'); ?>/assets/audio/music.mp3" type="audio/mpeg">
					</audio>
				</div>

			</div>
		</div>
		<div class="header__bottom">
			<div class="container f-end">
				<nav class="menu">
				<?php
                    wp_nav_menu([
                        'theme_location' => 'top',
                        'container' => '',
                        'menu_class' => 'menu__list',
                        'menu_id' => ''
                    ])
                    ?>
					<!-- <p class="header__lang lang-mobile">
						<span class="header__lang-item">ru</span> / <span
							class="header__lang-item lang-active">en</span>
					</p> -->
					<div class="cross-close">
						<span></span>
						<span></span>
					</div>
				</nav>
			</div>
		</div>
	</header>