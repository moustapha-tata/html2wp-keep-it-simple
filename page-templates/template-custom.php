<?php
/**
 * Template Name: Custom Page
 */

get_header(); ?>

<div class="s-content">
    <div class="row">
        <div class="column large-12">

            <?php if ( get_field( 'hero_title' ) ) : ?>
                <h1 class="display-1"><?php echo esc_html( get_field( 'hero_title' ) ); ?></h1>
            <?php endif; ?>

            <?php if ( get_field( 'hero_description' ) ) : ?>
                <p class="lead"><?php echo esc_html( get_field( 'hero_description' ) ); ?></p>
            <?php endif; ?>

            <?php if ( get_field( 'hero_button_url' ) ) : ?>
                <p>
                    <a href="<?php echo esc_url( get_field( 'hero_button_url' ) ); ?>" class="btn btn--primary">
                        <?php esc_html_e( 'Learn More', 'html2wp' ); ?>
                    </a>
                </p>
            <?php endif; ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>