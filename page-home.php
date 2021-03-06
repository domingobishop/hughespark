<?php
/**
 * Template Name: Home page
 *
 */
get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <main id="main" class="main" role="main">
        <div class="home-header-banner">
            <?php get_template_part( 'partials/slider' ); ?>
        </div>
        <div class="content">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <?php get_template_part( 'partials/content' ); ?>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <?php get_template_part( 'partials/promo' ); ?>
        <div class="home-footer-banner" style="background-image: url(<?php echo get_option('footer_img'); ?>);"></div>
    </main>

<?php endwhile; ?>

<?php get_footer(); ?>