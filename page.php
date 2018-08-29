<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <main id="main" class="main" role="main">
        <div class="content">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="entry-header">
                                <h1><?php the_title(); ?></h1>
                                <?php if ( is_single() ) { ?>
                                    <p>by <?php echo get_the_author(); ?></p>
                                <?php } elseif (is_front_page()) {?>
                                    <p><?php bloginfo('description'); ?></p>
                                <?php } ?>
                            </div>
                            <div class="entry-content">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </main>

<?php endwhile; ?>

<?php get_footer(); ?>