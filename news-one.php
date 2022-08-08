<?php 

/*Template Name: Одна новсть/событие
 Template post type: post, page
*/
    get_header(); ?>
    <main class="main">
        <section class="information">
            <div class="container">
            <div class="breadcrumbs">
                    <?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }?>
                </div>
                <h1 class="information__title"><?php the_title() ?></h1>
                <p class="information__date"><?php echo get_the_date('j F Y');?></p>
                <p class="information__desc"><?php echo get_field('sub_title_one_news'); ?></p>
            </div>
            <div class="container p-0">
                <div class="information__image">
                <?php echo the_post_thumbnail() ?>
               
                </div>
            </div>
            <div class="container information-content">
            <?php the_content() ?>
            </div>
        </section>
    </main>
    <?php get_footer(); ?>