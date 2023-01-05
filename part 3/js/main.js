jQuery(document).ready(function(){

// header search form
    jQuery(".headrsrchwrp img").click(function(){
        jQuery(".headrsrchwrp form").toggle();
    });


// owl carousel
    jQuery('.owl-carousel').owlCarousel({
        loop:true,
        nav:true,
        dots: true,
        //autoplay:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });


//  menu toggle  
    jQuery(".hambargerbox").click(function(){
        jQuery(".hedrmenusec").toggle();
    });



  });