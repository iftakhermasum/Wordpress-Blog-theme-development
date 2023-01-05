<?php
/**
 * all functions added in this plage
 * */



/*======= Title Tag ===========*/ 
add_theme_support('title-tag');




/*======= Thumbnail ===========*/ 
add_theme_support( 'post-thumbnails', array('page', 'post', 'owlsldrscod'));
add_image_size( 'owlsldrscod', 600, 400, true );
add_image_size( 'post-thumbnails', 1200, 550, true );






