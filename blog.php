<?php global $more;?>

<?php 
/*
Template Name: Blog
*/
get_header(); ?>





<div class="col-lg-6 col-lg-offset-3">

	<section id="blog" class="main">
				
		<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args= array('category_name' => 'Blog','paged' => $paged, 'posts_per_page' => 10); query_posts($args);?>
	
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentytwelve_content_nav( 'nav-below' ); ?>

		<?php else : ?>
			<article id="post-0" class="post no-results not-found">
				<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'twentytwelve' ); ?></p>
			</article><!-- #post-0 -->

		<?php endif; // end have_posts() check ?>

	</section>
	
	<a href="http://brianfeeney.us/?feed=rss" class="rss"><img src="<?php echo get_template_directory_uri(); ?>/images/socialicons/rss.png"></a>

</div>

<?php get_footer(); ?>
