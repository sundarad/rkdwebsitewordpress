<?php /* Template Name: Home Page */ ?>
<?php get_header();?>
    <section id="hero" class="hero carousel  carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
            <div class="container">
                <div class="row justify-content-center gy-6 align-items-center">
                    <div class="col-lg-12">
                        <h6>COOPTOGOVS</h6>
                        <h2>TIFL : A fund dedicated for entrepreneurs and innovative market disruptive <span> business ventures </span></h2>
                        <div class="d-flex justify-content-center more-btn">
                            <a href="/contact-us-2/" class="btn-get-started scrollto">Contact us</a>
                            <a href="https://www.youtube.com/watch?v=NJ_GYRPHIeY" class="glightbox btn-watch-video d-flex align-items-center ms-4" target="_blank"><i class="bi bi-play-circle"></i><span >Watch Video</span></a>
                        </div>
                    </div>
                    <!--                    <div class="col-lg-6 col-md-8">-->
                    <!--                        <img src="assets/img/intro-img.svg" alt="" class="img-fluid img">-->
                    <!--                    </div>-->

                </div>
            </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
            <div class="container">
                <div class="row justify-content-center gy-6 align-items-center">
                    <div class="col-lg-12">
                        <h6>COOPTOGOVS</h6>
                        <h2> We empower your financial <span>vision</span> </h2>
                        <div class="d-flex justify-content-center more-btn">
                            <a href="/contact-us-2/" class="btn-get-started">Contact us</a>
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center ms-3"><i class="bi bi-play-circle"></i><span >Watch Video</span></a>
                        </div>
                    </div>
                    <!--                    <div class="col-lg-6 col-md-8">-->
                    <!--                        <img src="assets/img/intro-img.svg" alt="" class="img-fluid img">-->
                    <!--                    </div>-->

                </div>
            </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
            <div class="container">
                <div class="row justify-content-center gy-6 align-items-center">
                    <div class="col-lg-12">
                        <h6>COOPTOGOVS</h6>
                        <h2>RKD Real Estate : Attain the highest ROI possible on your <span> Property</span> </h2>
                        <div class="d-flex justify-content-center more-btn">
                            <a href="/contact-us-2/" class="btn-get-started scrollto">Contact us</a>
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center ms-3"><i class="bi bi-play-circle"></i><span >Watch Video</span></a>
                        </div>
                    </div>
                    <!--                    <div class="col-lg-6 col-md-8">-->
                    <!--                        <img src="assets/img/intro-img.svg" alt="" class="img-fluid img">-->
                    <!--                    </div>-->

                </div>
            </div>
        </div><!-- End Carousel Item -->

        <a class="carousel-control-prev" href="#hero" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

    </section><!-- End Hero Section -->
