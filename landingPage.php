<?php global $more;?>

<?php 
/*
Template Name: Landing
*/
get_header(); ?>

<div class="container">
	<div class="col-lg-8 col-lg-offset-2">
		<section id="welcome">
			<p>Hi. I'm Brian Feeney, a <a href="/design">designer and web developer</a> living in Brooklyn, NY. I <a href="/blog">write</a>, take <a href="/photography">photos</a>, and <a href="/playground">play</a> with shapes and pixels and things.</p>
		</section>
	</div>
</div>

<section id="quote" class="visible-lg">
	<div class="col-sm-4 col-sm-offset-6">
		<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args= array('category_name' => 'Blog','paged' => $paged, 'posts_per_page' => 1, 'orderby' => 'rand', 'tax_query' => array(
			array('taxonomy' => 'post_format', 'field' => 'slug', 'terms' => 'post-format-quote') ) ); query_posts($args);?>

			<?php if ( have_posts() ) : ?>
			
				<?php while ( have_posts() ) : the_post(); ?>

					<a href="/quotes">
						<?php get_template_part( 'content', get_post_format() ); ?>
					</a>

				<?php endwhile; ?>
				
			<?php endif; // end have_posts() check ?>
	</div>	
</section>

<?php get_footer(); ?>