<?php

/**
 * The main template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package recipes_blog
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php
	do_action( 'recipes_blog_breadcrumb' );

	if ( have_posts() ) :

		if ( is_home() && ! is_front_page() ) :
			?>
			<header>
				<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			</header>
			<?php
		endif;

		/* Start the Loop */
		while ( have_posts() ) :
			the_post();
			
			get_template_part( 'template-parts/content', get_post_type() );

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
