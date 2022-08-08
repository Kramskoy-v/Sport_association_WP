<?php 

/*Template Name: Вузы*/

    get_header(); ?>
<main class="main">
    <section class="branch branch-page">
        <div class="container ">
            <div class="breadcrumbs">
                <?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }?>
            </div>
            <h2 class="section__title">НАШИ <span>ВУЗЫ</span></h2>
            <div class="university-wrapcard">

                <?php
			if (have_rows('card_university')) { // если найдены данные 
				while (have_rows('card_university')) {
					the_row(); ?>
                <div class="university-item university">
                    <div class="university__director">
                        <div class="director__image">
                            <img src="<?php the_sub_field('photo_rektor'); ?>" alt="" class="director__img">
                        </div>
                        <div class="director__info">
                            <h3 class="director__name">
                                <?php the_sub_field('name_rektor'); ?>
                            </h3>
                            <p class="director__position"><?php the_sub_field('position'); ?></p>
                        </div>
                        <div class="university__logo">
                            <img src="<?php the_sub_field('logo_university');?>" alt="" >
                        </div>
                        <div class="director__line"></div>
                    </div>
                    <div class="university__card">
                        <div class="university__contacts">
                            <p class="university__top-title">
                                <?php the_sub_field('top-title'); ?>
                            </p>
                            <h3 class="university__title">
                                <?php the_sub_field('title_university'); ?>
                            </h3>
                            <div class="university__wrapper">
                                <div class="university__data">
                                    <div class="university__data-ico">
                                    </div>
                                    <p class="university__data-desc">
                                        <?php the_sub_field('address'); ?>
                                    </p>
                                </div>
                                <div class="university__data">
                                    <div class="university__data-ico">
                                    </div>
                                    <p class="university__data-desc">
                                        <a href="tel:+7<?php the_sub_field('phone_link'); ?>"
                                            class="university__data-link">
                                            <?php the_sub_field('phone_visual'); ?>
                                        </a>
                                    </p>
                                </div>
                                <div class="university__data">
                                    <div class="university__data-ico">
                                    </div>
                                    <p class="university__data-desc">
                                        <a href="mailto:<?php the_sub_field('e-mail_address'); ?>"
                                            class="university__data-link">
                                            <?php the_sub_field('e-mail_address'); ?>
                                        </a>
                                    </p>
                                </div>
                                <div class="university__data">
                                    <div class="university__data-ico">

                                    </div>
                                    <p class="university__data-desc">
                                        <a href="http://<?php the_sub_field('name_site'); ?>"
                                            class="university__data-link" target="_blank">
                                            <?php the_sub_field('name_site'); ?>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="university__socials">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/vk.svg" alt="вконтакте"
                                    class="university__vk vk-blue">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/vk_white.svg" alt="вконтакте"
                                    class="university__vk vk-white">
                                <a href="<?php the_sub_field('vk_link'); ?>" class="university__social-link"
                                    target="_blank">смотреть в
                                    вконтакте</a>
                            </div>
                        </div>
                        <div class="university__photo">
                            <img src="<?php the_sub_field('photo_university'); ?>" alt="" class="university__img">
                        </div>
                    </div>
                </div>
                <?php	}
			} else {
				// строки не найдены 
			}
			?>

            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>