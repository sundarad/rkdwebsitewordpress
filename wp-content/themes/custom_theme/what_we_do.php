<?php /* Template Name: What We do */ ?>
<?php get_header();?>
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
    <h2>What we do</h2>
        <ol>
            <li><a href="/index.php"> <i class="bi bi-house-fill"></i> Home</a></li>
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
            <h3>Ropeway Engineering</h3>
            <div class="icon">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/more-service/engineering.png" alt="">
            </div>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-4 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="600">
      <div class="service-item">
            
            <h4>Ropeway Construction</h4>
            <div class="icon">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/more-service/sketch.png" alt="">
            </div>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-4 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="700">
      <div class="service-item">
            <h4>Ropeway Consultant</h4>
            <div class="icon">
               <img src="<?php echo get_template_directory_uri();?>/assets/img/more-service/brainstorming.png"  alt="">
            </div>
        </div>
      </div><!-- End Service Item -->
      <div class="col-xl-4 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="500">
        <div class="service-item">
            <h4>Cablecar Equipment  Supply</h4>
            <div class="icon">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/more-service/machine.png"  alt="">
            </div>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-4 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="600">
      <div class="service-item">
            
            <h4>Investment Diversify</h4>
            <div class="icon">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/more-service/profits.png" alt="">
            </div>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-4 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="700">
      <div class="service-item">
            <h4>Detail Project Report(DPR)</h4>
            <div class="icon">
               <img src="<?php echo get_template_directory_uri();?>/assets/img/more-service/dashboard.png" alt="">
            </div>
        </div>
      </div><!-- End Service Item -->
      <div class="col-xl-4 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="500">
        <div class="service-item">
            <h3>Ecommerce</h3>
            <div class="icon">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/more-service/ecommerce.png" alt="">
            </div>
        </div>
      </div><!-- End Service Item -->
    </div>
      
      </div>
    </section>
<?php endif; ?>
<?php get_footer(); ?>
