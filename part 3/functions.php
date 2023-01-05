<?php
/**
 * all functions added in this plage
 * */






/*======= Theme enqueue file ===========*/ 
include_once('inc/enqueue.php');



/*======= Theme default file ===========*/ 
include_once('inc/dealult.php');



/*======= Theme menu opiton file ===========*/ 
include_once('inc/menu_opiton.php');



/*======= Theme custom post file ===========*/ 
include_once('inc/custom_post.php');



/*======= Theme shortcode file ===========*/ 
include_once('inc/shortcode.php');



/*======= Theme theme customize file ===========*/ 
include_once('inc/theme_customize.php');



/*======= Theme widgets file ===========*/ 
include_once('inc/widgets.php');



/*======= Pagination ===========*/ 
function iftakherpagin(){
    global $wp_query, $wp_rewrite;
    $pages = '';
    $max = $wp_query->max_num_pages;
    if(!$current = get_query_var( 'paged' )) $current = 1;
    $args['base'] = str_replace(999999, '%#%', get_pagenum_link( 999999 ));
    $args['total'] = $max;
    $args['current'] = $current;
    $total = 1;
    $args['prev_text'] = 'Prev';
    $args['next_text'] = 'Next';
    if($max > 1) echo '<div class="wp_pagenav">';
        if($total == 1 && $max > 1) $pages = '<p class="pagees"> Pages '. $current .'<span> of </span>'. $max .' </p>';
        echo $pages . paginate_links( $args );
        if($max > 1) echo '</div>';
}


//////////////////////--------------
function commentCount() {
    global $wpdb, $current_user;
    get_currentuserinfo();
    $userId = $current_user->ID;

    $count = $wpdb->get_var('
             SELECT COUNT(comment_ID) 
             FROM ' . $wpdb->comments. ' 
             WHERE user_id = "' . $userId . '"');
    echo $count . ' ';
}