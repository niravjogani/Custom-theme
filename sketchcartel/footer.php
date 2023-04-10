<footer class="page-block">
    <div class="footer-top">
        <div class="container">
                <div class="footer-content-main">
                    <div class="footer-content-inner">
                        <?php
                           dynamic_sidebar('sc_footer_gallery_sidebar');
                        ?>
                        <div class="footer-gellary">
                            <?php

                                $args = array(  
                                    'post_type' => 'sketch',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 16,
                                    'order' => 'ASC'
                                );

                                $loop = new WP_Query( $args ); 

                                while($loop->have_posts()){
                                    $loop->the_post();
                                    ?>
                                    <div class="sketch-img-inner-footer">
                                        <a href="#" title="<?php the_title(); ?>"><?php the_post_thumbnail( 'portfolio-img' ); ?></a>
                                        
                                    </div>
                                <?php } ?>
                        </div>
                    </div>
                    <div class="footer-content-inner">
                        <?php
                           dynamic_sidebar('sc_footer_about_sidebar');
                        ?>
                    </div>
                    <div class="footer-content-inner">
                            <?php
                            dynamic_sidebar('sc_footer_contact_sidebar');
                            ?>
                        <span></span>
                        <ul>
                            <li><a href="<?php echo get_theme_mod( 'sc_instagram_link' ); ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="<?php echo get_theme_mod( 'sc_facebook_link' ); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="<?php echo get_theme_mod( 'sc_twitter_link' ); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
        </div>
    </div>
</footer>
<?php get_template_part( 'footer-bottom' ); ?>
</body>
<?php wp_footer(); ?>