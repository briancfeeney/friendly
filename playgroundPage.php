<?php global $more;?>

<?php 
/*
Template Name: Playground
*/
get_header(); ?>

<div class="col-lg-8 col-lg-offset-2 column">
	
	<section id="play">
				
				<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args= array('category_name' => 'Playground','paged' => $paged, 'posts_per_page' => 10); query_posts($args);?>
				
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

								<?php

								if ( has_post_thumbnail() ) {
									the_post_thumbnail();
								} else { } ?>

							<div class="entry-content">
								<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
							</div><!-- .entry-content -->

						</article><!-- #post -->
						</a>
						
					<?php endwhile; ?>

					<?php twentytwelve_content_nav( 'nav-below' ); ?>

				<?php else : ?>
					<article id="post-0" class="post no-results not-found">
							<!-- <h1 class="entry-title"><?php _e( 'No posts to display', 'twentytwelve' ); ?></h1>
							<h3 class="entry-date"><?php the_time('F j, Y') ?></h3> -->
						<div class="entry-content">
							<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'twentytwelve' ); ?></p>
							<?php get_search_form(); ?>
						</div><!-- .entry-content -->
					</article><!-- #post-0 -->

				<?php endif; // end have_posts() check ?>

	</section>
</div>

<?php get_footer(); ?>
