<?php get_header(); ?>
    <main class="main">
        <section class="news-all">
            <div class="container">
            <div class="breadcrumbs">
                    <?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }?>
                </div>
                <h1 class="section__title">НОВОСТИ <span>ВУЗОВ</span></h1>
                <?php if (have_posts()) { ?>
                <div class="news__tiles">
                <?php while (have_posts()) { the_post(); ?>
                <div class="card__news">
                        <div class="card__news-image">
                        <?php echo the_post_thumbnail() ?>
                        </div>
                        <div class="card__wrap">
                            <h3 class="card__title"><?php echo get_the_title() ?></h3>
                            <p class="card__desc">
                            <?php echo get_the_excerpt(); ?>
                            </p>
                            <p class="card__date"><?php echo get_the_date('j F Y');?></p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <?php } ?>
                 <!-- <div class="news__more">Смотреть еще +
                </div> -->
            </div>
        </section>
    </main>
    <?php get_footer(); ?>

