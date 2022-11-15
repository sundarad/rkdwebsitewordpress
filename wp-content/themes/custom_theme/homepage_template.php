<?php /* Template Name: Home Page */ ?>
<?php get_header();?>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-toggle="modal">
      <div class="modal-dialog">
            <div class="modal-content" >
                <div class="modal-header">
                  <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" title="Close"></button>
                </div>
               <div class="modal-body">
                     <!-- <img src="<?php echo get_template_directory_uri();?>/assets/img/ilami-program.jpg" width="100%"  alt=""> -->
                      <h3 class="text-center">Salami and Ilami promo video</h3>
                     <div class="embed-responsive embed-responsive-16by9">
                     <iframe width="100%" height="350" src="https://www.youtube.com/embed/_c23FGU1Cao" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>

	           </div>
            </div>
      </div>
</div>
  
    <!-- Hero Section start -->
    <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image:url(<?php echo get_template_directory_uri();?>/assets/img/bg1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">TIFL : A fund dedicated for entrepreneurs and innovative market disruptive <span> business ventures </span></h2>
                        <div class="d-flex justify-content-center more-btn  animate__animated animate__fadeInUp scrollto">
                            <a href="/contact-us-2/" class="btn-get-started scrollto">Contact us</a>
                            <a href="https://www.youtube.com/watch?v=IrX-Xd4gOHU" class="glightbox btn-watch-video d-flex align-items-center ms-4" target="_blank"><i class="bi bi-play-circle"></i><span >Watch Video</span></a>
                        </div>
              <!-- <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p> -->

            </div>
          </div>
        </div>

        <!-- Slide 2 -->
       <a href="https://drive.google.com/drive/folders/1cs94tJy2bu7aGuxl8UlfHjxdkbLSv3VJ" target="_blank">
       <div class="carousel-item" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/salamii.png)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown"> We empower your financial <span>vision</span> </h2>
                        <div class="d-flex justify-content-center more-btn animate__animated animate__fadeInUp">
                            <a href="/contact-us-2/" class="btn-get-started">Contact us</a>
                            <a href="https://www.youtube.com/watch?v=IrX-Xd4gOHU" class="glightbox btn-watch-video d-flex align-items-center ms-3"><i class="bi bi-play-circle"></i><span >Watch Video</span></a>
                        </div>
          
            </div>
          </div>
        </div>
       </a>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/bg1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">RKD Real Estate : Attain the highest ROI possible on your <span> Property</span> </h2>
                        <div class="d-flex justify-content-center more-btn animate__animated animate__fadeInUp">
                            <a href="/contact-us-2/" class="btn-get-started scrollto">Contact us</a>
                            <a href="https://www.youtube.com/watch?v=IrX-Xd4gOHU" class="glightbox btn-watch-video d-flex align-items-center ms-3"><i class="bi bi-play-circle"></i><span >Watch Video</span></a>
                        </div>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->
<?php $args = array(
    'post_type' => 'post',
    'category_name' => 'services',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'ASC'
);

$the_query = new WP_Query($args);
if ($the_query->have_posts()) : ?>
    <section id="services" class="services one">
        <div class="container">
            <div class="row gy-5">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="col-xl-4 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="500">
                        <div class="service-item">
                            <div class="img">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                    $service_image = get_the_post_thumbnail_url(get_the_ID());
                                    $_content_e = get_the_excerpt();
                                    //remove the paragraph tags
                                    $_content_e = strip_tags($_content_e);
                                    ?>
                                    <img src="<?php echo $service_image; ?>" alt="<?php echo $_content_e?>">
                                </a>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-bounding-box-circles"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3>
                                        <?php the_title(); ?>
                                    </h3>
                                </a>
                                <p>  <?php the_content(); ?></p>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
    <section id="about" class="about">

        <div class="container" data-aos="fade-up">
            <div class="row">
                <?php $page_who_we_are= get_post(43);
                $title_who_we_are=$page_who_we_are->post_title;
                $link_who_we_are= get_permalink(43);
                $content_who_we_are=$page_who_we_are->post_content;
                $image_who_we_are= get_the_post_thumbnail_url(43);
                $wh_content_e = get_the_excerpt($page_who_we_are);
                //remove the paragraph tags
                $wh_content_e = strip_tags($wh_content_e);
                ?>
                <div class="col-lg-5 col-md-6">
                    <div class="about-img" data-aos="fade-right" data-aos-delay="100">
                        <img src="<?php echo $image_who_we_are;?>" alt="<?php echo $wh_content_e?>">
                    </div>
                </div>

                <div class="col-lg-7 col-md-6">
                    <div class="about-content" data-aos="fade-left" data-aos-delay="100">
                        <header class="section-header" >
                            <h3 style="text-align:left;">Who <strong>we are</strong> </h3>  
                        </header>
                        <p><?php echo $content_who_we_are;?></p>

                    </div>
                </div>
            </div>
        </div>
        </div>

    </section><!-- End About Section -->
    <!--    <section id="why-us" class="why-us">-->
    <!--        <div class="container-fluid" data-aos="fade-up">-->
    <!--            --><?php //$page_why_us= get_post(51);
