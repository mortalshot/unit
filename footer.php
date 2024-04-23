<?php 
			echo '<footer class="footer">';
				echo '<div class="footer__container">';
					echo '<div class="footer__row">';
						echo '<div class="footer__left">';
							echo '<div class="footer__privacy">';
								echo '<div class="footer__privacy-copyright">© UNIT '. date('Y') .'</div>';
								echo '<div class="footer__privacy-text">Все права защищены</div>';
							echo '</div>';

							$socials = get_field('socials', 'options');
							echo '<div class="footer__socials socials">';
								$mail = $socials['mail'];
								if ($mail) :
									echo '<div class="socials__item">';
										echo '<a href="mailto:'. $mail .'" class="socials__link">';
											echo '<img src="'. get_template_directory_uri() .'/dist/img/icons/mail.svg" alt="" loading="lazy">';
										echo '</a>';
									echo '</div>';
								endif;

								$telegram = $socials['telegram'];
								if ($telegram) :
									echo '<div class="socials__item">';
										echo '<a href="'. $telegram['url'] .'" class="socials__link">';
											echo '<span>'. $telegram['title'] .'</span>';
										echo '</a>';
									echo '</div>';
								endif;

								$vk = $socials['vk'];
								if ($vk) :
									echo '<div class="socials__item">';
										echo '<a href="'. $vk['url'] .'" class="socials__link">';
											echo '<span>'. $vk['title'] .'</span>';
										echo '</a>';
									echo '</div>';
								endif;
							echo '</div>';
						echo '</div>';

						echo '<div class="footer__right" data-da=".footer__left, 574.98">';
							echo '<nav class="footer__language language">';
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
			echo '</footer>';
		echo '</div>';
		wp_footer();
	echo '</body>';
echo '</html>';
