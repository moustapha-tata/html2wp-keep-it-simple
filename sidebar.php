<?php
/**
 * The sidebar containing the main widget area
 *
 * @package html2wp-keep-it-simple
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>

<div id="sidebar" class="s-content__sidebar large-4 column">

    <?php if ( is_active_sidebar( 'sidebar0' ) ) : ?>

        <?php dynamic_sidebar( 'sidebar0' ); ?>

    <?php else : ?>

        <!-- Fallback widgets displayed only when no active widgets are assigned -->
        
        <!-- 1. Serach Form -->
        <div class="widget widget--search">
            <h3 class="widget-title h6"><?php esc_html_e( 'Search', 'html2wp-keep-it-simple' ); ?></h3>
            <?php get_search_form(); ?>
        </div>

        <!-- 2. Categories -->
        <div class="widget widget--categories">
            <h3 class="widget-title h6"><?php esc_html_e( 'Categories', 'html2wp-keep-it-simple' ); ?></h3>
            <ul>
                <?php
                wp_list_categories( array(
                    'show_count' => true,
                    'title_li'   => '',
                ) );
                ?>
            </ul>
        </div>

        <!-- 3. Text -->
        <div class="widget widget_text group">
            <h3 class="widget-title h6"><?php esc_html_e( 'About This Blog', 'html2wp-keep-it-simple' ); ?></h3>
            <p>
                <?php esc_html_e( 'Welcome to our blog. Manage your sidebar widgets directly from WordPress Dashboard > Appearance > Widgets.', 'html2wp-keep-it-simple' ); ?>
            </p>
        </div>

        <!-- 4. Post Tags -->
        <div class="widget widget_tags">
            <h3 class="widget-title h6"><?php esc_html_e( 'Post Tags', 'html2wp-keep-it-simple' ); ?></h3>
            <div class="tagcloud group">
                <?php
                wp_tag_cloud( array(
                    'smallest' => 12,
                    'largest'  => 12,
                    'unit'     => 'px',
                    'format'   => 'flat',
                    'number'   => 10,
                ) );
                ?>
            </div>
        </div>

        <!-- 5. Popular Posts -->
        <div class="widget widget_popular">
            <h3 class="widget-title h6"><?php esc_html_e( 'Popular Posts', 'html2wp-keep-it-simple' ); ?></h3>
            <ul class="link-list">
                <?php
                $popular_query = new WP_Query( array(
                    'posts_per_page'      => 3,
                    'post_status'         => 'publish',
                    'ignore_sticky_posts' => 1,
                    'orderby'             => 'comment_count',
                    'order'               => 'DESC',
                ) );

                if ( $popular_query->have_posts() ) :
                    while ( $popular_query->have_posts() ) : $popular_query->the_post();
                        ?>
                        <li>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </li>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <li><?php esc_html_e( 'No popular posts found.', 'html2wp-keep-it-simple' ); ?></li>
                <?php endif; ?>
            </ul>
        </div>

    <?php endif; ?>

</div> <!-- end sidebar -->