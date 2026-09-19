<!-- Footer ================================================== -->
    <footer class="s-footer">

        <div class="row s-footer__top">
            <div class="column">
                <ul class="s-footer__social">
                    <li><a href="#0"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                    <li><a href="#0"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#0"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                    <li><a href="#0"><i class="fab fa-vimeo-v" aria-hidden="true"></i></a></li>
                    <li><a href="#0"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#0"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="#0"><i class="fab fa-skype" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div> <!-- end footer__top -->

        <div class="row s-footer__bottom">

            <div class="large-6 tab-full column s-footer__info">
                <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
                    <?php dynamic_sidebar( 'sidebar1' ); ?>
                <?php else : ?>
                    <h3 class="h6"><?php esc_html_e( 'About Keep It Simple', 'html2wp' ); ?></h3>
                    <p>
                        <?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'html2wp' ); ?>
                    </p>
                <?php endif; ?>
            </div>

            <div class="large-6 tab-full column">
                <div class="row">
                    <div class="large-8 tab-full column">
                        <?php if ( is_active_sidebar( 'sidebar2' ) ) : ?>
                            <?php dynamic_sidebar( 'sidebar2' ); ?>
                        <?php else : ?>
                            <h3 class="h6"><?php esc_html_e( 'Photostream', 'html2wp' ); ?></h3>
                            <ul class="photostream group">
                                <li><a href="#0"><img alt="<?php esc_attr_e( 'thumbnail', 'html2wp' ); ?>" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/thumb.jpg' ); ?>"></a></li>
                                <li><a href="#0"><img alt="<?php esc_attr_e( 'thumbnail', 'html2wp' ); ?>" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/thumb.jpg' ); ?>"></a></li>
                            </ul>
                        <?php endif; ?>
                    </div>

                    <div class="large-4 tab-full column">
                        <?php if ( is_active_sidebar( 'sidebar3' ) ) : ?>
                            <?php dynamic_sidebar( 'sidebar3' ); ?>
                        <?php else : ?>
                            <h3 class="h6"><?php esc_html_e( 'Navigate', 'html2wp' ); ?></h3>
                            <ul class="s-footer__list s-footer-list--nav group">
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'html2wp' ); ?></a></li>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="ss-copyright">
                <span>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>.</span> 
                <span><?php esc_html_e( 'Design by', 'html2wp' ); ?> <a href="<?php echo esc_url( 'https://www.styleshout.com/' ); ?>" target="_blank" rel="noopener noreferrer">StyleShout</a></span>
            </div>

        </div> <!-- end footer__bottom -->

        <div class="ss-go-top">
            <a class="smoothscroll" title="<?php esc_attr_e( 'Back to Top', 'html2wp' ); ?>" href="#top">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0l8 9h-6v15h-4v-15h-6z"/></svg>
            </a>
        </div>

    </footer>

    <?php wp_footer(); ?>
</body>
</html>