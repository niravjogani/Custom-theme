<!DOCTYPE html>
<html dir="ltr" lang="en-US" class="html-mt-0">

<head>
    <title><?php bloginfo('name') ?> <?php wp_title(); ?> <?php if(is_front_page()){ echo "|"; bloginfo('description');} ?></title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />

  <!-- Stylesheets
	============================================= -->
 <?php wp_head(); ?>

  <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
    <header class="page-block">
            <div class="container">
                <div class="nav">
                    <input type="checkbox" id="nav-check">
                    <div class="nav-header">
                    <?php
                        if( has_custom_logo()){
                            the_custom_logo();
                            }else{
                            ?>
                                <a href="<?php echo home_url('/');?>" class="standard-logo"><?php get_bloginfo('name'); ?>Sketch Cartel</a>
                            <?php
                        }
                    ?>
                    </div>
                    <?php 
            
                    if(has_nav_menu('primary')){
                    wp_nav_menu([
                        'theme_location'  => 'primary',
                        'container'       => false,
                        'fallback_cb'     => false,
                        'depth'           => 4,
                        'menu_class'      => 'nav-links',
                    ]);
                    }

                ?>
                    <div class="nav-btn">
                        <label for="nav-check">
                        <span></span>
                        <span></span>
                        <span></span>
                        </label>
                    </div>
                </div>
            </div>
    </header>