<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
                            <?php dynamic_sidebar('headwdgtsocial'); ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <a class="logomain" href="<?php echo home_url(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
                        </a>
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
                        <?php wp_nav_menu( array('menu_location'=>'main_menu', 'menu_id'=>'topnav_ul' ) ); ?>
                    </nav> 
                </div>
            </div>
        </div> 
                   
    </header>



