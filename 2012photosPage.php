<?php global $more;?>

<?php 
/*
Template Name: Photography
*/
get_header(); ?>

<div id="sidebar">
	<?php get_sidebar(); // sidebar 1 ?>
</div>

<div id="main">
	
	<div class="photosPage">
	
		<div id="content">
		
			<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args= array('category_name' => 'Photography','paged' => $paged, 'posts_per_page' => 10); query_posts($args);?>
			
	    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="post">
				<div class="postContent">
					<?php the_content(__('(more...)')); ?>
				</div>
				<div class="postTitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>
				<div class="postDate"><?php the_time('F') ?> <?php the_time('d') ?>, <?php the_time('Y') ?></div>
			</div>
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>

	    <div style="clear: both;"></div>
		<div>
			<div class="older"><h4 class="pagination"><?php next_posts_link('Older') ?></h4></div>
			<div class="newer"><h4 class="pagination"><?php previous_posts_link('Newer') ?></h4></div>
		</div>
		
	</div>
	
</div>

<?php get_footer(); ?>