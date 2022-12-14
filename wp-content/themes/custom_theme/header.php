<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="<?php echo get_template_directory_uri();?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
<!--    <link href="--><?php //echo get_template_directory_uri();?><!--/assets/vendor/aos/aos.css" rel="stylesheet">-->
    <link href="<?php echo get_template_directory_uri();?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/assets/css/style.css" rel="stylesheet">

    <!-- favicon links -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

    <header id="masthead" class="header header-style-stackcenter ">
        <!-- ttm-topbar-wrapper -->
        <div class="topbar-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="topbar-menu">
                            <ul class="top-contact text-left float-start">
                                <li><strong>Open Hours :</strong> <span class=""> Sun - Fri 10:00-5:00</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="topbar-right text-end">
                            <ul class="top-contact">
                                <li><strong><i class="bi bi-envelope"></i> <a href="mailto:info@rkdholdings.com.np"> info@rkdholdings.com.np</a></li>
                                <li><i class="bi bi-phone"></i> <a href="tel:061-544440"> 061-544440</a></li>
                            </ul>
                            <div class="ttm-social-links-wrapper list-inline">
                                <ul class="social-icons">
                                    <li><a href="https://www.facebook.com/rkdholdings"  target="_blank"><i class="bi bi-facebook me-2"></i></a>  </li>
                                    <li><a href="https://www.youtube.com/channel/UCxh0z_rSb870U6gZ235uOmQ" target="_blank"><i class="bi bi-youtube" ></i></a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--topbar-wrapper end -->
        <!-- header-wrap -->
        <div class="header-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-xs-12 col-sm-12 ">
                        <div class="widget-left clearfix">
                            <div class="info-widget">
                                <div class="info-widget-content"><p>For Emergency call</p><h2><a href="tel:061-544440">061-544440</a></h2> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- site-branding -->
                        <div class="site-branding">
                            <a class="home-link" href="index.html" title="rkd" rel="home">
                                <?php
                                the_custom_logo();

                                ?>
                            </a>
                        </div><!-- site-branding end -->
                    </div>
                    <div class="col-lg-3">
                        <div class="widget-right clearfix">
                            <div class="info-widget">
                            <a href="/special-offers/" target="_blank">
                                <div class="info-widget-content">
                                 <ul class="notification-drop">
                                        <li class="item"> 
                                                <i class="bt bi-bell" aria-hidden="true"></i>
                                                <span class="btn__badge pulse-button ">Offers</span>          
                                        </li>                                       
                                 </ul>
                             </div>
                             </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12"> 
                        <div id="stickable-header" class="stickable-header clearfix">
                                <div class="site-header-menu-inner stickable-header ">
                                    <div class="container ">
                                        <nav id=" navbar" class="navbar  d-flex justify-content-center">
                                            <?php
                                            wp_nav_menu(
                                                array(
                                                    'theme_location' => 'menu-1',
                                                    'menu_id'        => 'primary-menu',
                                                    'menu_class'=>'navbar',
                                                )
                                            );
                                            
                                            ?>
                                         
                                        </nav>
                                    </div>
                                    <!-- container end -->
                                </div> <!-- siteheader end -->                             
                        </div> <!-- stickable-header end -->
                    </div>  <!-- col end -->
                </div>
            </div>
        </div>
    </header>
    <header id="header-two" class="fixed-top ">
     <div class="container"><!-- container-start -->
          <div class="row"><!-- row-start -->
            <div class="col-lg-3">
               
               <a class="home-link" href="index.html" title="rkd" rel="home">
                                <?php
                                the_custom_logo();

                                ?>

                            </a>
               </div>
                <div>
                   <nav id="navbar" class="navbar order-last order-lg-0 ">
                <!-- <ul>
                  <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                  <li><a class="nav-link scrollto" href="#about">About</a></li>
                  <li><a class="nav-link scrollto" href="#subsidiary-company">subsidiary company</a></li>
                  <li><a class="nav-link scrollto" href="#team">board of directors</a></li>
                  <li><a class="nav-link scrollto " href="#main-program">our programs</a></li>
                  <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul> -->
                <?php
                                            wp_nav_menu(
                                                array(
                                                    'theme_location' => 'menu-1',
                                                    'menu_id'        => 'primary-menu',
                                                    'menu_class'=>'navbar',
                                                )
                                            );
                                           ?> 
                <i class="bi-list mobile-nav-toggle"></i>
              </nav> <!-- .navbar -->     
            </div>  <!-- col-end -->        
          </div><!-- row-end -->
     </div> <!-- container-end -->
 </header><!-- End Header -->

   
<script>
    document.addEventListener("DOMContentLoaded", function(){
		
		window.addEventListener('scroll', function() {
	       
			if (window.scrollY > 200) {
				document.getElementById('stickable-header').classList.add('fixed-top');
				// add padding top to show content behind navbar
				navbar_height = document.querySelector('.stickable-header').offsetHeight;
				document.body.style.paddingTop = navbar_height + 'px';
			} else {
			 	document.getElementById('stickable-header').classList.remove('fixed-top');
				 // remove padding top from body
				document.body.style.paddingTop = '0';
			} 
		});
	}); 
</script>
