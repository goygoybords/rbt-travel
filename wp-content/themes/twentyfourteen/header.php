<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
    <html lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">  
        
        <title>Cebu RBT Travel and Tours</title> <!--insert your title here-->  
        <meta name="description" content="Cebu RBT Travel and Tours - Your affordable travel and tours"> <!--insert your description here-->  
        <meta name="author" content="KSK Tech"> <!--insert your name here-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--meta responsive-->
      	<!--START CSS--> 

        <!-- <link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" rel="stylesheet" />  -->
   		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">  <!--main-->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/grid.css"> <!--grid-->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsive.css"> <!--responsive-->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/rs-plugin/css/settings.css" media="screen" /> <!--rev slider-->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/showbizpro/css/settings.css" media="screen" /> <!--showbiz-->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css"> <!--animate-->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/superfish.css" media="screen"> <!--menu-->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/fancybox/jquery.fancybox.css"> <!--main fancybox-->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/fancybox/jquery.fancybox-thumbs.css"> <!--fancybox thumbs-->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/isotope.css"> <!--isotope-->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/flexslider.css"> <!--flexslider-->
        <!--END CSS-->
        <!--google fonts-->
        <link href='http://fonts.googleapis.com/css?family=Signika:400,300,600,700' rel='stylesheet' type='text/css'>
        <!--[if lt IE 9]>  
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>  
        <![endif]-->  
        <!--FAVICONS-->
        <link rel="shortcut icon" href="<?php bloginfo('template_url');?>/img/favicon/favicon.ico">
        <link rel="apple-touch-icon" href="<?php bloginfo('template_url');?>/img/favicon/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url');?>/img/favicon/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url');?>/img/favicon/apple-touch-icon-114x114.png">
        <!--END FAVICONS-->   
    </head>  
    <body id="startpage">
        <?php
            $options = array(
            'theme_location'  => '',
            'menu'            => 'Sidebar Menu',
            'container'       => '',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => '',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '%3$s',
            'depth'           => 0,
            'walker'          => ''
        ); 
        ?>
        <!--start header-->
        <header id="navigationmenu" class="fade-down animate1 navigationmenulight">
            <!--start container-->
            <div class="container">
                <!--start navigation-->
            	<div class="grid_12 gridnavigation">
                	<img class="logo fade-up animate4" alt="" src="<?php bloginfo('template_url');?>/img/logo.png">
                	<!--start navigation-->
                    <ul class="sf-menu" id="nav">
                        <?php wp_nav_menu($options); ?>
                       <!--  <li class="current yellow">
                            <span class="menufilter"></span>
                            <a href="index.html"><strong>HOME</strong></a>
                        </li>
                        <li class="orange">
                            <span class="menufilter"></span>
                            <a href="#"><strong>SERVICES</strong></a>
                            <ul>
                                <li><a href="tours.html">Our Tours</a></li>
                            </ul>
                        </li>
                        <li class="red">
            	           <span class="menufilter"></span>
                            <a href="gallery-3-column.html"><strong>GALLERY</strong></a>
                        </li>
                        <li class="green">
                        	<span class="menufilter"></span>
                            <a href="contact-with-text.html"><strong>CONTACT US</strong></a>
                        </li>	 -->
                    </ul>  
                    <!--end navigationmenu-->   
                </div><!--end navigation--> 
            </div><!--end container-->
            <div class="rightsearchclose">
            	<img alt="" src="<?php bloginfo('template_url');?>/img/header/rightsearch.png">
            </div>   
        </header><!--end header-->
        <?php get_search_form(); ?>
        
      
