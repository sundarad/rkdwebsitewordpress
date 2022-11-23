<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package custom_theme
 */

get_header();
?>
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="/index.php">Home</a></li>
                    <li> <?php the_title();?></li>
                </ol>
            </div>
        </section><!-- End Breadcrumbs -->
        <!-- ======= Blog Details Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-5">

                    <div class="col-lg-8">

                        <article class="blog-details">

                            <div class="post-img">

                               <?php
                               $image=get_the_post_thumbnail_url(get_the_ID());
                               ?>
                                <img src="<?php echo $image;?>" class="img-fluid" alt="">

                            </div>

                            <h3><?php the_title(); ?></h3>

                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i>
                                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                            <?php the_author(); ?>
                                        </a>
                                   </li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a>
                                            <?php the_date(); ?>
                                        </a></li>
                                </ul>
                            </div><!-- End meta top -->

                            <div class="content">
                                <?php the_content(); ?>

                            </div><!-- End post content -->

                            <div class="meta-bottom">
                                <i class="bi bi-folder"></i>
                                <ul class="cats"><?php the_category(); ?>
                                </ul>

                                <i class="bi bi-tags"></i>
                                <ul class="tags">
                                    <?php the_tags(); ?>
                                </ul>
                            </div><!-- End meta bottom -->

                        </article><!-- End blog post -->


                    </div>

                    <div class="col-lg-4">
                        <?php get_sidebar(); ?>
                    </div>
                </div>

            </div>
        </section><!-- End Blog Details Section -->





    </main><!-- End #main -->



<?php
get_footer();