//            $title_why_us=$page_why_us->post_title;
//            $link_why_us= get_permalink(51);
//            $content_why_us=$page_why_us->post_content;
//            $image_why_us= get_the_post_thumbnail_url(51);
//            ?>
    <!--            <header class="section-header">-->
    <!--                <h3>--><?php //echo $title_why_us;?><!--</h3>-->
    <!--            </header>-->
    <!---->
    <!--            <div class="row">-->
    <!---->
    <!--                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">-->
    <!--                    <div class="why-us-img">-->
    <!--                        <img src="--><?php //echo $image_why_us;?><!--" alt="" class="img-fluid">-->
    <!--                    </div>-->
    <!--                </div>-->
    <!---->
    <!--                --><?php //echo $content_why_us;?>
    <!---->
    <!--            </div>-->
    <!---->
    <!--        </div>-->
    <!---->
    <!--    </section>-->
    <!-- End Why Us Section -->
   <section id="clients" class="clients">
       <div class="container aos-init aos-animate" data-aos="fade-up">
           <header class="section-header">
               <h3>Our  <strong>Company</strong></h3>
           </header>
           <div class="row clients-wrap justify-content-center clearfix aos-init aos-animate" data-aos="fade-up" >
               <div class="col-lg-12 col-sm-12 col-xs-12">
                    <a href="index.php">
                      <div class="client-logo"> <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" class="img-fluid" alt=""></div>
                    </a>
               </div>
               <div class="col-lg-12 col-sm-12 col-xs-12">
                    <a href="https://tifl.com.np/" target="_blank">
                      <div class="client-logo"> <img src="<?php echo get_template_directory_uri();?>/assets/img/tifl.png" class="img-fluid" alt=""></div>
                    </a>
               </div>
               <div class="col-lg-4 col-sm-12 col-xs-12">
                  <a href="https://bandipurcablecar.com.np/" target="_blank">
                    <div class=" client-logo" style="width: 440px;">
                       <img src="<?php echo get_template_directory_uri();?>/assets/img/bandipur.png" class="img-fluid" alt="">
                    </div>
                  </a>
               </div>
               <div class="col-lg-4 col-sm-12 col-xs-12">
                   <div class="client-logo" style="width: 440px;">
                       <img src="<?php echo get_template_directory_uri();?>/assets/img/panchase.png" class="img-fluid" alt="">
                   </div>
               </div>
               <div class="col-lg-4 col-sm-12 col-xs-12">
                  <a href="https://bizbazar.com.np/" target="_blank">
                    <div class="client-logo" style="width: 416px;">
                       <img src="<?php echo get_template_directory_uri();?>/assets/img/bizbazar.png" class="img-fluid" alt="">
                    </div>
                  </a>
               </div>
           </div>
        </div>
   </section>
    <!-- ======= Services Section ======= -->
    <!--        <section id="services" class="services section-bg">-->
    <!--            <div class="container" data-aos="fade-up">-->
    <!---->
    <!--                <header class="section-header">-->
    <!--                    <h3>Services</h3>-->
    <!--                    <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>-->
    <!--                </header>-->
    <!---->
    <!--                <div class="row g-5">-->
    <!---->
    <!--                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">-->
    <!--                        <div class="box">-->
    <!--                            <div class="icon" style="background: #fceef3;"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>-->
    <!--                            <h4 class="title"><a href="">Lorem Ipsum</a></h4>-->
    <!--                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">-->
    <!--                        <div class="box">-->
    <!--                            <div class="icon" style="background: #fff0da;"><i class="bi bi-card-checklist" style="color: #e98e06;"></i></div>-->
    <!--                            <h4 class="title"><a href="">Dolor Sitema</a></h4>-->
    <!--                            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!---->
    <!--                    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">-->
    <!--                        <div class="box">-->
    <!--                            <div class="icon" style="background: #e6fdfc;"><i class="bi bi-bar-chart" style="color: #3fcdc7;"></i></div>-->
    <!--                            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>-->
    <!--                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-md-6 col-lg-4 wow" data-aos="zoom-in" data-aos-delay="100">-->
    <!--                        <div class="box">-->
    <!--                            <div class="icon" style="background: #eafde7;"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>-->
    <!--                            <h4 class="title"><a href="">Magni Dolores</a></h4>-->
    <!--                            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!---->
    <!--                    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200"">-->
    <!--                    <div class=" box">-->
    <!--                        <div class="icon" style="background: #e1eeff;"><i class="bi bi-brightness-high" style="color: #2282ff;"></i></div>-->
    <!--                        <h4 class="title"><a href="">Nemo Enim</a></h4>-->
    <!--                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!---->
    <!--                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">-->
    <!--                    <div class="box">-->
    <!--                        <div class="icon" style="background: #ecebff;"><i class="bi bi-calendar4-week" style="color: #8660fe;"></i></div>-->
    <!--                        <h4 class="title"><a href="">Eiusmod Tempor</a></h4>-->
    <!--                        <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!---->
    <!--            </div>-->
    <!---->
    <!--            </div>-->
    <!--        </section>-->
    <!-- End Services Section -->
    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h3>Investment <strong>By</strong></h3>
            </header>
            <?php
            $by_sector=get_post(161);
            $by_sector_content=$by_sector->post_content;
            $by_sector_title=$by_sector->post_title;
            $by_business_platforms=get_post(104);
            $by_business_platforms_content=$by_business_platforms->post_content;
            $by_business_platforms_title=$by_business_platforms->post_title;
            $by_asset_classes=get_post(111);
            $by_asset_classes_content=$by_asset_classes->post_content;
            $by_asset_classes_title=$by_asset_classes->post_title;
            $by_geography=get_post(113);
            $by_geography_content=$by_geography->post_content;
            $by_geography_title=$by_geography->post_title;
            ?>
            <ul class="nav nav-tabs row gy-4 d-flex">

                <li class="nav-item col-lg-3 col-sm-6 col-xs-12">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                        <h4><?php echo $by_sector_title;?></h4>
                    </a>
                </li><!-- End Tab 1 Nav -->

                <li class="nav-item col-lg-3 col-sm-6 col-xs-12">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                        <h4><?php echo $by_business_platforms_title;?></h4>
                    </a>
                </li><!-- End Tab 2 Nav -->

                <li class="nav-item col-lg-3 col-sm-6 col-xs-12">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                        <h4><?php echo $by_asset_classes_title;?></h4>
                    </a>
                </li><!-- End Tab 3 Nav -->

                <li class="nav-item col-lg-3 col-sm-6 col-xs-12">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                        <h4><?php echo $by_geography_title;?></h4>
                    </a>
                </li><!-- End Tab 4 Nav -->


            </ul>

            <div class="tab-content">

                <div class="tab-pane active show" id="tab-1">
                    <?php echo $by_sector_content;?>
                </div>

                <div class="tab-pane" id="tab-2">
                    <?php echo $by_business_platforms_content;?>
                </div>
                <div class="tab-pane" id="tab-3">
                    <?php echo $by_asset_classes_content;?>
                </div>
                <div class="tab-pane" id="tab-4">
                    <?php echo $by_geography_content;?>
                </div>


            </div>

        </div>
    </section><!-- End Features Section -->


    <!-- ======= Counts Section ======= -->
