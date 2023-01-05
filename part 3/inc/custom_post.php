<?php
/**
 * all custom post function in this plage
 * */



/*======= Owl Carousel ===========*/ 
function owlcarou(){
    register_post_type( 'owlsldrscod', array(
        'labels' => array(
            'menu_name'=>__('Owl slider', 'iftakhertext'), 
            'name' =>__('Use this shortcode = [owlsldrscod]', 'iftakhertext'),
            'all_items' =>__('All items', 'iftakhertext'),
            'add_new' =>__('New slider add', 'iftakhertext'),
            'edit_item' =>__('Make edit', 'iftakhertext'),
            'not_found' =>__('Slider item not found', 'iftakhertext'),
            'featured_image'=>__('Here image', 'iftakhertext'),
            'remove_featured_image'=>__('You can remove image', 'iftakhertext')
        ),
        'public' => true,
        'menu_icon' => 'dashicons-admin-multisite',
        'menu_position' => 7,
        'supports' => array('title', 'thumbnail', 'editor'),
        'taxonomies' => array('category'),
    ));
}
add_action('init', 'owlcarou');