<?php get_header(); ?>

    <!-- Content ================================================== -->
    <div class="s-content">

        <div class="row">

            <div id="main" class="s-content__main large-8 column">
                
                <?php if ( have_posts() ) : ?>

                    <?php while ( have_posts() ) : the_post(); ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>

                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="entry__thumb">
                                    <a href="<?php the_permalink(); ?>" class="entry__thumb-link">
                                        <?php the_post_thumbnail( 'large', array( 'alt' => the_title_attribute( array( 'echo' => false ) ) ) ); ?>
                                    </a>
                                </div>
                            <?php endif; ?>

                            <header class="entry__header">
                                <h2 class="entry__title h1">
                                    <a href="<?php the_permalink(); ?>" rel="bookmark">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>

                                <div class="entry__meta">
                                    <ul>
                                        <li><?php echo esc_html( get_the_date() ); ?></li>
                                        <li><span class="entry__meta-cat"><?php the_category( ', ' ); ?></span></li>
                                        <li><?php the_author_posts_link(); ?></li>
                                    </ul>
                                </div>
                            </header>
                            
                            <div class="entry__content">
                                <?php the_excerpt(); ?>
                                <p>
                                    <a href="<?php the_permalink(); ?>" class="more-link">
                                        <?php esc_html_e( 'Read More', 'html2wp' ); ?> &rarr;
                                    </a>
                                </p>
                            </div> 

                        </article> <!-- end entry -->

                    <?php endwhile; ?>

                    <!-- الترقيم القياسي للصفحات -->
                    <div class="post-pagination">
                        <?php
                        the_posts_pagination( array(
                            'mid_size'  => 2,
                            'prev_text' => esc_html__( '&larr; Previous', 'html2wp' ),
                            'next_text' => esc_html__( 'Next &rarr;', 'html2wp' ),
                        ) );
                        ?>
                    </div>

                <?php else : ?>

                    <div class="no-results entry">
                        <h2 class="h2"><?php esc_html_e( 'No Posts Found', 'html2wp' ); ?></h2>
                        <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for.', 'html2wp' ); ?></p>
                    </div>

                <?php endif; ?>

            </div> <!-- end main -->

            <?php get_sidebar(); ?>

        </div> <!-- end row -->

    </div> <!-- end content-wrap -->

<?php get_footer(); ?>