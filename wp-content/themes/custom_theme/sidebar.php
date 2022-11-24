<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom_theme
 */

if (!is_active_sidebar('sidebar-1')) {
  return;
}

?>

<aside id="secondary" class="widget-area sidebar">
  <!-- <?php dynamic_sidebar('sidebar-1'); ?> -->

  <div class="sidebar-item search-form">
    <h3 class="sidebar-title">Search</h3>
    <form action="" class="mt-3">
      <input type="text">
      <button type="submit"><i class="bi bi-search"></i></button>
    </form>
  </div><!-- End sidebar search formn-->

  <div class="sidebar-item recent-posts">
    <h3 class="sidebar-title">Recent Posts</h3>

    <div class="mt-3">
      <div class="row">
        <?php $args = array(
          'post_type' => 'post',
          'category_name' => 'news',
          'posts_per_page' => 2,
        );
        

        $the_query = new WP_Query($args);
        if ($the_query->have_posts()): ?>
        <?php while ($the_query->have_posts()):
            $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">
          <?php
            $news_image = get_the_post_thumbnail_url(get_the_ID());
            $_content_e = get_the_excerpt();
            //remove the paragraph tags
            $_content_e = strip_tags($_content_e);
          ?>

          <div class="post-item mt-3">
            <img src="<?php echo $news_image; ?>" class="img-fluid" alt="<?php echo $_content_e ?>">
            <div>
              <h4>
                <?php the_title(); ?>
              </h4>
              <time datetime="<?php the_date(); ?>">
                <?php the_date(); ?>
              </time>
              <?php $tags = get_the_tag_list();?>
            </div>
          </div><!-- End recent post item-->
          

        </a>

        <?php endwhile; ?>
      </div>
    </div>
    <?php endif; ?>

  </div><!-- End sidebar recent posts-->

  <div class="sidebar-item tags">
    <h3 class="sidebar-title">Tags</h3>
    <ul class="mt-3">
    <?php echo $tags;?>
    </ul>
  </div><!-- End sidebar tags-->

</aside><!-- #secondary -->