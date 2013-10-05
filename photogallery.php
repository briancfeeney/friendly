<?php global $more;?>

<?php 
/*
Template Name: Photo Gallery
*/
get_header(); ?>

<div class="col-sm-12">
	<ul class="list-unstyled sub-nav">
		<li><a href="/photos">List</a></li>
		<li><a href="/photo-gallery">Gallery</a></li>
	</ul>
</div>

<div class="col-sm-12">
	
				
		<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args= array('category_name' => 'Photography','paged' => $paged, 'posts_per_page' => 50, 'tax_query' => array(
			array('taxonomy' => 'post_format', 'field' => 'slug', 'terms' => 'post-format-image') )); query_posts($args);?>
	
	<section id="photo-gallery">
	
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail('large'); } ?>
					</a>
				</article><!-- #post -->
			<?php endwhile; ?>
			
	</section>

			<?php twentytwelve_content_nav( 'nav-below' ); ?>

		<?php endif; // end have_posts() check ?>

</div>



<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.masonry.min.js"></script>
<script>
		
		var $container = $('#photo-gallery');
		// initialize Masonry after all images have loaded  
		$container.imagesLoaded( function() {
		  $container.masonry(	{
			  itemSelector: 'article'
			});
		});

	
	$( window ).resize(function() {
	  	var $container = $('#photo-gallery');
		// initialize
		$container.masonry({
		  itemSelector: 'article'
		});
	});
	
</script>

<?php get_footer(); ?>