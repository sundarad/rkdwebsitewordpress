<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom_theme
 */

?>
<!-- footer Start -->
<footer id="footer" class="section-bg">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-info">
                        <?php $post_about= get_post(82);
                        $post_about_content = $post_about->post_content;
                        $post_about_title = $post_about->post_title;
                        ?>
                        <h3><?php echo $post_about_title  ?></h3>
                        <p><?php echo $post_about_content  ?></p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-links">
                        <h3>Useful Links</h3>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-2',
                                'menu_id'        => 'primary-menu',
                                'menu_class'=>'footer-links',
                            )
                        );
                        ?>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h3>Latest News</h3>
                    <ul class="footer-news">

                        <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 2,
                            'category_name' => 'news',
                        );?>
                        <?php $the_query = new WP_Query( $args ); ?>
                        <?php if ( $the_query->have_posts() ) : ?>
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="footer-news-img">
                                            <?php the_post_thumbnail(
                                                array( 'class' => 'img-fluid' )
                                            ); ?>
                                        </div>
                                        <div class="footer-news-content">
                            <span class="content-meta"><?php echo get_the_date( 'F j, Y' );
                                ?></span>
                                            <h4><?php the_title(); ?></h4>
                                        </div>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php else : ?>
                            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php endif; ?>

                    </ul>
                </div>
                <div class="col-lg-3">
                    <div class="footer-links">
                        <h3>Contact Us</h3>
                        <p>Sabhagriha Chowk, Pokhara, Nepal <br>
                            <a href="tel:061544440"> <strong>Phone :</strong> 061544440</a><br>
                            <a href="mailto:info@rkdrealestate.com.np"> <strong>Email : </strong>info@rkdrealestate.com.np</a>
                        </p>
                    </div>
                    <div class="social-links">
                        <a href="https://www.facebook.com/rkdholdings" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.youtube.com/channel/UCxh0z_rSb870U6gZ235uOmQ"  target="_blank" class="youtube"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>RKD</strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="#">RKD</a>
        </div>
    </div>
</footer><!-- End  Footer -->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


<?php wp_footer(); ?>
<!-- Vendor JS Files -->
<script src="<?php echo get_template_directory_uri();?>/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<!--<script src="--><?php //echo get_template_directory_uri();?><!--/assets/vendor/aos/aos.js"></script>-->
<script src="<?php echo get_template_directory_uri();?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<!--<script src="--><?php //echo get_template_directory_uri();?><!--/assets/vendor/swiper/swiper-bundle.min.js"></script>-->
<!--<script src="--><?php //echo get_template_directory_uri();?><!--/assets/vendor/php-email-form/validate.js"></script>-->

<!-- Template Main JS File -->
<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery-3.3.1.min"></script>

<script src="<?php echo get_template_directory_uri();?>/assets/js/main.js"></script>

</body>
</html>
