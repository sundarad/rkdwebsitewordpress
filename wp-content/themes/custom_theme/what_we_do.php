<?php /* Template Name: What We do */ ?>
<?php get_header();?>
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
    <h2>What we do</h2>
        <ol>
            <li><a href="/index.php"> <i class="bi bi-house"></i> Home</a></li>
            <li>What we do</li>
        </ol>

    </div>
</section><!-- End Breadcrumbs -->
<?php $args = array(
    'post_type' => 'post',
    'category_name' => 'services',
    'posts_per_page' => 6,
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
          <h3>Our Core <strong>Services</strong></h3>
        </header>
            <div class="row gy-5">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="col-xl-4 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="500">
                        <div class="service-item">
                            <div class="img">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                    $services_image = get_the_post_thumbnail_url(get_the_ID());
                                    ?>
                                    <img src="<?php echo $services_image; ?>" alt="" class="img-fluid">

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
                            </a>
                        </div>
                    </div>

                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <section id="more-services">
         <div class="container aos-init aos-animate" data-aos="fade-up">

        <header class="section-header">
          <h3>More <strong>Services</strong></h3>
        </header>

    <div class="row gy-5">

      <div class="col-xl-4 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="500">
        <div class="service-item">
            <div class="icon">
                <i class="bi bi-house-door"></i>
            </div>
            <h3>Ropeway Engineering</h3>
            <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-4 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="600">
      <div class="service-item">
            <div class="icon">
                <i class="bi bi-joystick"></i>
            </div>
            <h4>ROPEWAY CONSTRUCTION</h4>
            <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-4 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="700">
      <div class="service-item">
            <div class="icon">
                <i class="bi bi-door-closed"></i>
            </div>
            <h4>ROPEWAY CONSULTANT</h4>
            <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
        </div>
      </div><!-- End Service Item -->
      <!-- <p class="text-extra text-center">Dont hesitate, contact us for better heel services. <a href="services.html"> Explore all services</a></p> -->

    </div>
      
  </div>
    </section>
<?php endif; ?>
<?php get_footer(); ?>
