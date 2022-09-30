<?php /* Template Name: Featured Investments */ ?>
<?php get_header();?>
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="/index.php">Home</a></li>
            <li><?php
                echo get_the_title();
                ?></li>
        </ol>
        <h2>
            <?php
            echo get_the_title();
            ?>
        </h2>

    </div>
</section><!-- End Breadcrumbs -->
<?php $args = array(
    'post_type' => 'post',
    'category_name' => 'featured-investments',
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
            <header class="section-header">
                <h3>Featured Investment </h3>
            </header>
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
<?php get_footer(); ?>
