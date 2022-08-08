<?php 

/*Template Name: Контакты*/

    get_header(); ?>
<main class="main">
    <section class="contacts-wrap">
        <div class="container">
            <div class="breadcrumbs">
                <?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }?>
            </div>
            <h1 class="section__title">Наши <span>контакты</span></h1>
        </div>
    </section>
    <section class="map">
        <div class="container">
            <div class="map__yandex">
                <script type="text/javascript" charset="utf-8" async
                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A6469fc2c1186ea50956788018d5716aa625e3f2df9158b5fe1778b20fa99b4ac&amp;width=100%25&amp;height=555&amp;lang=ru_RU&amp;scroll=false"></script>
            </div>
        </div>
    </section>
    <section class="feedback">
        <div class="container">
            <div class="feedback__wrap">
                <div class="feedform">
                    <?php echo do_shortcode('[contact-form-7 id="71" title="Контактная форма"]') ?>
                </div>
            </div>
            <div class="feedback__info">
                <div class="feedback__data">
                    <div class="feedback__data-ico">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/clock.svg" alt="Адрес"
                            class="feedback__data-img">
                    </div>
                    <p class="feedback__data-desc">
                        <?php echo get_field( 'working_time', 14 ); ?>
                    </p>
                </div>
                <div class="feedback__data">
                    <div class="feedback__data-ico">
                        <img src="<?php bloginfo('template_url');?>/assets/img/phone.svg" alt="Номер телефона"
                            class="feedback__data-img">
                    </div>
                    <p class="feedback__data-desc">
                        <a href="tel:+7<?php echo get_field( 'contact_phone_link', 14 ); ?>"
                            class="feedback__data-link">
                            <?php echo get_field( 'contact_phone_visual', 14 );?>
                        </a>
                    </p>
                </div>
                <div class="feedback__data">
                    <div class="feedback__data-ico">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/email.svg" alt="feedbackя почта"
                            class="feedback__data-img">
                    </div>
                    <p class="feedback__data-desc">
                        <a href="mailto:<?php echo get_field( 'contact_e-mail_address', 14 ); ?>"
                            class="feedback__data-link">
                            <?php echo get_field( 'contact_e-mail_address', 14 ); ?>
                        </a>
                    </p>
                </div>
                <div class="feedback__data" style="visibility:hidden">
                    <div class="feedback__data-ico">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/internet.svg" alt="Адрес"
                            class="feedback__data-img">
                    </div>
                    <p class="feedback__data-desc">
                        <a href="http://<?php echo get_field( 'contact_name_site', 14 ); ?>" class="feedback__data-link"
                            target="_blank">
                            <?php echo get_field( 'contact_name_site', 14 ); ?>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>