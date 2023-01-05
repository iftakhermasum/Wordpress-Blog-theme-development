<?php
/**
 * all shortcode registration
 * **/




// Owl Carousel shortcode register

function owlcaruslsrtcod(){

    $owlsrtcd = new WP_Query( array(
        'post_type' => 'owlsldrscod',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'order_by' => 'title',
    )); 
    if( $owlsrtcd-> have_posts() ){ 
?>


    <section class="carouselsec">
        <div class="carouselwrap">
            <div class="owl-carousel owl-theme">
                

                    <?php while (  $owlsrtcd->have_posts()) :  $owlsrtcd->the_post(); ?>

                                <div class="heropstimgwrp"> 
                                    <?php echo the_post_thumbnail('owlsldrscod'); ?>
                                    <div class="hropstcontwrp">
                                        <h4><?php the_title(); ?></h4>
                                        <a class="btn btn-readmor" href="<?php the_permalink(); ?>">Read more</a>
                                        <div class="opacitylaoutblack"></div>
                                    </div>
                                </div>  
                <?php                 
                        endwhile;
                        wp_reset_postdata(); 


                 
                    } 
                ?>

            </div>
        </div>
    </section>

<?php
}
add_shortcode('owlsldrscod', 'owlcaruslsrtcod');

