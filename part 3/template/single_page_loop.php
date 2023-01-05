<?php /****
*** 
**
*  Single page post loop 
**
***
*****/ ?>







<?php 
    if( have_posts()): 
        while (have_posts()): the_post();
?>
                    <div class="blogbodywrap">
                        <div class="blogpostwrap"> 
                            

                            <?php the_post_thumbnail('post-thumbnails'); ?>

                            <div class="snglpstcontwrp">
                                <div class="smalltxt"> 
                                    <a href="<?php the_permalink(); ?>"> <?php the_category(); ?> </a> 
                                </div> <!------- category ---------->

                                <h2> <?php the_title(); ?> </h2> <!------- titl ---------->

                                <div class="datewrp">
                                    <span>By <a href="<?php the_permalink(); ?>"><?php echo get_the_author(); ?></a></span>
                                    <span> - <?php the_date(); ?> </span>    
                                </div> <!------- date / author ---------->
       
                                <p> <?php the_content(); ?> </p> <!------- full contents ---------->                         
                            </div>
                        </div>
                    </div>                     

<?php 
    endwhile;
    endif;
?>

                    <br>
                    <br/>

                    <div class="nxtprvsclsdv"> 
                        <?php next_post_link(); ?>
                        <?php previous_post_link(); ?> 
                    </div> <!------- previous and next post link ----------> 

                    <br>
                    <br/>


                    <div class="commentswrbox">
                        <?php comments_template(); ?> 
                    </div> <!------- comment box ----------> 



<br>
<br/>            