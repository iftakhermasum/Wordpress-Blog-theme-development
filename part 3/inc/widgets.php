<?php
/**
 * all widgets registration
 * */


function widgetall(){

// owl sec widget
    register_sidebar( array(
        'name' => __('Index carousel Widgets area', 'iftakhertext'),
        'id' => 'carouselsec',
        'description' => 'This Index carousel Widgets area',
        'before_widget' => '<div class="heropstimgwrp">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ) );



// sidebar Widget box
    register_sidebar( array(
        'name' => __('sidebar Widget box 1', 'iftakhertext'),
        'id' => 'sidbrwbox1',
        'description' => 'This widgets only for sidebar area',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ) );
    register_sidebar( array(
        'name' => __('sidebar Widget box 2', 'iftakhertext'),
        'id' => 'sidbrwbox2',
        'description' => 'This widgets only for sidebar area',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ) );
    register_sidebar( array(
        'name' => __('sidebar Widget box 3', 'iftakhertext'),
        'id' => 'sidbrwbox3',
        'description' => 'This widgets only for sidebar area',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ) );
    register_sidebar( array(
        'name' => __('sidebar Widget box 4', 'iftakhertext'),
        'id' => 'sidbrwbox4',
        'description' => 'This widgets only for sidebar area',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ) );



// header top social widget box
    register_sidebar( array(
        'name' => __('Header Widget for social box', 'iftakhertext'),
        'id' => 'headwdgtsocial',
        'description' => 'This widgets only for Header Widget for social box',
        'before_widget' => '<div class="widgt_gwfsbox">',
        'after_widget' => '</div>',
    ) );


// footer widget boxes    
    register_sidebar( array(
        'name' => __('Footer Widgets one', 'iftakhertext'),
        'id' => 'ftrwdgts1',
        'description' => 'This widgets only for footer parts 1',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ) );
    register_sidebar( array(
        'name' => __('Footer Widgets two', 'iftakhertext'),
        'id' => 'ftrwdgts2',
        'description' => 'This widgets only for footer parts 2',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ) );
    register_sidebar( array(
        'name' => __('Footer Widgets three', 'iftakhertext'),
        'id' => 'ftrwdgts3',
        'description' => 'This widgets only for footer parts 3',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ) );


}
add_action( 'widgets_init', 'widgetall' );






