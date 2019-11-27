<?php get_header(); ?>

    <div id="primary" class="content-area">
        <main class="site-main" id="main" role="main">
        <?php 
                if ( have_posts()) : while ( have_posts()) : the_post(); ?>
                        
            <article id="post-<?php the_ID(); ?>" <?php post_class();?>>
           
                <header class="entry-header">
                    <h1><?php the_title(); ?></h1>
                </header>
                <div class="entry-content">
                    <p>Tortor donec torquent himenaeos ex ultrices tincidunt nulla ligula magna sit per habitant posuere lobortis
                    </p>
                </div>
            </article>
            <?php endwhile; else: ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class();?>>
           
                <header class="entry-header">
                    <h1><?php esc_html_e('404', 'station6'); ?></h1>
                </header>
                <div class="entry-content">
                    <p><?php esc_html_e('Sorry, there is no content to display', 'station6'); ?>
                    </p>
                </div>
            </article>
            <?php endif; ?>
        </main>
    
    </div>

    <?php get_sidebar(); ?>




<?php get_footer() ?>