<?php $args = array(
    'post_type' => 'post',
    'category_name' => 'services',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC'
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
                                    ?>
                                    <img src="<?php echo $service_image; ?>" alt="service image">
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
                                <p>  <?php the_excerpt(); ?></p>
                                <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            </div>
            <p class="text-extra text-center mt-5 mb-0">Dont hesitate, contact us for better heel services. <a href="/services/" target="_blank"> Explore all services</a></p>
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
                ?>
                <div class="col-lg-5 col-md-6">
                    <div class="about-img" data-aos="fade-right" data-aos-delay="100">
                        <img src="<?php echo $image_who_we_are;?>" alt="">
                    </div>
                </div>

                <div class="col-lg-7 col-md-6">
                    <div class="about-content" data-aos="fade-left" data-aos-delay="100">

                        <h2><?php echo $title_who_we_are;?></h2>
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
                <h3>Our Company</h3>
            </header>
            <div class="row clients-wrap justify-content-center clearfix aos-init aos-animate" data-aos="fade-up" >
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="client-logo"> <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" class="img-fluid" alt=""></div>
                </div>
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="client-logo"> <img src="<?php echo get_template_directory_uri();?>/assets/img/tifl.png" class="img-fluid" alt=""></div>
                </div>
                <div class="col-lg-4 col-sm-12 col-xs-12">
                    <div class=" client-logo" style="width: 440px;">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/bandipur.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-xs-12">
                    <div class="client-logo" style="width: 440px;">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/panchase.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-xs-12">
                    <div class="client-logo" style="width: 416px;">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/bizbazar.png" class="img-fluid" alt="">
                    </div>
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
                <h3>Investment By</h3>
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
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Projects</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-headset" style="color: #15be56;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Hours Of Support</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-people" style="color: #bb0852;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Hard Workers</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio features">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h3>Investment Portfolio</h3>
            </header>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>
                </div>
            </div>
            <?php $args = array(
                'post_type' => 'post',
                'category_name' => 'investment-portfolio',
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DESC'
            );

            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) : ?>
                <section id="services" class="services one">
                    <div class="container">
                        <div class="row gy-5">
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                                <?php

                                $portfolio_image = get_the_post_thumbnail_url(get_the_ID());
                                ?>
                                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                    <div class="portfolio-wrap">
                                        <img src="<?php echo $portfolio_image;?>" class="img-fluid" alt="">
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

            <ul class="nav nav-tabs row gy-4 d-flex" id="portfolio-flters">

                <li class="nav-item nav-link active show col-lg-3 col-sm-6 col-xs-12" data-bs-toggle="tab" data-bs-target="#tab-1">
                    <h4>All</h4>
                </li><!-- End Tab 1 Nav -->

                <li class="nav-item  nav-link  col-lg-3 col-sm-6 col-xs-12" data-bs-toggle="tab" data-bs-target="#tab-2">
                        <h4>Queen Tower</h4>
                </li><!-- End Tab 2 Nav -->

                <li class="nav-item nav-link col-lg-3 col-sm-6 col-xs-12" data-bs-toggle="tab" data-bs-target="#tab-3">
                        <h4>Cablecar</h4>
                </li><!-- End Tab 3 Nav -->


            </ul>

            <div class="tab-content">

                <div class="tab-pane active show" id="tab-1">

                    <?php $args = array(
                        'post_type' => 'post',
                        'category_name' => 'investment-portfolio',
                        'posts_per_page' => 3,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );

                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) : ?>
                        <section id="services" class="services one">
                            <div class="container">
                                <div class="row gy-5">
                                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    <div class="row gy-5 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                                        <?php

                                        $portfolio_image = get_the_post_thumbnail_url(get_the_ID());
                                        ?>
                                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                            <div class="portfolio-wrap">
                                                <img src="<?php echo $portfolio_image;?>" class="img-fluid" alt="">
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

                <div class="tab-pane" id="tab-2">
                    gg
                </div>
                <div class="tab-pane" id="tab-3">
                    <?php echo $by_asset_classes_content;?>
                </div>
                <div class="tab-pane" id="tab-4">
                    <?php echo $by_geography_content;?>
                </div>


            </div>

        </div>

        </div>

    </section><!-- End Portfolio Section -->

    <!-- ======= ceo Section ======= -->
    <section id="about" class="about">

        <div class="container" data-aos="fade-up">
            <div class="row">
                <?php
                $page_ceo= get_post(58);
                $ceo_title = $page_ceo->post_title;
                $ceo_content = $page_ceo->post_content;
                $ceo_image = get_the_post_thumbnail_url($page_ceo->ID);
                ?>
                <div class="col-lg-5 col-md-6">
                    <div class="about-img h-100" data-aos="fade-right" data-aos-delay="100">
                        <img src="<?php echo $ceo_image;?>" alt="" class="h-100">
                    </div>
                </div>

                <div class="col-lg-7 col-md-6">
                    <div class="about-content" data-aos="fade-left" data-aos-delay="100">
                        <h2><?php echo $ceo_title?></h2>
                        <p><?php echo $ceo_content?></p>
                        <div class="call-info">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End ceo Section -->
    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h3>Board of Directors</h3>
            </div>

            <div class="row">
                <?php $args = array(
                    'post_type' => 'post',
                    'category_name' => 'director',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );

                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) : ?>
                    <div class="container">
                        <div class="row">
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    <div class="col-lg-3 col-md-6 col-xs-12" data-aos="fade-up" data-aos-delay="100">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php
                                            $director_image = get_the_post_thumbnail_url(get_the_ID());

                                            ?>
                                        <div class="member">
                                                <img src="<?php echo $director_image;?>" class="img-fluid" alt="">
                                                <div class="member-info">
                                                    <div class="member-info-content">
                                                        <h4><?php the_title(); ?></h4>
                                                        <span><?php the_content();?></span>
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

    <!-- ======= Clients Section ======= -->
<!--    <section id="clients" class="clients">-->
<!--        <div class="container" data-aos="zoom-in">-->
<!---->
<!--            <header class="section-header">-->
<!--                <h3>Our Clients</h3>-->
<!--            </header>-->
<!---->
<!--            <div class="clients-slider swiper">-->
<!--                <div class="swiper-wrapper align-items-center">-->
<!--                    <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>-->
<!--                    <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>-->
<!--                    <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>-->
<!--                    <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>-->
<!--                    <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>-->
<!--                    <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>-->
<!--                    <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>-->
<!--                    <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>-->
<!--                </div>-->
<!--                <div class="swiper-pagination"></div>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </section>-->
    <!-- End Clients Section -->


    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="news" class="recent-news-posts">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h3>News</h3>
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
                                        ?>
                                    <div class="post-box">
                                        <div class="post-image">
                                                <img src="<?php echo $news_image;?>" class="img-fluid" alt="">

                                        </div>
                                        <div class="meta">
                                                <span class="post-date">
                                                    <?php the_date(); ?> /
                                                </span>
                                            <span class="post-author"><?php

                                                $author_id = get_the_author_meta('ID');
                                                $author_name = get_the_author_meta('display_name', $author_id);
                                                echo $author_name;
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