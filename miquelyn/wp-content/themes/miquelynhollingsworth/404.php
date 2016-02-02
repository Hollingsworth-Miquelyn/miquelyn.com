<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Miquelyn_Hollingsworth
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section id="error">
				<header class="section-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'miquelynhollingsworth' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p class="lead text-center"><?php esc_html_e( 'It looks like nothing was found at this location. Try clicking the button below.', 'miquelynhollingsworth' ); ?></p>
					<p class="text-center">
						<a href="/" class="btn btn-lg btn-default ">Miquelyn Hollingsworth <i class="fa fa-home"></i></a>
					</p>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
