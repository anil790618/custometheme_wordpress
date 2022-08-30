
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Boocic</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="<?php echo get_template_directory_uri(); ?>/images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader --> 
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="index.html">Boocic</a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                            <?php
                                wp_nav_menu( array('theme_location'=>'primary-menu',
                                                    'menu_class'=>'nav') )             
                            ?>
                              <!-- <li class="active"> <a href="index.html">Home</a> </li>
                              <li> <a href="#about">About</a> </li>
                              <li> <a href="#service"> Service</a> </li>
                              <li> <a href="#screenshot">Screenshot</a> </li>
                              <li> <a href="#blog">Blog</a> </li>
                              <li> <a href="#contact">Contact us</a> </li>
                              <li class="mean-last"> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/search_icon.png" alt="#" /></a> </li> -->
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner --> 
      </header>