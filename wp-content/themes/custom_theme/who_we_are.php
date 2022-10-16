<?php
/* Template Name: Who We are*/
?>
<?php get_header();?>
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="/index.php">Home</a></li>
            <li>Who we are</li>
        </ol>
        <h2>Who we are</h2>

    </div>
</section><!-- End Breadcrumbs -->
<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">
        <?php
        $page_who_we_are= get_post(93);
        $title_who_we_are=$page_who_we_are->post_title;
        $link_who_we_are= get_permalink(93 );
        $content_who_we_are=$page_who_we_are->post_content;
        $image_who_we_are= get_the_post_thumbnail_url(93);
                    ?>
        <div class="row position-relative">


            <div class="col-lg-6 about-company-img" ;">
                <img src="<?php echo $image_who_we_are; ?>" class="img-fluid" alt="">
        </div>


                <p class="font-italic">
                    <?php echo $content_who_we_are; ?>
                </p>




    </div>
    <!-- End About Section -->
</section>
    <!-- ======= Alt Services Section ======= -->
<?php
$page_core_values= get_post(101);
$title_core_values=$page_core_values->post_title;
$link_core_values= get_permalink(101 );
$content_core_values=$page_core_values->post_content;
$image_core_values= get_the_post_thumbnail_url(101);

?>
    <!-- ======= core values Section ======= -->
    <section id="alt-services" class="alt-services">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-around gy-4">
                <div class="col-lg-6 img-bg" >
                    <img src="<?php echo $image_core_values; ?>" class="img-fluid" alt="">
                </div>
                <?php
                echo $content_core_values;
                ?>
            </div>

        </div>
    </section>
    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h3>We Creating Solutions For Your Organization</h3>

            </header>
            <?php
            $our_mission= get_post(133);
            $title_our_mission=$our_mission->post_title;
            $link_our_mission= get_permalink($our_mission->ID );
            $content_our_mission=$our_mission->post_content;
            $image_our_mission= get_the_post_thumbnail_url($our_mission->ID);
            $our_vision= get_post(135);
            $title_our_vision=$our_vision->post_title;
            $link_our_vision= get_permalink($our_vision->ID );
            $content_our_vision=$our_vision->post_content;
            $image_our_vision= get_the_post_thumbnail_url($our_vision->ID);
            $our_strategies= get_post(137);
            $title_our_strategies=$our_strategies->post_title;
            $link_our_strategies= get_permalink($our_strategies->ID );
            $content_our_strategies=$our_strategies->post_content;
            $image_our_strategies= get_the_post_thumbnail_url($our_strategies->ID);


            ?>
            <ul class="nav nav-tabs row gy-4 d-flex">

                <li class="nav-item col-lg-4 col-sm-4 col-xs-12">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                        <h4><?php echo $title_our_mission;?></h4>
                    </a>
                </li><!-- End Tab 1 Nav -->

                <li class="nav-item col-lg-4 col-sm-4 col-xs-12">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                        <h4><?php echo $title_our_vision;?></h4>
                    </a>
                </li><!-- End Tab 2 Nav -->

                <li class="nav-item col-lg-4 col-sm-4 col-xs-12">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                        <h4><?php echo $title_our_strategies;?></h4>
                    </a>
                </li><!-- End Tab 3 Nav -->
            </ul>

            <div class="tab-content">

                <div class="tab-pane active show" id="tab-1">
                    <div class="row gy-4">
                        <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">

                                <?php echo $content_our_mission;?>
                            </p>
                        </div>
                        <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                            <img src="<?php echo $image_our_mission;?>" alt="" class="img-fluid">
                        </div>
                    </div>
                </div><!-- End Tab Content 1 -->

                <div class="tab-pane" id="tab-2">
                    <div class="row gy-4">
                        <div class="col-lg-8 order-2 order-lg-1">
                            <p>
                                <?php echo $content_our_vision;?>
                            </p>
                        </div>
                        <div class="col-lg-4 order-1 order-lg-2 text-center">
                            <img src="<?php echo $image_our_vision;?>" alt="" class="img-fluid">
                        </div>
                    </div>
                </div><!-- End Tab Content 2 -->

                <div class="tab-pane" id="tab-3">
                    <div class="row gy-4">
                        <div class="col-lg-8 order-2 order-lg-1">
                            <p>
                                <?php echo $content_our_strategies;?>
                            </p>
                        </div>
                        <div class="col-lg-4 order-1 order-lg-2 text-center">
                            <img src="<?php echo $image_our_strategies;?>" alt="" class="img-fluid">
                        </div>
                    </div>
                </div><!-- End Tab Content 3 -->


            </div>

        </div>
    </section><!-- End Features Section -->

<?php $args = array(
    'post_type' => 'post',
    'category_name' => 'services',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC'
);

$the_query = new WP_Query($args);
if ($the_query->have_posts()) : ?>
    <br>
    <br>
    <section id="services" class="services two">
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
                                <a href="#" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            </div>
           
        </div>
    </section>
<?php endif; ?>
    <!-- End Alt Services Section -->
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




<?php get_footer();?>