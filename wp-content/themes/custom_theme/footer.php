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
                        <h3>About Us</h3>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                    </div>

                    <!-- <div class="footer-newsletter">
                      <h4>Our Newsletter</h4>
                      <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem.</p>
                      <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                      </form>
                    </div> -->

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
                        <div id="gridcontainer">
                            <?php
                            $counter = 1; //start counter

                            $grids = 2; //Grids per row

                            global $query_string; //Need this to make pagination work


                            /*Setting up our custom query (In here we are setting it to show 12 posts per page and eliminate all sticky posts) */
                            query_posts($query_string . '&caller_get_posts=1&posts_per_page=3');


                            if(have_posts()) :  while(have_posts()) :  the_post();
                            ?>
                            <?php
                            //Show the left hand side column
                            if($counter == 1) :
                            ?>
                            <div class="griditemleft">
                                <div class="griditemleftcontent">
                                    <div class="griditemleftcontentimage">
                                        <a href="<?php the_permalink(); ?>">

                                            <?php the_post_thumbnail(
                                                array( 150, 100 ),
                                                array( 'class' => 'img-fluid' )
                                            ); ?>
                                        </a>
                                    </div>
                                    <div class="griditemleftcontenttitle">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </div>
                                    <div class="griditemleftcontentdate">
                                        <?php the_time('F j, Y'); ?>
                                    </div>

                                    <?php
                                    //Show the right hand side column
                                    elseif($counter == $grids) :
                                        ?>
                                        <div class="griditemright">
                                            <div class="griditemrightcontent">
                                                <div class="griditemrightcontentimage">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_post_thumbnail(
                                                            array( 150, 100 ),
                                                            array( 'class' => 'img-fluid' )
                                                        ); ?>
                                                    </a>
                                                </div>
                                                <div class="griditemrightcontenttitle">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_title(); ?>
                                                    </a>
                                                </div>
                                                <div class="griditemrightcontentdate">
                                                    <?php the_time('F j, Y'); ?>
                                                </div>

                                            </div>
                                        </div>
                                        <?php

                                    endif;
                                    ?>
                                    <?php
                                    $counter++;
                                    endwhile;
                                    //Pagination can go here if you want it.
                                    endif;
                                    ?>
                                </div>

                            </div>
                        </div>


                    </ul>
                </div>
                <div class="col-lg-3">
                    <div class="footer-links">
                        <h3>Contact Us</h3>
                        <p>
                            Sabhagriha Chowk, Pokhara, Nepal <br>
                            <a href="tel:061544440"> <strong>Phone :</strong> 061544440</a><br>
                            <a href="mailto:info@rkdrealestate.com.np"> <strong>Email :</strong>info@rkdrealestate.com.np</a>
                        </p>
                    </div>
                    <div class="social-links">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="youtube"><i class="bi bi-youtube"></i></a>
                    </div>

                </div>

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


<?php wp_footer(); ?>
<!-- Vendor JS Files -->
<script src=<?php echo get_template_directory_uri();?>/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<!--<script src="--><?php //echo get_template_directory_uri();?><!--/assets/vendor/aos/aos.js"></script>-->
<script src="<?php echo get_template_directory_uri();?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?php echo get_template_directory_uri();?>/assets/js/main.js"></script>

</body>
</html>
