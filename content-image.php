<?php
/**
 * The template for displaying posts in the Image post format
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php

			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			}
			else {
				the_content();
			}
			?>

	</article><!-- #post -->
