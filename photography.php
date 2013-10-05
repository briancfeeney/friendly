<?php global $more;?>

<?php 
/*
Template Name: Photography
*/
get_header(); ?>

<div class="col-sm-12">
	<ul class="list-unstyled sub-nav">
		<li><a href="/photos">List</a></li>
		<li><a href="/photo-gallery">Gallery</a></li>
	</ul>
</div>

<div class="col-lg-8 col-lg-offset-2 column">
	
	<section id="photography">
				
		<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args= array('category_name' => 'Photography','paged' => $paged, 'posts_per_page' => 20); query_posts($args);?>
	
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
					<?php get_template_part( 'content', get_post_format() ); ?>
				</a>
			<?php endwhile; ?>

			<?php twentytwelve_content_nav( 'nav-below' ); ?>

		<?php else : ?>
			<article id="post-0" class="post no-results not-found">
					<h1 class="entry-title"><?php _e( 'No posts to display', 'twentytwelve' ); ?></h1>
					<h3 class="entry-date"><?php the_time('F j, Y') ?></h3>
				<div class="entry-content">
					<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'twentytwelve' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->
		<?php endif; // end have_posts() check ?>

	</section>

</div>

<?php get_footer(); ?>