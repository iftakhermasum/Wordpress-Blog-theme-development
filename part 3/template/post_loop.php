<?php /****
*** 
**
*  Index page post loop 
**
***
*****/ ?>


<?php 
    if( have_posts()): 
        while (have_posts()): the_post();
?>
                    <div class="blogbodywrap">
                        <div class="blogpostwrap"> 

                            
                            <div class="smalltxt"> 
                                <a href="<?php the_permalink(); ?>"> <?php the_category(); ?> </a> 
                            </div> <!------- category ---------->

                            <h2> <a href="<?php  the_permalink(); ?>"> <?php the_title(); ?> </a> </h2>

                            <div class="datewrp">
                                <span>By <a href="<?php the_permalink(); ?>"><?php echo get_the_author(); ?></a></span>
                                <span> - <?php the_date(); ?> </span>     
                            </div> <!------- date / author ---------->

                            <?php the_post_thumbnail('post-thumbnails'); ?>

                            <p> <?php the_excerpt(); ?> </p>                         
                          
                            <a class="btn btn-readmor" href="<?php the_permalink(); ?>">read more</a>

                            <div class="commentbox">
                                <a class="comentnumbr" href="<?php the_permalink(); ?>"> <span> <?php echo get_comments_number(); ?> </span> COMMENTS</a> <!------- comments count ---------->


                                <div class="socialmainwrp">
                                    <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
                                </div> <!------- social share ---------->
                            </div>

                        </div>
                    </div> 

                    

<?php 
    endwhile;
    else:
        _e( 'No Post Founded' );
    endif;

?>

<br>
<br/>

                    <center id="page_nav">
                        <?php 
                            if('iftakherpagin') { 
                                iftakherpagin(); 
                            } else{ 
                        ?>

                            <?php next_posts_link(); ?>
                            <?php previous_posts_link(); ?>

                        <?php 
                            } 
                        ?>
                    </center> <!------- page navigation ---------->

<br>
<br/>



                