<footer class="footer">
		<div class="contacts">
			<div class="container d-flex jc-s f-wrap">
				<div class="contacts__association">
					<h2 class="contacts__title">Ассоциация спортивных вузов</h2>
					<a href="tel:+7<?php echo get_field( 'contact_phone_link', 14 ); ?>" class="contacts__phone"><?php echo get_field( 'contact_phone_visual', 14 );?></a>
					<a href="mailto:<?php echo get_field( 'contact_e-mail_address', 14 ); ?>" class="contacts__email"><?php echo get_field( 'contact_e-mail_address', 14 ); ?></a>
					<!-- <div class="contacts__socials">
						<a href="#" class="contacts__socials-link">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/contacts_vk.svg" alt="вконтакте" class="contacts__ico">
						</a>
						<a href="#" class="contacts__socials-link">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/contacts_ok.svg" alt="одноклассники" class="contacts__ico">
						</a>

					</div> -->
				</div>
				<div class="contacts__links">
					<h3 class="contacts__sub-title">ПОЛЕЗНЫЕ ССЫЛКИ</h3>
					<div class="contacts__wrapper dflex-col">
						<ul class="links__list">
							<li class="links__item"><a href="https://www.minsport.gov.ru/" class="links__link">Министерство спорта</a>
							</li>
							<li class="links__item"><a href="https://minobrnauki.gov.ru" class="links__link">Министерство науки и высшего образования</a>
							</li>
							<li class="links__item"><a href="#" class="links__link">Российское образование</a>
							</li>
						</ul>
						<ul class="links__list">
							<li class="links__item"><a href="#" class="links__link">Единое окно доступа к
									образовательным ресурсам</a>
							</li>
							<li class="links__item"><a href="#" class="links__link">Единая коллекция цифровых
									образовательных ресурсов</a>
							</li>
							<li class="links__item"><a href="#" class="links__link">Федеральный центр
									информационно-образовательных ресурсов</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<p class="footer__copyright">2022 Все права защищены
			</p>
		</div>
		<div class="music-red music__btn"></div>
		<div class="back_to_top"></div>
	</footer>
    <?php wp_footer(); ?>
</body>

</html>