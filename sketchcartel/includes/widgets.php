<?php 

function sc_widgets(){
    register_sidebar([
        'name'          =>  __( 'Footer Gallery', 'sketchcartel' ),
        'id'            =>  'sc_footer_gallery_sidebar'
    ]);

    register_sidebar([
        'name'          =>  __( 'Footer About', 'sketchcartel' ),
        'id'            =>  'sc_footer_about_sidebar'
    ]);

    register_sidebar([
        'name'          =>  __( 'Footer Contact', 'sketchcartel' ),
        'id'            =>  'sc_footer_contact_sidebar'
    ]);
}

?>