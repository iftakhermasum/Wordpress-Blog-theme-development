<?php 
/***
*archive template
****/
get_header(); ?>



    

    <section class="mainbody">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

<br>
<br/>

                    <?php the_archive_title( '<h1 class="page-title">','</h1>' ); ?>                                 

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