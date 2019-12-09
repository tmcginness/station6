<article id="post-<?php the_ID(); ?>" <?php post_class();?>>
           
                <header class="entry-header">

                    <span class="dashicons dashicons-format-<?php echo get_post_format($post->ID); ?>"></span>
                    <p><?php esc_html_e('enjoy this gallery!', 'station6') ?></p>
                    
                    <?php the_title('<h1>', '</h1>'); ?>
                    <div class="byline">
                        <?php esc_html_e('Author:'); ?> <?php the_author(); ?>
                    </div>

                </header>
                <div class="entry-content">
                    <p>Tortor donec torquent himenaeos ex ultrices tincidunt nulla ligula magna sit per habitant posuere lobortis
                    </p>
                </div>

                <?php if(comment_open()) :?>
                <?php COMMENTS_TEMPLATE() ?>
                <?php endif; ?>

            </article>