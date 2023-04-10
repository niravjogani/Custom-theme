<?php 

function sc_setup_theme(){

    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'admin-bar' );

    register_nav_menu( 'primary', __('Primary Menu', 'sketchcartel' ));
    
    add_image_size( 'portfolio-img', 546, 695, true );
}
function custom_meta_box_markup( $post ) {   
    /* Heading */
    $footer_block_title = get_post_meta( $post->ID, 'footer_block_title', true );
    ?>
    <label for="wporg_field">Box Main Title</label>
        <input type="text" placeholder="Enter Title" name="txtBoxTitle" id="txtBoxTitle" value="<?php echo $footer_block_title; ?>">
    <?php
    ?>
    <br>
    <br>
    <?php
    /* First Box */
    $footer_first_block_title = get_post_meta( $post->ID, 'footer_first_block_title', true );
    ?>
    <label for="wporg_field">First Box</label>
        <input type="text" placeholder="Enter Title" name="txtFirstBoxTitle" id="txtFirstBoxTitle" value="<?php echo $footer_first_block_title; ?>">
    <?php
    $footer_first_block_name = get_post_meta( $post->ID, 'footer_first_block_name', true );
    ?>
    <label for="wporg_field">First Box</label>
        <input type="text" placeholder="Enter Name" name="txtFirstBoxName" id="txtFirstBoxName" value="<?php echo $footer_first_block_name; ?>">
    <?php
    $footer_first_block_description = get_post_meta( $post->ID, 'footer_first_block_description', true );
    ?>
    <label for="wporg_field">First Box</label>
        <input type="text" placeholder="Enter Discription" name="txtFirstBoxDiscription" id="txtFirstBoxDiscription" value="<?php echo $footer_first_block_description; ?>">
    <?php
    ?>
    <br>
    <br>
    <?php
    /* Second Box */
    $footer_second_block_title = get_post_meta( $post->ID, 'footer_second_block_title', true );
    ?>
    <label for="wporg_field">Second Box</label>
        <input type="text" placeholder="Enter Title" name="txtSecondBoxTitle" id="txtSecondBoxTitle" value="<?php echo $footer_second_block_title; ?>">
    <?php
    $footer_second_block_name = get_post_meta( $post->ID, 'footer_second_block_name', true );
    ?>
    <label for="wporg_field">Second Box</label>
        <input type="text" placeholder="Enter Name" name="txtSecondBoxName" id="txtSecondBoxName" value="<?php echo $footer_second_block_name; ?>">
    <?php
    $footer_second_block_description = get_post_meta( $post->ID, 'footer_second_block_description', true );
    ?>
    <label for="wporg_field">Second Box</label>
        <input type="text" placeholder="Enter Discription" name="txtSecondBoxDiscription" id="txtSecondBoxDiscription" value="<?php echo $footer_second_block_description; ?>">
    <?php
    ?>
    <br>
    <br>
    <?php

    /* Third Box */
    $footer_third_block_title = get_post_meta( $post->ID, 'footer_third_block_title', true );
    ?>
    <label for="wporg_field">Third Box</label>
        <input type="text" placeholder="Enter Title" name="txtThirdBoxTitle" id="txtThirdBoxTitle" value="<?php echo $footer_third_block_title; ?>">
    <?php
    $footer_third_block_name = get_post_meta( $post->ID, 'footer_third_block_name', true );
    ?>
    <label for="wporg_field">Third Box</label>
        <input type="text" placeholder="Enter Name" name="txtThirdBoxName" id="txtThirdBoxName" value="<?php echo $footer_third_block_name; ?>">
    <?php
    $footer_third_block_description = get_post_meta( $post->ID, 'footer_third_block_description', true );
    ?>
    <label for="wporg_field">Third Box</label>
        <input type="text" placeholder="Enter Discription" name="txtThirdBoxDiscription" id="txtThirdBoxDiscription" value="<?php echo $footer_third_block_description; ?>">
    <?php
}

function add_custom_meta_box()
{   
    global $post;
    if ( '15' == $post->ID ) {
        add_meta_box("demo-meta-box", "About Bottom Boxes", "custom_meta_box_markup", "page", "advanced", "high", null);
    }
}
    function wporg_save_postdata( $post_id ) {
        if ( array_key_exists( 'txtBoxTitle', $_POST ) ) {
            update_post_meta(
                $post_id,
                'footer_block_title',
                $_POST['txtBoxTitle']
            );
        }

        if ( array_key_exists( 'txtFirstBoxTitle', $_POST ) ) {
            update_post_meta(
                $post_id,
                'footer_first_block_title',
                $_POST['txtFirstBoxTitle']
            );
        }

        if ( array_key_exists( 'txtFirstBoxName', $_POST ) ) {
            update_post_meta(
                $post_id,
                'footer_first_block_name',
                $_POST['txtFirstBoxName']
            );
        }

        if ( array_key_exists( 'txtFirstBoxDiscription', $_POST ) ) {
            update_post_meta(
                $post_id,
                'footer_first_block_description',
                $_POST['txtFirstBoxDiscription']
            );
        }

        if ( array_key_exists( 'txtSecondBoxTitle', $_POST ) ) {
            update_post_meta(
                $post_id,
                'footer_second_block_title',
                $_POST['txtSecondBoxTitle']
            );
        }

        if ( array_key_exists( 'txtSecondBoxName', $_POST ) ) {
            update_post_meta(
                $post_id,
                'footer_second_block_name',
                $_POST['txtSecondBoxName']
            );
        }

        if ( array_key_exists( 'txtSecondBoxDiscription', $_POST ) ) {
            update_post_meta(
                $post_id,
                'footer_second_block_description',
                $_POST['txtSecondBoxDiscription']
            );
        }

        if ( array_key_exists( 'txtThirdBoxTitle', $_POST ) ) {
            update_post_meta(
                $post_id,
                'footer_third_block_title',
                $_POST['txtThirdBoxTitle']
            );
        }

        if ( array_key_exists( 'txtThirdBoxName', $_POST ) ) {
            update_post_meta(
                $post_id,
                'footer_third_block_name',
                $_POST['txtThirdBoxName']
            );
        }

        if ( array_key_exists( 'txtThirdBoxDiscription', $_POST ) ) {
            update_post_meta(
                $post_id,
                'footer_third_block_description',
                $_POST['txtThirdBoxDiscription']
            );
        }
    }

function my_no_follow() {
    if ( '0' == get_option('blog_public') ) {
        echo "<meta name='robots' content='noindex,nofollow' />\n";
		echo "<meta name='Yahoo! Slurp' content='noindex,nofollow' />\n";
		echo "<meta name='googlebot' content='noindex,nofollow' />\n";
		echo "<meta name='Bingbot' content='noindex,nofollow' />\n";
    }
}
?>