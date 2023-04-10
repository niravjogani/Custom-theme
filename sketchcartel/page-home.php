<?php
/**
 * Template Name: Home Page Template
 */
get_header(); ?>
<section class="page-block">
    <div class="container">
        <div class="sketch-img-main">
            <?php

            $args = array(  
                'post_type' => 'sketch',
                'post_status' => 'publish',
                'posts_per_page' => 12,
                'order' => 'ASC'
            );

            $loop = new WP_Query( $args ); 

            while($loop->have_posts()){
                $loop->the_post();
                ?>
                <div class="sketch-img-inner">
                    <a href="#" title="<?php the_title(); ?>"><?php the_post_thumbnail( 'portfolio-img' ); ?></a>
                    
                    <a href="#"><?php the_title(); ?></a>
                </div>
            <?php } ?>
        </div>
    </div>
    <a href="#" class="bottom-to-top">
        <div class="bottom-to-top-inner">
            <i class="fas fa-chevron-up"></i>
        </div>
    </a>
</section>
<?php get_footer(); ?>
<?php wp_footer(); ?>