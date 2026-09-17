<!DOCTYPE html>
<html class="no-js" lang="<?php bloginfo('language'); ?>">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title><?php bloginfo("name"); ?></title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->

    <?php if (is_rtl()):?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/base-rtl.css">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/main-rtl.css">
    <?php else: ?>
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/base.css">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/main.css">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
    <?php endif; ?>

    <!-- script
    ================================================== -->
    <script src="<?php echo get_template_directory_uri();?>/js/modernizr.js"></script>
    <script defer src="<?php echo get_template_directory_uri();?>/js/fontawesome/all.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
<?php wp_head(); ?>
</head>

<body id="top">

    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- Header
    ================================================== -->
    <header class="s-header">

        <div class="row">

            <div class="s-header__content column">
                <h1 class="s-header__logotext">
                    <a href="<?php bloginfo('wpurl'); ?>" title=""><?php bloginfo("name"); ?></a>
                </h1>
                <p class="s-header__tagline"><?php bloginfo("description"); ?></p>
            </div>
            

        </div> <!-- end row -->

       <nav class="s-header__nav-wrap">
<?php 
    $upper_menu = array(
        'theme_location'  => 'top-menu',
        'menu'            => 'upper-menu',
        'container'       => 'div',
        'container_class' => 'menu-{menu-slug}-container row',
        'container_id'    => '',
        'menu_class'      => 'menu',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id = "%1$s" class = "%2$s s-header__nav">%3$s</ul>',
        'depth'           => 0,
        'walker'          => '',
    );
    wp_nav_menu( $upper_menu );
 ?>


        </nav> <!-- end #nav-wrap -->

        <a class="header-menu-toggle" href="#0" title="Menu"><span>Menu</span></a>

    </header> <!-- Header End -->


