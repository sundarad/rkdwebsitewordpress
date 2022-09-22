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


            <div class="col-lg-7 about-company-img" ;">
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
    <section id="services" class="services one">
        <div class="container">
            <div class="row gy-5">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="col-xl-4 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="500">
                        <div class="service-item">
                            <div class="img">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail(
                                        array( 'class' => 'img-fluid' )
                                    ); ?>
                                </a>
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-bounding-box-circles"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                    <h3> <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a></h3>
                                </a>
                                <p>  <?php the_excerpt(); ?></p>
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

                                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                    <div class="member">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail(
                                                array( 150, 100 ),
                                                array( 'class' => 'img-fluid' )
                                            ); ?>
                                            <div class="member-info">
                                                <div class="member-info-content">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_title(); ?>
                                                    </a>
                                                    <span> <?php the_excerpt(); ?></span>
                                                    <div class="social">
                                                        <a href=""><i class="bi bi-twitter"></i></a>
                                                        <a href=""><i class="bi bi-facebook"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>

                            <?php endwhile; ?>
                        </div>
                    </div>
                <?php endif; ?>



            </div>

        </div>
    </section>
    <!-- End Team Section -->
<?php get_footer();?>