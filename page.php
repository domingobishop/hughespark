<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <main id="main" class="main" role="main">
        <div class="content">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <?php get_template_part( 'partials/content' ); ?>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </main>

<?php endwhile; ?>

<?php get_footer(); ?>