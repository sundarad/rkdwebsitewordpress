<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package custom_theme
 */

get_header();
?>
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
	<h2>Search</h2>
        <ol>
            <li><a href="/index.php"><i class="bi bi-house"></i> Home</a></li>
            <li>Search</li>
        </ol>
    

    </div>
</section><!-- End Breadcrumbs -->
	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'custom_theme' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
<section id="search" class="values">
<div class="container aos-init aos-animate" data-aos="fade-up">
  <div class="row">
	<div class="col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
    	<a href="" target="_blank">
	       <div class="box">
	     	  <button class="btn btn-get-started">Notice</button>
		      <h4>Ad cupiditate sed est odio</h4>
	       </div>
	    </a>
	</div>

	<div class="col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
	    <a href="" target="_blank">
	      <div class="box">
	     	 <button class="btn btn-get-started">News</button>
		    <h4>Ad cupiditate sed est odio</h4>
	      </div>
	    </a>
	</div>

	<div class="col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
	<a href="" target="_blank">
	      <div class="box">
	     	 <button class="btn btn-get-started">News</button>
		    <h4>Ad cupiditate sed est odio</h4>
	      </div>
	    </a>
	</div>

  </div>

</div>

</section>
	</main><!-- #main -->

<?php
get_footer();
