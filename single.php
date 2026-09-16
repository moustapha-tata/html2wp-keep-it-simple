<?php get_header(); ?>
    <!-- Content
    ================================================== -->
    <div class="s-content">

        <div class="row">

            <div id="main" class="s-content__main large-8 column">
                <?php
                if(have_posts()):
                    while (have_posts()):
                        the_post(); ?>
                <article class="entry">

                    <header class="entry__header">

                        <h2 class="entry__title h1">
                            <?php the_title();?>
                        </h2>
                        

                        <div class="entry__meta">
                            <ul>
                                <li><?php the_date(); ?></li>
                                <li><a href="#" title="" rel="category tag"><?php the_category(", "); ?></a></li>
                                <li><?php the_author(); ?></li>
                            </ul>
                        </div>
                     
                    </header>
                    
                    <div class="entry__content">
                        
                        <?php the_content(); ?>
                    </div> 

                </article> <!-- end entry -->
                <?php                        
                    endwhile;
                else: echo "Ther are NO articless";
                endif;
                ?>
           </div> <!-- end main -->


<?php get_sidebar(); ?>

       </div> <!-- end row -->

   </div> <!-- end content-wrap -->


<?php get_footer(); ?>