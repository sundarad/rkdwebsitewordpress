<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom_theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}

?>

<aside id="secondary" class="widget-area sidebar">
    <!-- <?php dynamic_sidebar( 'sidebar-1' ); ?> -->

<div class="sidebar-item search-form">
  <h3 class="sidebar-title">Search</h3>
  <form action="" class="mt-3">
    <input type="text">
    <button type="submit"><i class="bi bi-search"></i></button>
  </form>
</div><!-- End sidebar search formn-->

<div class="sidebar-item categories">
  <h3 class="sidebar-title">Categories</h3>
  <ul class="mt-3">
    <li><a href="#">Creative <span>(8)</span></a></li>
    <li><a href="#">Educaion <span>(14)</span></a></li>
  </ul>
</div><!-- End sidebar categories-->

<div class="sidebar-item recent-posts">
  <h3 class="sidebar-title">Recent Posts</h3>

  <div class="mt-3">

    <a href="">
    <div class="post-item mt-3">
       <img src="<?php echo get_template_directory_uri();?>/assets/img/news/blog-1.jpg" class="img-fluid" alt="">
      <div>
        <h4>Nihil blanditiis at in nihil autem</h4>
        <time datetime="2020-01-01">Jan 1, 2020</time>
      </div>
    </div><!-- End recent post item-->

    </a>
    <a href="">
    <div class="post-item">
       <img src="<?php echo get_template_directory_uri();?>/assets/img/news/blog-1.jpg" class="img-fluid" alt="">
      <div>
        <h4>Et dolores corrupti quae illo quod dolor</h4>
        <time datetime="2020-01-01">Jan 1, 2020</time>
      </div>
    </div><!-- End recent post item-->

    </a>
  </div>

</div><!-- End sidebar recent posts-->

<div class="sidebar-item tags">
  <h3 class="sidebar-title">Tags</h3>
  <ul class="mt-3">
    <li><a href="#">IT</a></li>
    <li><a href="#">Business</a></li>
    <li><a href="#">Marketing</a></li>
  </ul>
</div><!-- End sidebar tags-->

</aside><!-- #secondary -->
