<?php /* Template Name: Home Page */ ?>
<?php get_header();?>
    <section id="hero" class="hero carousel  carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
            <div class="container">
                <div class="row justify-content-center gy-6 align-items-center">
                    <div class="col-lg-6">
                        <h6>Great Experience</h6>
                        <h2>Powered by Intellect<br>for Your <span>Business!</span></h2>
                        <div class="d-flex more-btn">
                            <a href="#about" class="btn-get-started scrollto">Contact us</a>
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center ms-4"><i class="bi bi-play-circle"></i><span >Watch Video</span></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <img src="assets/img/intro-img.svg" alt="" class="img-fluid img">
                    </div>

                </div>
            </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
            <div class="container">
                <div class="row justify-content-center gy-6 align-items-center">
                    <div class="col-lg-6">
                        <h6>Great Experience</h6>
                        <h2>Powered by Intellect<br>for Your <span>Business!</span></h2>
                        <div class="d-flex more-btn">
                            <a href="#about" class="btn-get-started scrollto">Contact us</a>
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center ms-3"><i class="bi bi-play-circle"></i><span >Watch Video</span></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <img src="assets/img/intro-img.svg" alt="" class="img-fluid img">
                    </div>

                </div>
            </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
            <div class="container">
                <div class="row justify-content-center gy-6 align-items-center">
                    <div class="col-lg-6">
                        <h6>Great Experience</h6>
                        <h2>Powered by Intellect<br>for Your <span>Business!</span></h2>
                        <div class="d-flex more-btn">
                            <a href="#about" class="btn-get-started scrollto">Contact us</a>
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center ms-3"><i class="bi bi-play-circle"></i><span >Watch Video</span></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <img src="assets/img/intro-img.svg" alt="" class="img-fluid img">
                    </div>

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
    <main id="main">
        <section id="main-services" class="main-services text-center " style="margin-top: -2rem ;">
            <div class="container" data-aos="fade-up">
                <div class="row">

                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">
                        <div class="card mb-3">
                            <div class="card-body">
                                <?php $page_finance= get_post(36);
                                $title_finance=$page_finance->post_title;
                                $link_finance= get_permalink(36);
                                $content_finance=$page_finance->post_content;
                                $image_finance= get_the_post_thumbnail_url(36);
                                ?>

                                <h4 class="card-title"><?php echo $title_finance;?></h4>
                                <img src="<?php echo $image_finance; ?>" class="card-img-bottom" alt="...">
                                <p class="card-text"><?php echo $content_finance;?></p>
                                <div class="icon-arrow"><a href="<?php echo $link_finance;?>"><i class="bi bi-chevron-right" ></i></a></div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                        <div class="card mb-3">
                            <div class="card-body">
                                <?php $page_analytical= get_post(36);
                                $title_analytical=$page_analytical->post_title;
                                $link_analytical= get_permalink(36);
                                $content_analytical=$page_analytical->post_content;
                                $image_analytical= get_the_post_thumbnail_url(36);
                                ?>

                                <h4 class="card-title"><?php echo $title_analytical;?></h4>
                                <img src="<?php echo $image_analytical; ?>" class="card-img-bottom" alt="...">
                                <p class="card-text"><?php echo $content_analytical;?></p>
                                <div class="icon-arrow"><a href="<?php echo $link_analytical;?>"><i class="bi bi-chevron-right" ></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                        <div class="card mb-3">
                            <div class="card-body">
                                <?php $page_other= get_post(36);
                                $title_other=$page_other->post_title;
                                $link_other= get_permalink(36);
                                $content_other=$page_other->post_content;
                                $image_other= get_the_post_thumbnail_url(36);
                                ?>

                                <h4 class="card-title"><?php echo $title_other;?></h4>
                                <img src="<?php echo $image_other; ?>" class="card-img-bottom" alt="...">
                                <p class="card-text"><?php echo $content_other;?></p>
                                <div class="icon-arrow"><a href="<?php echo $link_other;?>"><i class="bi bi-chevron-right" ></i></a></div>
                            </div>
                        </div>
                    </div>
                    <p class="text-extra">Dont hesitate, contact us for better heel services. <a href="#"> Explore all services</a></p>

                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= About Section ======= -->
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
                            <?php echo $content_who_we_are;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- End About Section -->
        <section id="why-us" class="why-us">
            <div class="container-fluid" data-aos="fade-up">
                <?php $page_why_us= get_post(51);
                $title_why_us=$page_why_us->post_title;
                $link_why_us= get_permalink(51);
                $content_why_us=$page_why_us->post_content;
                $image_why_us= get_the_post_thumbnail_url(51);
                ?>
                <header class="section-header">
                   <h3><?php echo $title_why_us;?></h3>
                </header>

                <div class="row">

                    <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="why-us-img">
                            <img src="<?php echo $image_why_us;?>" alt="" class="img-fluid">
                        </div>
                    </div>

                    <?php echo $content_why_us;?>

                </div>

            </div>

        </section><!-- End Why Us Section -->
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
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3>Services</h3>
                    <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
                </header>

                <div class="row g-5">

                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">
                        <div class="box">
                            <div class="icon" style="background: #fceef3;"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
                            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                        <div class="box">
                            <div class="icon" style="background: #fff0da;"><i class="bi bi-card-checklist" style="color: #e98e06;"></i></div>
                            <h4 class="title"><a href="">Dolor Sitema</a></h4>
                            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                        <div class="box">
                            <div class="icon" style="background: #e6fdfc;"><i class="bi bi-bar-chart" style="color: #3fcdc7;"></i></div>
                            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow" data-aos="zoom-in" data-aos-delay="100">
                        <div class="box">
                            <div class="icon" style="background: #eafde7;"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
                            <h4 class="title"><a href="">Magni Dolores</a></h4>
                            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200"">
                    <div class=" box">
                        <div class="icon" style="background: #e1eeff;"><i class="bi bi-brightness-high" style="color: #2282ff;"></i></div>
                        <h4 class="title"><a href="">Nemo Enim</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="box">
                        <div class="icon" style="background: #ecebff;"><i class="bi bi-calendar4-week" style="color: #8660fe;"></i></div>
                        <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                        <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                    </div>
                </div>

            </div>

            </div>
        </section><!-- End Services Section -->
        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h3>Investment Portfolio</h3>
                    <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
                </header>
                <ul class="nav nav-tabs row gy-4 d-flex">

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                            <i class="bi bi-binoculars color-cyan"></i>
                            <h4>Modinest</h4>
                        </a>
                    </li><!-- End Tab 1 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                            <i class="bi bi-box-seam color-indigo"></i>
                            <h4>Undaesenti</h4>
                        </a>
                    </li><!-- End Tab 2 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                            <i class="bi bi-brightness-high color-teal"></i>
                            <h4>Pariatur</h4>
                        </a>
                    </li><!-- End Tab 3 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                            <i class="bi bi-command color-red"></i>
                            <h4>Nostrum</h4>
                        </a>
                    </li><!-- End Tab 4 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5">
                            <i class="bi bi-easel color-blue"></i>
                            <h4>Adipiscing</h4>
                        </a>
                    </li><!-- End Tab 5 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-6">
                            <i class="bi bi-map color-orange"></i>
                            <h4>Reprehit</h4>
                        </a>
                    </li><!-- End Tab 6 Nav -->

                </ul>

                <div class="tab-content">

                    <div class="tab-pane active show" id="tab-1">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                                <h3>Modinest</h3>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                </ul>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                    culpa qui officia deserunt mollit anim id est laborum
                                </p>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                                <img src="assets/img/features-1.svg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content 1 -->

                    <div class="tab-pane" id="tab-2">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>Undaesenti</h3>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                    culpa qui officia deserunt mollit anim id est laborum
                                </p>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                </ul>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center">
                                <img src="assets/img/features-2.svg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content 2 -->

                    <div class="tab-pane" id="tab-3">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>Pariatur</h3>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                    culpa qui officia deserunt mollit anim id est laborum
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                                </ul>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center">
                                <img src="assets/img/features-3.svg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content 3 -->

                    <div class="tab-pane" id="tab-4">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>Nostrum</h3>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                    culpa qui officia deserunt mollit anim id est laborum
                                </p>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                </ul>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center">
                                <img src="assets/img/features-4.svg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content 4 -->

                    <div class="tab-pane" id="tab-5">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>Adipiscing</h3>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                    culpa qui officia deserunt mollit anim id est laborum
                                </p>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                </ul>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center">
                                <img src="assets/img/features-5.svg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content 5 -->

                    <div class="tab-pane" id="tab-6">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>Reprehit</h3>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                    culpa qui officia deserunt mollit anim id est laborum
                                </p>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                </ul>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center">
                                <img src="assets/img/features-6.svg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content 6 -->

                </div>

            </div>
        </section><!-- End Features Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container-fluid" data-aos="fade-up">

                <header class="section-header">
                    <h3>Why choose us?</h3>
                    <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
                </header>

                <div class="row">

                    <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="why-us-img">
                            <img src="assets/img/why-us.jpg" alt="" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="why-us-content">
                            <p>Molestiae omnis numquam corrupti omnis itaque. Voluptatum quidem impedit. Odio dolorum exercitationem est error omnis repudiandae ad dolorum sit.</p>
                            <p>
                                Explicabo repellendus quia labore. Non optio quo ea ut ratione et quaerat. Porro facilis deleniti porro consequatur
                                et temporibus. Labore est odio.

                                Odio omnis saepe qui. Veniam eaque ipsum. Ea quia voluptatum quis explicabo sed nihil repellat..
                            </p>

                            <div class="features clearfix" data-aos="fade-up" data-aos-delay="100">
                                <i class="bi bi-bookmarks" style="color: #f058dc;"></i>
                                <h4>Corporis dolorem</h4>
                                <p>Commodi quia voluptatum. Est cupiditate voluptas quaerat officiis ex alias dignissimos et ipsum. Soluta at enim modi ut incidunt dolor et.</p>
                            </div>

                            <div class="features clearfix" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-box-seam" style="color: #ffb774;"></i>
                                <h4>Eum ut aspernatur</h4>
                                <p>Molestias eius rerum iusto voluptas et ab cupiditate aut enim. Assumenda animi occaecati. Quo dolore fuga quasi autem aliquid ipsum odit. Perferendis doloremque iure nulla aut.</p>
                            </div>

                            <div class="features clearfix" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-card-checklist" style="color: #589af1;"></i>
                                <h4>Voluptates dolores</h4>
                                <p>Voluptates nihil et quis omnis et eaque omnis sint aut. Ducimus dolorum aspernatur. Totam dolores ut enim ullam voluptas distinctio aut.</p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section><!-- End Why Us Section -->

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

        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action" class="call-to-action">
            <div class="container" data-aos="zoom-out">
                <div class="row">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3 class="cta-title">Call To Action</h3>
                        <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#">Call To Action</a>
                    </div>
                </div>

            </div>
        </section><!--  End Call To Action Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">

                <div class="row feature-item">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                        <img src="assets/img/features-1.svg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0" data-aos="fade-left" data-aos-delay="150">
                        <h4>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h4>
                        <p>
                            Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati possimus ea. Quas molestiae perspiciatis occaecati qui rerum. Deleniti quod porro sed quisquam saepe. Numquam mollitia recusandae non ad at et a.
                        </p>
                        <p>
                            Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti. Odit qui asperiores ea corporis deserunt veritatis quidem expedita perferendis. Qui rerum eligendi ex doloribus quia sit. Porro rerum eum eum.
                        </p>
                    </div>
                </div>

                <div class="row feature-item mt-5 pt-5">
                    <div class="col-lg-6 wow fadeInUp order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="assets/img/features-2.svg" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-right" data-aos-delay="150">
                        <h4>Neque saepe temporibus repellat ea ipsum et. Id vel et quia tempora facere reprehenderit.</h4>
                        <p>
                            Delectus alias ut incidunt delectus nam placeat in consequatur. Sed cupiditate quia ea quis. Voluptas nemo qui aut distinctio. Cumque fugit earum est quam officiis numquam. Ducimus corporis autem at blanditiis beatae incidunt sunt.
                        </p>
                        <p>
                            Voluptas saepe natus quidem blanditiis. Non sunt impedit voluptas mollitia beatae. Qui esse molestias. Laudantium libero nisi vitae debitis. Dolorem cupiditate est perferendis iusto.
                        </p>
                        <p>
                            Eum quia in. Magni quas ipsum a. Quis ex voluptatem inventore sint quia modi. Numquam est aut fuga mollitia exercitationem nam accusantium provident quia.
                        </p>
                    </div>

                </div>

            </div>
        </section><!-- End Features Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3>Investment Portfolio</h3>
                    <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
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

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/app1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/app1.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/app2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/app2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/app3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 2</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/app3.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/app2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 2</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/app2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/app3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 2</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/app3.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/app1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 3</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/app1.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- End Portfolio Section -->


        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h3>Board of Directors</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <img src="assets/img/team-1.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Walter White</h4>
                                    <span>Chief Executive Officer</span>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <img src="assets/img/team-2.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Sarah Jhonson</h4>
                                    <span>Product Manager</span>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <img src="assets/img/team-3.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>William Anderson</h4>
                                    <span>CTO</span>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="member">
                            <img src="assets/img/team-4.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Amanda Jepson</h4>
                                    <span>Accountant</span>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-in">

                <header class="section-header">
                    <h3>Our Clients</h3>
                </header>

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Clients Section -->


        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="news" class="recent-blog-posts">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3>News</h3>
                </header>

                <div class="row">
                    <?php
                    $args = array( 'numberposts' => '3' );
                    $recent_posts = wp_get_recent_posts( $args );
                    foreach( $recent_posts as $recent ){
                        echo '<div class="col-md-4"><div class="post-box"><div class="post-img"><img src="' . get_the_post_thumbnail_url($recent["ID"]) . '" class="img-fluid" alt=""></div><div class="post-info"><h4><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </h4><time datetime="2020-01-01">' . get_the_date( 'F j, Y', $recent["ID"] ) . '</time><p>' .   $recent["post_excerpt"].'</p><div class="read-more"><a href="' . get_permalink($recent["ID"]) . '"><i class="bi bi-arrow-right"></i> Read More</a></div></div></div></div> ';
                    }
                    wp_reset_query();
                    ?>
                </div>
     </section><!-- End Recent Blog Posts Section -->



    </main><!-- End #main -->



</main><!-- End #main -->
<?php get_footer();?>