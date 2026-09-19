<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php wp_head(); ?>
</head>

<body id="top" <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- preloader ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- Header ================================================== -->
    <header class="s-header">
        <div class="row">
            <div class="s-header__content column">
                <h1 class="s-header__logotext">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
                    </a>
                </h1>
                <p class="s-header__tagline">
                    <?php echo esc_html( get_bloginfo( 'description' ) ); ?>
                </p>
            </div>
        </div> <!-- end row -->

        <nav class="s-header__nav-wrap">
            <?php 
            wp_nav_menu( array(
                'theme_location'  => 'top-menu',
                'container'       => 'div',
                'container_class' => 'row',
                'menu_class'      => 's-header__nav',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'fallback_cb'     => 'wp_page_menu',
                'depth'           => 2,
            ) );
            ?>
        </nav> <!-- end #nav-wrap -->

        <a class="header-menu-toggle" href="#0" title="<?php esc_attr_e( 'Menu', 'html2wp' ); ?>">
            <span><?php esc_html_e( 'Menu', 'html2wp' ); ?></span>
        </a>
    </header> <!-- Header End -->