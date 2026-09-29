<?php
/**
 * The template for displaying all single posts
 *
 * @package html2wp-keep-it-simple
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header(); ?>

    <!-- Content ================================================== -->
    <div class="s-content">

        <div class="row">

            <div id="main" class="s-content__main large-8 column">
                
                <?php if ( have_posts() ) : ?>

                    <?php while ( have_posts() ) : the_post(); ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>

                            <header class="entry__header">
                                <h1 class="entry__title h1">
                                    <?php the_title(); ?>
                                </h1>

                                <div class="entry__meta">
                                    <ul>
                                        <li><?php echo esc_html( get_the_date() ); ?></li>
                                        <li><span class="entry__meta-cat"><?php the_category( ', ' ); ?></span></li>
                                        <li><?php the_author_posts_link(); ?></li>
                                    </ul>
                                </div>
                            </header>

                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="entry__thumb">
                                    <?php the_post_thumbnail( 'large', array( 'alt' => the_title_attribute( array( 'echo' => false ) ) ) ); ?>
                                </div>
                            <?php endif; ?>

                            <div class="entry__content">
                                <?php
                                the_content();

                                // Multi-page post pagination support (<!--nextpage-->)
                                wp_link_pages( array(
                                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'html2wp-keep-it-simple' ),
                                    'after'  => '</div>',
                                ) );
                                ?>
                            </div>

                            <!-- Post Tags -->
                            <div class="entry__tags">
                                <?php the_tags( '<span class="entry__tag-list">' . esc_html__( 'Tags: ', 'html2wp-keep-it-simple' ), ' ', '</span>' ); ?>
                            </div>

                            <!-- Post Navigation (Previous / Next Post) -->
                            <div class="entry__nav">
                                <?php
                                the_post_navigation( array(
                                    'prev_text' => '<span class="nav-subtitle">' . esc_html__( '&larr; Previous Post', 'html2wp-keep-it-simple' ) . '</span> <span class="nav-title">%title</span>',
                                    'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next Post &rarr;', 'html2wp-keep-it-simple' ) . '</span> <span class="nav-title">%title</span>',
                                ) );
                                ?>
                            </div>

                            <!-- Comments Section -->
                            <?php
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                            ?>

                        </article> <!-- end entry -->

                    <?php endwhile; ?>

                <?php else : ?>

                    <div class="no-results entry">
                        <h2 class="h2"><?php esc_html_e( 'No Posts Found', 'html2wp-keep-it-simple' ); ?></h2>
                        <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for.', 'html2wp-keep-it-simple' ); ?></p>
                    </div>

                <?php endif; ?>

            </div> <!-- end main -->

            <?php get_sidebar(); ?>

        </div> <!-- end row -->

    </div> <!-- end content-wrap -->

<?php get_footer(); ?>