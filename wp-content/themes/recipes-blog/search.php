<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package recipes_blog
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php if ( have_posts() ) : ?>

		<header class="page-header">
			<h1 class="page-title">
				<?php
				/* translators: %s: search query. */
				printf( esc_html__( 'Search Results for: %s', 'recipes-blog' ), '<span>' . get_search_query() . '</span>' );
				?>
			</h1>
		</header>

		<?php
		/* Start the Loop */
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'search' );

		endwhile;

		do_action( 'recipes_blog_posts_pagination' );

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif;
	?>

</main>

<?php
if ( recipes_blog_is_sidebar_enabled() ) {
	get_sidebar();
}
get_footer();
