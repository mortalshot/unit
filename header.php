<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php 
	wp_body_open();
	
	echo '<div class="wrapper">';
		echo '<header class="header">';
			echo '<div class="header__big-container">';
				echo '<div class="header__row">';
					$logo = get_field('logo', 'options');
					echo '<div class="header__logo">';
						echo '<a href="'. get_home_url() .'" class="logo">';
							$logo_image = $logo['logo_image'];
							echo '<div class="logo__image">';
								echo '<img src="'. $logo_image['url'] .'" alt="'. $logo_image['alt'] .'">';
							echo '</div>';

							$logo_text = $logo['logo_text'];
							echo $logo_text != '' ? '<div class="logo__text">'. $logo_text .'</div>' : '';
						echo '</a>';
					echo '</div>';

					echo '<div class="header__right">';
						echo '<div class="header__menu menu">';
							echo '<button type="button" class="menu__icon icon-menu"></button>';
							echo '<nav class="menu__body">';
								wp_nav_menu([
									'theme_location'  => 'header',
									'menu'            => '',
									'container'       => false,
									'menu_class'      => "menu__list",
								]);
							echo '</nav>';
						echo '</div>';

						echo '<nav class="header__language language" data-da=".header__menu .menu__body, 767.98">';
							wp_nav_menu([
								'theme_location'  => 'lang',
								'menu'            => '',
								'container'       => false,
								'menu_class'      => "",
							]);
						echo '</nav>';
					echo '</div>';
				echo '</div>';
			echo '</div>';
		echo '</header>';
	?>