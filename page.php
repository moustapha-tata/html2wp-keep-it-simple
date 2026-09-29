<?php
/**
 * The main template file
 *
 * @package html2wp-keep-it-simple
 */

get_header(); ?>

    <!-- Content
    ================================================== -->
    <div class="s-content">

        <div class="row">

            <div id="main" class="s-content__main large-8 column">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) :
                        the_post();
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>

                            <header class="entry__header">

                                <h2 class="entry__title h1">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>

                                <div class="entry__meta">
                                    <ul>
                                        <li>
                                            <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
                                                <?php echo esc_html( get_the_date() ); ?>
                                            </time>
                                        </li>
                                        <li><?php the_author_posts_link(); ?></li>
                                    </ul>
                                </div>

                            </header>

                            <div class="entry__content">
                                <?php the_content(); ?>
                            </div>

                        </article> <!-- end entry -->
                        <?php
                    endwhile;

                    the_posts_pagination();

                else :
                    ?>
                    <p class="no-posts"><?php esc_html_e( 'There are no articles found.', 'html2wp-keep-it-simple' ); ?></p>
                    <?php
                endif;
                ?>
            </div> <!-- end main -->

            <?php get_sidebar(); ?>

        </div> <!-- end row -->

    </div> <!-- end content-wrap -->

<?php
get_footer();