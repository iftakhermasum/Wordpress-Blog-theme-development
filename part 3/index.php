<?php 
/***
*index template
****/
get_header(); ?>


    <section class="carouselsec">
        <div class="carouselwrap">
            <div class="owl-carousel owl-theme">
        
                <?php
                    $sldrqry = new WP_Query(array(
                        'post_type' => 'owlsldrscod',
                        'posts_per_page' => -1,
                        'order' => 'ASC', 
                        'order_by' => 'title' 
                    ));

                    if($sldrqry-> have_posts() ) { ?>            

                        <?php while ( $sldrqry-> have_posts()) : $sldrqry-> the_post() ; ?> 
                            
                        
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
                        ?>            

                <?php 
                    }
                ?>
    
            </div>    
        </div>
    </section>


    

    <section class="mainbody">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <div class="comentnumbr"> Total Comments : <span><?php commentCount(); ?></span> </div>              

                    <?php get_template_part('template/post_loop'); ?>
                    
                </div> <!-------col-md-8 end ------>




                <div class="col-md-4">
                    <div class="sidbarwidgetwrp">
                        <div class="sidbrwidgthdrow"></div>
                        <?php dynamic_sidebar('sidbrwbox1'); ?>
                    </div>

                    <div class="sidbarwidgetwrp">
                        <div class="sidbrwidgthdrow"></div>
                        <?php dynamic_sidebar('sidbrwbox2'); ?>
                    </div>

                    <div class="sidbarwidgetwrp">
                        <div class="sidbrwidgthdrow"></div>
                        <?php dynamic_sidebar('sidbrwbox3'); ?>
                    </div>

                    <div class="sidbarwidgetwrp">
                        <div class="sidbrwidgthdrow"></div>
                        <?php dynamic_sidebar('sidbrwbox4'); ?>
                    </div>                    

                </div>
            </div>
        </div>
    </section>



<?php 
    get_footer(); 
?>