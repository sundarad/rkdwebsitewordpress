<?php
/* Template Name: media Center*/
?>
<?php get_header();?>
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="index.html"> <i class="bi bi-house-fill"></i> Home</a></li>
                <li>News</li>
            </ol>
            <h2>Our News</h2>

        </div>
    </section><!-- End Breadcrumbs -->
    <section id="news" class="recent-news-posts">

<div class="container" data-aos="fade-up">

    <header class="section-header">
        <h3>News & <strong>Events</strong></h3>
    </header>

    <div class="row">
        <?php $args = array(
            'post_type' => 'post',
            'category_name' => 'news',
            'posts_per_page' => -1,
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
                                $_content_e = get_the_excerpt();
                                //remove the paragraph tags
                                $_content_e = strip_tags($_content_e);
                                ?>
                                <div class="post-box">
                                    <div class="post-image">
                                        <img src="<?php echo $news_image;?>" class="img-fluid" alt="<?php echo $_content_e?>">

                                    </div>
                                    <div class="meta">
                                        <span class="post-date">
                                            <?php the_date(); ?>
                                        </span>
                                        <span class="post-author"><?php

                                            $author_id = get_the_author_meta('ID');
                                            $author_name = get_the_author_meta('display_name', $author_id);
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
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h3>Gallery Portfolio</h3>
            </header>
            <?php echo do_shortcode("[pfhub_portfolio id='2']"); ?>
        </div>

    </section><!-- End Portfolio Section -->
<?php get_footer();?>