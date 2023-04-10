<?php

function sc_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'sc_instagram_link',[
        'default'       =>  ''
    ]);

    $wp_customize->add_setting( 'sc_facebook_link',[
        'default'       =>  ''
    ]);

    $wp_customize->add_setting( 'sc_twitter_link',[
        'default'       =>  ''
    ]);
    $wp_customize->add_setting( 'sc_copyrights_text',[
        'default'       =>  ''
    ]);


    $wp_customize->add_section( 'sc_footer_section',[
        'title'         =>  __( 'Social Media Settings', 'sketchcartel' ),
        'priority'      =>  30
    ]);
    $wp_customize->add_section( 'sc_footer_bottom_section',[
        'title'         =>  __( 'Copyrights Text', 'sketchcartel' ),
        'priority'      =>  30
    ]);


    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'sc_instagram_link_input',
        array(
            'label'          => __( 'Instagram Link', 'sketchcartel' ),
            'section'        => 'sc_footer_section',
            'settings'       => 'sc_instagram_link',
            'type'           =>'text'
        )
    ));

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'sc_facebook_link_input',
        array(
            'label'          => __( 'Facebook Link', 'sketchcartel' ),
            'section'        => 'sc_footer_section',
            'settings'       => 'sc_facebook_link',
            'type'           =>'text'
        )
    ));

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'sc_twitter_link_input',
        array(
            'label'          => __( 'Twitter Link', 'sketchcartel' ),
            'section'        => 'sc_footer_section',
            'settings'       => 'sc_twitter_link',
            'type'           =>'text'
        )
    ));$wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'sc_copyrights_text_input',
        array(
            'label'          => __( 'Copyrights Text here', 'sketchcartel' ),
            'section'        => 'sc_footer_bottom_section',
            'settings'       => 'sc_copyrights_text',
            'type'           =>'text'
        )
    ));


}
?>