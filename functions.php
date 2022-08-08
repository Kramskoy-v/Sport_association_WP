<?php


add_action( 'wp_enqueue_scripts', function (){
    function my_update_jquery () {
        if ( !is_admin() ) { 
        wp_deregister_script('jquery');
        wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', false, false, false);
        wp_enqueue_script('jquery');
        }
    }


    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css' );
    wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css' );
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.min.css' );
    
    wp_enqueue_script( 'swiperScript', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}
);

add_action( 'after_setup_theme', 'add_menu' );
function add_menu() {
	register_nav_menu( 'top', 'Главное меню' );
}


add_theme_support( 'post-thumbnails' );
add_theme_support('title-tag');
add_theme_support('custom-logo');

add_filter( 'excerpt_length', function(){
	return 15;
} );

add_filter( 'excerpt_more', 'new_excerpt_more' );
function new_excerpt_more( $more ){
	global $post;
	return '<a href="'. get_permalink($post) . '"> Читать дальше...</a>';
}

require get_template_directory() . '/ajax-search.php'; 

// AJAX загрузка постов 
function load_posts () {
    $args = unserialize( stripslashes( $_POST['query'] ) );
   
    $args['paged'] = $_POST['page'] + 1; // следующая страница 

    query_posts( $args );
    if ( have_posts() ) {
        while ( have_posts() ) { the_post();
   
        ?>
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
        <? }
        wp_reset_postdata();
        wp_die();
    }
}
add_action('wp_ajax_loadmore', 'load_posts');
add_action('wp_ajax_nopriv_loadmore', 'load_posts');


/* Отключаем админ-панель для всех пользователей. */
show_admin_bar(false);

?>
