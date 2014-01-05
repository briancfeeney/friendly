<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<section id="single">
				
		<?php while ( have_posts() ) : the_post(); ?>
		
			<?php if (in_category( 'Portfolio' )) { ?>
				
				<div class="container">
				
			
				<div class="row">
			
					<div class="col-sm-4">
						
						<section class="project-info">
						
							<h1 class="entry-title"><?php the_title(); ?></h1>
				
							<?php if (get_field('description')): ?>
							<div class="project-description">
								<p><?php the_field('description'); ?></p>
							</div>
							<?php endif; ?>
						
							<h4>Client</h4>
							<h3><?php the_field('client'); ?></h3>
						
							<h4>Work</h4>
							<h3><?php the_field('work'); ?></h3>
						
							<h4>Delivered</h4>
							<h3><?php the_field('delivery_date'); ?></h3>
						
							<?php if (get_field('website')): ?><a href="<?php the_field('website'); ?>" class="website link">Visit the Site</a></button><?php endif; ?>
							
						</section>
							
					</div>
					<div class="col-sm-7 col-sm-offset-1">
						<section class="the-design">
							<?php

							$images = get_field('images');

							if( $images ): ?>
							        <ul class="list-unstyled">
							            <?php foreach( $images as $image ): ?>
							                <li>
							                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							                    <p><?php echo $image['caption']; ?></p>
							                </li>
							            <?php endforeach; ?>
							        </ul>
							    </div>

							<?php endif; ?>
						</section>
					</div>
				</div>
				
				</div>
				

				
			<?php }elseif(in_category( 'Photography' )){ ?>
				
				<div class="col-sm-12">
					<ul class="list-unstyled sub-nav">
						<li><a href="/photos">List</a></li>
						<li><a href="/photo-gallery">Gallery</a></li>
					</ul>
				</div>

				<div class="col-lg-8 col-lg-offset-2 column">
					<section id="photography">
						<?php get_template_part( 'content', get_post_format() ); ?>
						<h6><?php the_time('F j, Y') ?></h6>
					</section>
				</div>
				
			<?php }elseif(in_category( 'Playground' )){ ?>

				<div class="col-lg-6 col-lg-offset-3 column">
					<section id="playground">
						<?php get_template_part( 'content', get_post_format() ); ?>
					</section>
				</div>
		
			<?php }else{ ?>
				
				<!-- div class="col-lg-12">
					<?php // get_sidebar(); ?>
				</div> -->
				
				<div class="col-lg-6 col-lg-offset-3">
					<section id="blog" class="main">
						<?php get_template_part( 'content', get_post_format() ); } ?>
					</section>
				</div>

		<?php endwhile; // end of the loop. ?>
					
	</section>

</div>

<?php get_footer(); ?>