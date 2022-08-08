<?php
/*
Template Name: search
*/
get_header();
?>
<div class="container search">
<div class="breadcrumbs">
                <?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }?>
            </div>
<h1><?php echo 'Результат поиска:' . '<span>' . get_search_query() . '</span>'; ?></h1>
<?php
if (have_posts()) :
while (have_posts()) : the_post();
?>
<div id="posts">
<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
<p><?php the_excerpt() ?></p>
<div>Дата добавления: <?php echo get_the_date('j F Y');?></div>
</div>

<?php endwhile; ?>

</div>
<div class="container"><?php

else :
echo "Извините по Вашему результату ничего не найдено";

endif;

?>
</div>

<?php get_footer();?>