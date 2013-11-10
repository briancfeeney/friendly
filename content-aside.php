<?php
/**
 * The template for displaying posts in the Aside post format
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="entry-content">
				<a href="<?php the_field('link'); ?>">
				<h6><span class="title"><?php the_title(); ?></span>
					<span class="glyphicon glyphicon-link"></span>
				</h6>
				</a>
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
			</div><!-- .entry-content -->

	</article><!-- #post -->
