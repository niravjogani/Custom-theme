<?php
get_header(); ?>
<section class="page-block">
    <div class="container">
        <div class="about-main">
            <div class="about-top">
                <?php the_content(); ?>
            </div>
            
            <div class="about-bottom">
                <div class="about-bottom-heading">
                <?php
                        $footer_block_title = get_post_meta( get_the_ID(), 'footer_block_title', true );
                    ?>
                    <h4><?php echo $footer_block_title; ?></h4>
                </div>
                <div class="about-bottom-box-main">
                    <div class="about-bottom-box">
                        <?php
                            $footer_first_block_title = get_post_meta( get_the_ID(), 'footer_first_block_title', true );
                            $footer_first_block_name = get_post_meta( get_the_ID(), 'footer_first_block_name', true );
                            $footer_first_block_description = get_post_meta( get_the_ID(), 'footer_first_block_description', true );
                        ?>
                            <h3><?php echo $footer_first_block_title; ?></h3>
                            <H4><?php echo $footer_first_block_name; ?></H4>
                            <p><?php echo $footer_first_block_description; ?></p>
                    </div>
                    <div class="about-bottom-box">
                        <?php
                            $footer_second_block_title = get_post_meta( get_the_ID(), 'footer_second_block_title', true );
                            $footer_second_block_name = get_post_meta( get_the_ID(), 'footer_second_block_name', true );
                            $footer_second_block_description = get_post_meta( get_the_ID(), 'footer_second_block_description', true );
                        ?>
                            <h3><?php echo $footer_second_block_title; ?></h3>
                            <H4><?php echo $footer_second_block_name; ?></H4>
                            <p><?php echo $footer_second_block_description; ?></p>
                    </div>
                    <div class="about-bottom-box">
                        <?php
                            $footer_third_block_title = get_post_meta( get_the_ID(), 'footer_third_block_title', true );
                            $footer_third_block_name = get_post_meta( get_the_ID(), 'footer_third_block_name', true );
                            $footer_third_block_description = get_post_meta( get_the_ID(), 'footer_third_block_description', true );
                        ?>
                            <h3><?php echo $footer_third_block_title; ?></h3>
                            <H4><?php echo $footer_third_block_name; ?></H4>
                            <p> <?php echo $footer_third_block_description; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
<?php wp_footer(); ?>