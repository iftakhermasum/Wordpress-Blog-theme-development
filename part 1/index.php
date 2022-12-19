<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header id="headerarea" class="headertop">
                
        <div class="hambargerbox">
            <img src="<?php echo get_template_directory_uri(); ?>/img/hambarger.svg" alt="hambarger">
        </div>


        <div class="hedrlogosec">
            <div class="container">
                <div class="row">
                
                    <div class="col-md-4">
                        <div class="headsocialprt">
                            <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/fb.png"></a>
                            <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/twitr.png"></a>
                            <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/pintrst.png"></a>
                            <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/insta.png"></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <a class="logomain" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></a>
                    </div>
                    <div class="col-md-4">
                        <div class="headrsrchwrp">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/srch.png">
                            <form target="#">
                                <input type="text" name="search" placeholder="search">
                                <input type="submit" name="submit">
                            </form>
                        </div>    
                    </div>
                </div>
            </div>
        </div> 

        <div class="hedrmenusec">
            <div class="container">
                <div class="row">
                    <nav id="topnav" class="topnav">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Feature</a>
                                <ul>
                                    <li><a href="#">Children</a></li>
                                    <li><a href="#">Ladies</a></li>
                                    <li><a href="#">Men</a>                                        
                                        <ul>
                                            <li><a href="#">Men 1</a></li>
                                            <li><a href="#">Men 2</a></li>
                                            <li><a href="#">Men 3</a></li>
                                        </ul>                            
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Lifestyle</a>                                        
                                <ul>
                                    <li><a href="#">kou</a>
                                        <ul>
                                            <li><a href="#">kou 1</a></li>
                                            <li><a href="#">kou 2</a></li>
                                            <li><a href="#">kou 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">gou</a></li>
                                    <li><a href="#">fou</a>
                                        <ul>
                                            <li><a href="#">fou 1</a></li>
                                            <li><a href="#">fou 2</a></li>
                                            <li><a href="#">fou 3</a></li>
                                        </ul>
                                    </li>
                                </ul>                             
                            </li>
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Shop</a></li>
                        </ul>
                    </nav> 
                </div>
            </div>
        </div> 
                   
    </header>




    <section class="carouselsec">
        <div class="carouselwrap">
    
            <!-- Set up your HTML -->
            <div class="owl-carousel owl-theme">
                <div class="heropstimgwrp"> 
                    <img src="<?php echo get_template_directory_uri(); ?>/img/blg4.jpg" alt="bloggng image">
                    <div class="hropstcontwrp">
                        <h4>Loren ipsum</h4>
                        <a class="btn btn-readmor" href="<?php the_permalink(); ?>">Read more</a>
                        <div class="opacitylaoutblack"></div>
                    </div>
                </div>
                <div class="heropstimgwrp"> 
                    <img src="<?php echo get_template_directory_uri(); ?>/img/blg2.jpg" alt="bloggng image">
                    <div class="hropstcontwrp">
                        <h4>Loren ipsum</h4>
                        <a class="btn btn-readmor" href="<?php the_permalink(); ?>">Read more</a>
                        <div class="opacitylaoutblack"></div>
                    </div>
                </div>
                <div class="heropstimgwrp"> 
                    <img src="<?php echo get_template_directory_uri(); ?>/img/blg3.jpg" alt="bloggng image">
                    <div class="hropstcontwrp">
                        <h4>Loren ipsum</h4>
                        <a class="btn btn-readmor" href="<?php the_permalink(); ?>">Read more</a>
                        <div class="opacitylaoutblack"></div>
                    </div>
                </div>
                <div class="heropstimgwrp"> 
                    <img src="<?php echo get_template_directory_uri(); ?>/img/blg4.jpg" alt="bloggng image">
                    <div class="hropstcontwrp">
                        <h4>Loren ipsum</h4>
                        <a class="btn btn-readmor" href="<?php the_permalink(); ?>">Read more</a>
                        <div class="opacitylaoutblack"></div>
                    </div>
                </div>
                <div class="heropstimgwrp"> 
                    <img src="<?php echo get_template_directory_uri(); ?>/img/blg2.jpg" alt="bloggng image">
                    <div class="hropstcontwrp">
                        <h4>Loren ipsum</h4>
                        <a class="btn btn-readmor" href="<?php the_permalink(); ?>">Read more</a>
                        <div class="opacitylaoutblack"></div>
                    </div>
                </div>
                <div class="heropstimgwrp"> 
                    <img src="<?php echo get_template_directory_uri(); ?>/img/blg3.jpg" alt="bloggng image">
                    <div class="hropstcontwrp">
                        <h4>Loren ipsum</h4>
                        <a class="btn btn-readmor" href="<?php the_permalink(); ?>">Read more</a>
                        <div class="opacitylaoutblack"></div>
                    </div>
                </div>
            </div>
            <!-- end HTML -->
    
        </div>
    </section>



    <section class="mainbody">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <div class="blogbodywrap">
                        <div class="blogpostwrap">
                            <span class="smalltxt">Category</span>
                            <h2>Loren ipsum Loren ipsum</h2>
                            <div class="datewrp">
                                <span>By <a href="<?php the_permalink(); ?>">Author name</a></span>
                                <span> - <a href="<?php the_permalink(); ?>">December 16 2022</a></span>    
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/blg4.jpg" alt="thumbnail image" class="thumbimg">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                          
                            <a class="btn btn-readmor" href="<?php the_permalink(); ?>">read more</a>

                            <div class="commentbox">
                                <div class="comentnumbr"> <span>0</span> COMMENTS</div>
                                <div class="comsocshr">
                                    <span class="">SHARE:</span>
                                    <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/fb.png"></a>
                                    <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/twitr.png"></a>
                                    <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/pintrst.png"></a>
                                    <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/insta.png"></a>
                                </div>
                            </div>
                        </div>
                    </div>                    
                    <div class="blogbodywrap">
                        <div class="blogpostwrap">
                            <span class="smalltxt">Category</span>
                            <h2>Loren ipsum Loren ipsum</h2>
                            <div class="datewrp">
                                <span>By <a href="<?php the_permalink(); ?>">Author name</a></span>
                                <span> - <a href="<?php the_permalink(); ?>">December 16 2022</a></span>    
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/blg2.jpg" alt="thumbnail image" class="thumbimg">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <a class="btn btn-readmor" href="<?php the_permalink(); ?>">read more</a>

                            <div class="commentbox">
                                <div class="comentnumbr"> <span>0</span> COMMENTS</div>
                                <div class="comsocshr">
                                    <span class="">SHARE:</span>
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/fb.png"></a>
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/twitr.png"></a>
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/pintrst.png"></a>
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/insta.png"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blogbodywrap">
                        <div class="blogpostwrap">
                            <span class="smalltxt">Category</span>
                            <h2>Loren ipsum Loren ipsum</h2>
                            <div class="datewrp">
                                <span>By <a href="#">Author name</a></span>
                                <span> - <a href="#">December 16 2022</a></span>    
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/blg3.jpg" alt="thumbnail image" class="thumbimg">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <a class="btn btn-readmor" href="#">read more</a>

                            <div class="commentbox">
                                <div class="comentnumbr"> <span>0</span> COMMENTS</div>
                                <div class="comsocshr">
                                    <span class="">SHARE:</span>
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/fb.png"></a>
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/twitr.png"></a>
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/pintrst.png"></a>
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/insta.png"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="sidbarwidgetwrp">
                        <div class="sidbrwidgthdrow"></div>
                        <h2>Lorem Ipsum</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>

                    <div class="sidbarwidgetwrp">
                        <div class="sidbrwidgthdrow"></div>
                        <h2>Lorem Ipsum</h2>
                        <center><img src="<?php echo get_template_directory_uri(); ?>/img/follows.png"></center>
                    </div>

                    <div class="sidbarwidgetwrp">
                        <div class="sidbrwidgthdrow"></div>
                        <h2>Lorem Ipsum</h2>
                        <a class="tags" href="#">Category</a>
                        <a class="tags" href="#">Category</a>
                        <a class="tags" href="#">Category</a>
                        <a class="tags" href="#">Category</a>
                        <a class="tags" href="#">Category</a>
                        <a class="tags" href="#">Category</a>
                    </div>

                    <div class="sidbarwidgetwrp">
                        <div class="sidbrwidgthdrow"></div>
                        <h2>Lorem Ipsum</h2>                       
                        <a class="recentpstwrp" href="<?php the_permalink(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/blg3.jpg">
                            <h3>Lorem Ipsum is simply</h3>
                            <p>17 december 2022</p>
                        </a>                        
                        <a class="recentpstwrp" href="<?php the_permalink(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/blg3.jpg">
                            <h3>Lorem Ipsum is simply</h3>
                            <p>17 december 2022</p>
                        </a>                        
                        <a class="recentpstwrp" href="<?php the_permalink(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/blg3.jpg">
                            <h3>Lorem Ipsum is simply</h3>
                            <p>17 december 2022</p>
                        </a>
                        <a class="recentpstwrp" href="<?php the_permalink(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/blg3.jpg">
                            <h3>Lorem Ipsum is simply</h3>
                            <p>17 december 2022</p>
                        </a>
                        <a class="recentpstwrp" href="<?php the_permalink(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/blg3.jpg">
                            <h3>Lorem Ipsum is simply</h3>
                            <p>17 december 2022</p>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>





    <footer class="footerwrap">
        <div class="container">
            <div class="row footerrow">
                <div class="col-md-4">
                    <div class="widget_footer">
                        <img width="80" src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget_footer">
                        <h3>Header text</h3>
                        <p>Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard text ever since the 1500s</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget_footer">
                        <h3>Social links</h3>
                        <ul>
                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/fb.svg"></a></li>
                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.svg"></a></li>
                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.svg"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


<!----all js-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<?php wp_footer(); ?>
</body>
</html>
