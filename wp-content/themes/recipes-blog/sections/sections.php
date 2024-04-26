<?php

/**
 * Render homepage sections.
 */
function recipes_blog_homepage_sections() {
	$recipes_blog_homepage_sections = array_keys( recipes_blog_get_homepage_sections() );

	foreach ( $recipes_blog_homepage_sections as $section ) {
		require get_template_directory() . '/sections/' . $section . '.php';
	}
}