<?php
$key_figures=get_post(373);
$key_figures_content=$key_figures->post_content;
?>
    <section id="counts" class="counts">
        <?php echo $key_figures_content;?>
  </section><!-- End Counts Section -->

    <!-- ======= ceo Section ======= -->
    <section id="about" class="about">

        <div class="container" data-aos="fade-up">
            <div class="row">
                <?php
                $page_ceo= get_post(58);
                $ceo_title = $page_ceo->post_title;
                $ceo_content = $page_ceo->post_content;
                $ceo_image = get_the_post_thumbnail_url($page_ceo->ID);
               $_content_e = get_the_excerpt($page_ceo->ID);
                //remove the paragraph tags
                $_content_e = strip_tags($_content_e);
                ?>
                <div class="col-lg-5 col-md-6">
                    <div class="about-img h-100" data-aos="fade-right" data-aos-delay="100">
                        <img src="<?php echo $ceo_image;?>" alt="<?php echo $_content_e?>" class="h-100">
                    </div>
                </div>

                <div class="col-lg-7 col-md-6">
                    <div class="about-content" data-aos="fade-left" data-aos-delay="100">
                        <header class="section-header">
                           <h3>Message<strong> from President</strong></h3>
                        </header>
                        <p><?php echo $ceo_content?></p>
                        <div class="call-info">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End ceo Section -->
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio features">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h3>Investment <strong>Portfolio</strong></h3>
            </header>
            <ul class="nav nav-tabs mt-3 d-flex justify-content-center" id="portfolio-flters">
                <li class="nav-item nav-link active show filter-active" data-bs-toggle="tab" data-bs-target="#tab-one">
                   All
                </li><!-- End Tab 1 Nav -->
                <li class="nav-item  nav-link" data-bs-toggle="tab" data-bs-target="#tab-two">
                   Real Estate
                </li><!-- End Tab 2 Nav -->

                <li class="nav-item nav-link " data-bs-toggle="tab" data-bs-target="#tab-three">
                   Hospitality and Tourism
                </li><!-- End Tab 3 Nav -->
            </ul>
            <!-- <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul> -->

            <div class="tab-content">

                <div class="tab-pane active show" id="tab-one">
                    <?php $args = array(
                        'post_type' => 'post',
                        'category_name' => 'investment-portfolio',
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );

                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) : ?>
                        <section id="services" class="services one">
                            <div class="container">
                                <div class="row gy-5 portfolio-container">
                                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            
                                        <?php

                                        $portfolio_image = get_the_post_thumbnail_url(get_the_ID());
                                        $_content_e = get_the_excerpt();
                                        //remove the paragraph tags
                                        $_content_e = strip_tags($_content_e);
                                        ?>
                                        <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                                            <div class="portfolio-wrap">
                                                <img src="<?php echo $portfolio_image;?>" class="img-fluid" alt="<?php echo $_content_e?>">
                                                <div class="portfolio-info">
                                                    <h4><?php the_title(); ?></h4>
                                                    <p><?php get_the_content();?></p>
                                                    <div class="portfolio-links">
                                                        <a href="<?php echo $portfolio_image?>" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                                                        <a href="<?php the_permalink(); ?>" title="More Details"><i class="bi bi-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                         </div>
                                        <?php endwhile; ?>
                                    </div>
                                </div>   
                        </section>
                    <?php endif; ?>
                </div>
                <!-- End Tab Content 1 -->

                <div class="tab-pane" id="tab-two">
                    <?php $args = array(
                        'post_type' => 'post',
                        'category_name' => 'realstate',
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );

                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) : ?>
                        <section id="services" class="services one">
                            <div class="container">
                                <div class="row gy-5 portfolio-container">
                                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                        <?php
                                        $portfolio_image = get_the_post_thumbnail_url(get_the_ID());
                                        $_content_e = get_the_excerpt();
                                        //remove the paragraph tags
                                        $_content_e = strip_tags($_content_e);
                                        ?>
                                        <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                                            <div class="portfolio-wrap">
                                                <img src="<?php echo $portfolio_image;?>" class="img-fluid" alt="<?php echo $_content_e?>">
                                                <div class="portfolio-info">
                                                    <h4><?php the_title(); ?></h4>
                                                    <p><?php get_the_content();?></p>
                                                    <div class="portfolio-links">
                                                        <a href="<?php echo $portfolio_image?>" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                                                        <a href="<?php the_permalink(); ?>" title="More Details"><i class="bi bi-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                      </div>
                                    </div>
                        </section>
                    <?php endif; ?>
                </div><!-- End Tab Content 2 -->

                <div class="tab-pane" id="tab-three">
                    <?php $args = array(
                        'post_type' => 'post',
                        'category_name' => 'hospitality-and-tourism',
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );

                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) : ?>
                        <section id="services" class="services one">
                            <div class="container">
                                <div class="row gy-5">
                                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                        <?php

                                        $portfolio_image = get_the_post_thumbnail_url(get_the_ID());
                                        $_content_e = get_the_excerpt();
                                        //remove the paragraph tags
                                        $_content_e = strip_tags($_content_e);
                                        ?>
                                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                            <div class="portfolio-wrap">
                                                <img src="<?php echo $portfolio_image;?>" class="img-fluid" alt="<?php echo $_content_e?>">
                                                <div class="portfolio-info">
                                                    <h4><?php the_title(); ?></h4>
                                                    <p><?php get_the_content();?></p>
                                                    <div class="portfolio-links">
                                                        <a href="<?php echo $portfolio_image?>" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                                                        <a href="<?php the_permalink(); ?>" title="More Details"><i class="bi bi-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php endwhile; ?>
                                    </div>
                               </div>
                        </section>
                    <?php endif; ?>
                </div><!-- End Tab Content 3 -->

                <div class="tab-pane" id="tab-four">
                    <?php $args = array(
                        'post_type' => 'post',
                        'category_name' => 'technology',
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );

                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) : ?>
                        <section id="services" class="services one">
                            <div class="container">
                                <div class="row gy-5">
                                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                        <?php

                                        $portfolio_image = get_the_post_thumbnail_url(get_the_ID());
                                        $_content_e = get_the_excerpt();
                                        //remove the paragraph tags
                                        $_content_e = strip_tags($_content_e);
                                        ?>
                                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                            <div class="portfolio-wrap">
                                                <img src="<?php echo $portfolio_image;?>" class="img-fluid" alt="<?php echo $_content_e?>">
                                                <div class="portfolio-info">
                                                    <h4><?php the_title(); ?></h4>
                                                    <p><?php get_the_content();?></p>
                                                    <div class="portfolio-links">
                                                        <a href="<?php echo $portfolio_image?>" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                                                        <a href="<?php the_permalink(); ?>" title="More Details"><i class="bi bi-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php endwhile; ?>
                                    </div>
                               </div>
                        </section>
                    <?php endif; ?>
                </div><!-- End Tab Content 3 -->




            </div>
        </div>
    </section><!-- End Features Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h3>Board of <strong>Directors</strong></h3>
            </div>

            <div class="row">
                <?php $args = array(
                    'post_type' => 'post',
                    'category_name' => 'director',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'ASC'
                );

                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) : ?>
                    <div class="container">
                        <div class="row">
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <div class="col-lg-3 col-md-6 col-xs-12" data-aos="fade-up" data-aos-delay="100" >
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        $director_image = get_the_post_thumbnail_url(get_the_ID());
                                        //get the excerpt
                                        $director_content_e = get_the_excerpt();
                                        //remove the paragraph tags
                                        $director_content_e = strip_tags($director_content_e);

                                        ?>
                                        <div class="member">
                                            <div class="member-img">
                                                <img src="<?php echo $director_image;?>" class="img-fluid" alt="<?php echo $director_content_e;?>">
                                            </div>
                                            <div class="member-info">
                                                <div class="member-info-content">
                                                    <h4><?php the_title(); ?></h4>
                                                    <?php
                                                    //get the post content
                                                    $director_content = get_the_content();
                                                    //remove the paragraph tags
                                                    $position = strip_tags($director_content);
                                                    ?>
                                                    <span><?php echo $position;?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            <?php endwhile; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </section><!-- End Team Section -->


    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="news" class="recent-news-posts">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h3>News & <strong>Events</strong></h3>
            </header>

            <div class="row">
                <?php $args = array(
                    'post_type' => 'post',
                    'category_name' => 'news',
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );

                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) : ?>
                    <div class="container">
                        <div class="row">
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <div class="col-lg-4 col-sm-6 col-xs-12" >
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        $news_image = get_the_post_thumbnail_url(get_the_ID());
                                        $_content_e = get_the_excerpt();
                                        //remove the paragraph tags
                                        $_content_e = strip_tags($_content_e);
                                        ?>
                                        <div class="post-box">
                                            <div class="post-image">
                                                <img src="<?php echo $news_image;?>" class="img-fluid" alt="<?php echo $_content_e?>">

                                            </div>
                                            <div class="meta">
                                                <span class="post-date">
                                                    <?php the_date(); ?>
                                                </span>
                                                <span class="post-author"><?php

                                                    $author_id = get_the_author_meta('ID');
                                                    $author_name = get_the_author_meta('display_name', $author_id);
                                                    ?> </span>
                                                <!--                                                <a href="--><!--">-->
                                                <!--                                                    -->
                                                <!--                                                </a>-->
                                                <div class="what-we-do-content">
                                                    <h3 class="post-title"><?php the_title(); ?></h3>

                                                </div>
                                                <a href="<?php the_permalink(); ?>" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            <?php endwhile; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
    </section><!-- End Recent Blog Posts Section -->



    </main><!-- End #main -->
<?php get_footer();?>

<script>
	$(document).ready(function(){
		$("#exampleModalCenter").modal('show');
    $('#exampleModalCenter').modal({backdrop: 'static', keyboard: false})  

	});
</script>
<script>
  $("#exampleModalCenter").on("show", function () {
  $("body").addClass("modal-open");
}).on("hidden", function () {
  $("body").removeClass("modal-open")
});
</script>