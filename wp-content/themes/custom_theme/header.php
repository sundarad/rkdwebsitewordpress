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

    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/front-assets/bootstrap-icons/bootstrap-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/front-assets/css/style.css" type="text/css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	    <header id="masthead" class="header header-style-stackcenter">
            <!-- ttm-topbar-wrapper -->
            <div class="topbar-wrapper">
                <div class="container">
                    <div class="topbar-content">
                        <ul class="top-contact text-left float-start">
                            <li><strong>Open Hours :</strong> <span class=""> Sun -Fri 10:00-5:00</span></li>
                        </ul>
                        <div class="topbar-right text-end">
                            <ul class="top-contact">
                                <li><strong><i class="bi bi-envelope"></i> <a href="mailto:info@rkdholdings.com.np"> info@rkdholdings.com.np</a></li>
                                <li><i class="bi bi-phone"></i> <a href="tel:061-544440"> 061-544440</a></li>
                            </ul>
                            <div class="ttm-social-links-wrapper list-inline">
                                <ul class="social-icons">
                                    <li><a href="#"><i class="bi bi-facebook"></i></a>
                                    </li>
                                    <li><a href="#"><i class="bi bi-twitter"></i></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        <div class="header-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="widget-left clearfix">
                            <div class="info-widget">
                                <div class="info-widget-content">
                                    <img src="assets/front-assets/images/info-left-arrow.png" alt="">
                                    <p>For Emergency call</p><h2>+977 9806555607</h2> </div>
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
                                <img src="assets/" alt="">
                                <div class="info-widget-content"><p>Request an</p> <h2>Appointment</h2> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <!-- ttm-stickable-header-w -->
                        <div id="stickable-header" class="stickable-header clearfix">
                            <div id="site-header-menu" class="site-header-menu">
                                <div class="site-header-menu-inner stickable-header">
                                    <div class="container">
                                        <!--site-navigation -->
                                        <div id="site-navigation" class="site-navigation">
                                            <div class="ttm-rt-contact">
                                                <!-- header-icons -->
                                                <div class="header-icons ">
                                                    <div class="header-icon header-search-link">
                                                        <a href="#" class="sclose"><i class="bi bi-search"></i></a>
                                                        <!-- <div class="ttm-search-overlay">
															<form method="get" class="ttm-site-searchform" action="#">
																<div class="w-search-form-h">
																	<div class="w-search-form-row">
																		<div class="w-search-input">
																			<input type="search" class="field searchform-s" name="s" placeholder="Type Word Then Enter...">
																			<button type="submit">
																				<i class="bi bi-search"></i>
																			</button>
																		</div>
																	</div>
																</div>
															</form>
														</div> -->
                                                    </div>
                                                </div><!-- header-icons end -->
                                            </div>
                                            <!-- <div class="ttm-menu-toggle">
												<input type="checkbox" id="menu-toggle-form">
												<label for="menu-toggle-form" class="ttm-menu-toggle-block">
													<span class="toggle-block toggle-blocks-1"></span>
													<span class="toggle-block toggle-blocks-2"></span>
													<span class="toggle-block toggle-blocks-3"></span>
												</label>
											</div> -->
                                            <nav id="site-navigation" class="main-navigation">
                                                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'custom_theme' ); ?></button>
		                                        <?php
		                                        wp_nav_menu(
			                                        array(
				                                        'theme_location' => 'menu-1',
				                                        'menu_id'        => 'primary-menu',
				                                        'menu_class'=>'navbar',
				                                        'menu_id'=>'navbar'
			                                        )
		                                        );
		                                        ?>
                                        </div><!-- site-navigation end-->
                                    </div>
                                </div>
                            </div>
                        </div><!-- ttm-stickable-header-w end-->
                    </div><!-- ttm-stickable-header-w end-->
                </div>
            </div>
        </div><!--ttm-header-wrap end -->
    </header>
        <!-- ttm-header-wrap -->
<!--		<div class="site-branding">-->
<!--			--><?php
//			the_custom_logo();
//			if ( is_front_page() && is_home() ) :
//				?>
<!--				<h1 class="site-title"><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></h1>-->
<!--				--><?php
//			else :
//				?>
<!--				<p class="site-title"><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></p>-->
<!--				--><?php
//			endif;
//			$custom_theme_description = get_bloginfo( 'description', 'display' );
//			if ( $custom_theme_description || is_customize_preview() ) :
//				?>
<!--				<p class="site-description">--><?php //echo $custom_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?><!--</p>-->
<!--			--><?php //endif; ?>
<!--		</div>-->
    <!-- .site-branding -->


		</nav><!-- #site-navigation -->
	</div><!-- #masthead -->
