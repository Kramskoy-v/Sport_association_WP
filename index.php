<?php 

/*Template Name: Главная*/

    get_header(); ?>

<main>
    <section class="about">
        <div class="container p-0">
            <div class="about__bg" style="background-image: url('<?php echo get_field('main_background'); ?>')">
                <div class="about__mission">
                    <h1 class="about__title">МИССИЯ АССОЦИАЦИИ СПОРТИВНЫХ ВУЗОВ</h1>
                    <p class="about__desc">Объединяем усилия всех вузов спортивной отрасли для выработки единой политики в отношении профессионального образования.</p>
                    <div class="about__feedback">
                        <a class="about__link" href="<?php the_permalink(14) ?>">Связаться с нами</a>
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/about_arrow.svg" class="about__img"
                            alt="Стрелка обратной связи">
                    </div>
                </div>
                <div class="about__citation">
                    <p class="about__quote"><b>Иммануил Кант</b> «Имей мужество пользоваться собственным разумом»
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="news">
        <div class="container d-flex fd-c">
            <div class="section__info">
                <h2 class="section__title">НОВОСТИ <span>ВУЗОВ</span></h2>
                <p class="section__desc">Оперативная информация, которая представляет политический, интерес для
                    аудитории в своей свежести, то есть сообщения о событиях, произошедших недавно или происходящих
                    в данный момент</p>
            </div>
            <div class="news__tiles">
                <div class="news__top-row dflex-col">
                    <?php 
        $args = array(
            'cat' => 1, //новости
            'posts_per_page' => 2
        );
        $q = new WP_Query( $args );
        if( $q->have_posts() ) { ?>
                    <?php while ( $q-> have_posts()) {$q-> the_post(); ?>
                    <div class="card__big-news">
                        <div class="card__image-big-news">
                            <?php echo the_post_thumbnail() ?>
                        </div>
                        <div class="card__wrapper-big">
                            <h3 class="card__title">
                                <?php echo get_the_title() ?>
                            </h3>
                            <p class="card__desc">
                                <?php echo get_the_excerpt(); ?>
                            </p>
                            <p class="card__date">
                                <?php echo get_the_date('j F Y');?>
                            </p>
                        </div>
                    </div>
                    <?php } ?>
                    <?php }
                    wp_reset_postdata(); ?>
                </div>
                <div class="news__bottom-row dflex-col">
                    <?php 
        $args = array(
            'cat' => 1, //новости
            'posts_per_page' => 3,
            'offset' => 2
        );
        $q = new WP_Query( $args );
        if( $q->have_posts() ) { ?>
                    <?php while ( $q-> have_posts()) {$q-> the_post(); ?>
                    <div class="card__small-news">
                        <div class="card__image-small-news">
                            <?php echo the_post_thumbnail() ?>
                        </div>
                        <div class="card__wrapper-small">
                            <h3 class="card__title">
                                <?php echo get_the_title() ?>
                            </h3>
                            <p class="card__desc">
                                <?php echo get_the_excerpt(); ?>
                            </p>
                            <p class="card__date">
                                <?php echo get_the_date('j F Y');?>
                            </p>
                        </div>
                    </div>
                    <?php } ?>
                    <?php }
                    wp_reset_postdata(); ?>
                </div>
                <div class="news__more">
                    <a href="<?php echo get_category_link(1) ?>" class="sticker__link">Смотреть еще +</a>
                </div>
            </div>
        </div>
    </section>
    <section class="target">
        <div class="container d-flex fd-c">
            <div class="section__info w-413">
                <h2 class="section__title">ЦЕЛЬ <span>АССОЦИАЦИИ</span></h2>
                <p class="section__desc">Объединить усилия всех вузов отрасли для выработки единой политики в
                    отношении
                    профессионального образования, став ведущей экспертной образовательной
                    организацией</p>
                <div class="president">
                    <div class="president__image">
                        <img src="<?php echo get_field('photo_president'); ?>" alt="">
                    </div>
                    <h3 class="director__name">
                        <?php echo get_field('name_president'); ?>
                    </h3>
                    <p class="director__position">
                        <?php echo get_field('position_president'); ?>
                    </p>
                    </div>
                </div>
            <div class="target__docs">
                <div class="swiper">
                    <div class="swiper-wrapper">
                    <?php $images = get_field('target_main'); 
                        		foreach( $images as $image ) {
                        	?>
                             <div class="swiper-slide">
                                 <img src="<?php echo $image['url']; ?>"
                                alt="" class="target__img">
                            </div>
                            <?php } ?>                        
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev">
                    </div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
    </section>
    <section class="branch" id="branch">
        <div class="container">
            <h2 class="section__title">НАШИ <span>ВУЗЫ</span></h2>
            <div class="swiper w-branch">
                <div class="swiper-wrapper">

                    <?php
			if (have_rows('card_university', 10)) { // если найдены данные 
				while (have_rows('card_university', 10)) {
					the_row(); ?>
                    <div class="swiper-slide">
                        <div class="university-item university">
                            <div class="university__director">
                                <div class="director__image">
                                    <img src="<?php the_sub_field('photo_rektor'); ?>" alt="" class="director__img">
                                </div>
                                <div class="director__info">
                                    <h3 class="director__name">
                                        <?php the_sub_field('name_rektor'); ?>
                                    </h3>
                                    <p class="director__position">
                                        <?php the_sub_field('position'); ?>
                                    </p>
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
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/vk_white.svg"
                                            alt="вконтакте" class="university__vk vk-white">
                                        <a href="<?php the_sub_field('vk_link'); ?>" class="university__social-link"
                                            target="_blank">смотреть в
                                            вконтакте</a>
                                    </div>
                                </div>
                                <div class="university__photo">
                                    <img src="<?php the_sub_field('photo_university'); ?>" alt=""
                                        class="university__img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php	}
			} else {
				// строки не найдены 
			}
			?>
                </div>
                <div class="swiper-pagination"></div>
                <div class="branch__button-wrapper">
                    <div class="swiper-button-prev branch-prev"></div>
                    <div class="swiper-button-next branch-next"></div>
                    <p class="branch__button-prev">Предыдущий вуз</p>
                    <p class="branch__button-next">Следующий вуз</p>
                </div>
            </div>
        </div>
    </section>
    <section class="partners">
        <div class="container d-flex f-wrap">
            <div class="section__info w-413">
                <h2 class="section__title">Наши <span>партнеры</span></h2>
                <p class="section__desc">Член какого-либо партнёрства
                    Элемент товаропроводящей сети, разделяющий риски с производителем</p>
            </div>
            <div class="partners__list">
                <a href=" https://www.minsport.gov.ru" target="_blank" class="partners__item">
                    <div class="partners__image">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/min_sport.jpg" alt="Министерство спорта"
                            class="partners__img">
                    </div>
                </a>

                <a href=" https://olympic.ru" class="partners__item" target="_blank">
                    <div class="partners__image">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/olympic.jpg" alt="Олимпийский комитет"
                            class="partners__img">
                    </div>
                </a>
                <a href=" https://minobrnauki.gov.ru" class="partners__item" target="_blank">
                    <div class="partners__image">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/min_science.jpg"
                            alt="Министерство науки" class="partners__img">
                    </div>
                </a>
                <a href=" https://studsport.ru" class="partners__item" target="_blank">
                    <div class="partners__image">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/rssu.jpg" alt="РССУ"
                            class="partners__img">
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- <section class="blog" id="blog">
        <div class="container">
            <h2 class="section__title">Наш <span>блог</span></h2>
            <div class="blog__tiles">
                <div class="blog__row dflex-col">

                    <?php 
        $args = array(
            'cat' => 3, //блог
            'posts_per_page' => 5,
                    );
        $q = new WP_Query( $args );
        $i = 0;
        if( $q->have_posts() ) { ?>
                    <?php while ( $q-> have_posts()) {$q-> the_post(); 
                        if ($i < 2) { 
                        ?>

                    <div class="card__big-blog">
                        <div class="card__image-big-blog">
                            <?php echo the_post_thumbnail() ?>
                        </div>
                        <div class="card__wrapper-big">
                            <h3 class="card__title">
                                <?php echo get_the_title() ?>
                            </h3>
                            <p class="card__desc">
                                <?php echo get_the_excerpt(); ?>
                            </p>
                            <p class="card__date">
                                <?php echo get_the_date('j F Y');?>
                            </p>
                        </div>
                    </div>

                    <?php $i++;} else {?>
                    <div class="card__small-blog">
                        <div class="card__image-small-blog">
                            <?php echo the_post_thumbnail() ?>
                        </div>
                        <div class="card__wrapper-small">
                            <h3 class="card__title">
                                <?php echo get_the_title() ?>
                            </h3>
                            <p class="card__desc">
                                <?php echo get_the_excerpt(); ?>
                            </p>
                            <p class="card__date">
                                <?php echo get_the_date('j F Y');?>
                            </p>
                        </div>
                    </div>
                    <?php } } ?>
                    <?php }
                    wp_reset_postdata(); ?>
                </div>

                <?php // AJAX загрузка постов ?>
                <?php if ( $q->max_num_pages > 1 ) { ?>
                <script> var this_page = 1; </script>

                <div class="btn-loadmore" title="Загрузить еще"
                    data-param-posts='<?php echo serialize($q->query_vars); ?>'
                    data-max-pages='<?php echo $q->max_num_pages; ?>'>
                    <span class="fas fa-redo"></span> Смотреть еще +
                </div>
                <?php } ?>

            </div>
        </div>
    </section> -->
</main>

<?php get_footer(); ?>