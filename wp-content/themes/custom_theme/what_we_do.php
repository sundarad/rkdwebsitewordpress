<?php /* Template Name: What We do */ ?>
<?php get_header();?>
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="/index.php">Home</a></li>
            <li>What we do</li>
        </ol>
        <h2>What we do</h2>

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
    <div class="container">
        <div class="row">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="col-lg-4">
                    <div class="what-we-do">
                        <div class="what-we-do-image">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(
                                    array( 150, 100 ),
                                    array( 'class' => 'img-fluid' )
                                ); ?>
                            </a>
                        </div>
                        <div class="what-we-do-title">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </div>
                        <div class="what-we-do-content">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>
<?php get_footer(); ?>
