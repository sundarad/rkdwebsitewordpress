<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package custom_theme
 */

get_header();
?>

	<main id="primary" class="site-main">
<!--        404 error-->
        <section id="error-section" class="text-center d-flex align-items-center">
            <div class="container d-flex justify-content-center">
                <div class="row">
                    <div class="col-lg-12">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/404.gif" class="d-block" alt="">
                        <a href="index.php">
                            <button class="btn-get-started">Go Back</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
	</main><!-- #main -->

<?php
get_footer();
