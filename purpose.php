<?php global $more;?>

<?php 
/*
Template Name: Purpose
*/
get_header(); ?>


	
	<section id="purpose">
	
		<section id="purpose-intro">
			<h1>/purpose</h1>
			<div class="col-sm-6 col-sm-offset-3">
				<p>There are a lot of places on the internet to put up your shoes, but this one here is mine. Social networks have spread like mad. I like that, but I also wish more people had their own place. Visiting a friend’s Facebook page often feels like reading an auto-bio on a public tac board. But a personal web page — that’s a home. There’s beer in the fridge in summer, and hot cocoa on the table in winter. I have a Facebook account, too, of course. This is brianfeeney.us.</p>
				<p>My doors are always open here. You’re always invited.</p>
			</div>
		</section>
		
		<section id="purpose-work">
			
			<h1><a href="/design">WORK</a></h1>

				<div class="col-sm-6 col-sm-offset-3">
					<p>Design for print and Web, as well as a front-end developing. I am currently employed full time by <a href="http://familiar-studio.com">Familiar Studio</a>, and I also take freelance work.</p>
				</div>

			

				<div class="col-sm-10 col-sm-offset-1">
					<ul class="list-unstyled">
						<div class="row">
				
							<?php
							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
							$args= array('category_name' => 'Portfolio','paged' => $paged, 'posts_per_page' => 4, 'orderby' => 'rand'); query_posts($args);?>

								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
									
									<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
									
								<div class="col-xs-6 col-sm-3 col-lg-3">
								 <li>
									<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
										<div class="work-thumb" style="background-image: url('<?php echo $image[0]; ?>')"></div>
										
									</a>
								 </li>
								</div>

								<?php endwhile; else: ?>
								<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
								<?php endif; ?>
				
						</div>
					</ul>
				</div>

			
		</section>
		
		<section id="purpose-notes">
			<h1><a href="/blog">NOTES</a></h1>
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-2 col-sm-offset-2">
						<a href="/articles">Articles</a>
						<p>Longer form writing mostly about design and art and culture and whatnot.</p>
					</div>
					<div class="col-sm-2">
						<a href="/asides">Asides</a>
						<p>Short links and thoughts.</p>
					</div>
					<div class="col-sm-2">
						<a href="/quotes">Quotes</a>
						<p>Words other people said. Smart stuff about life.</p>
					</div>
					<div class="col-sm-2">
						<a href="/blog">All</a>
						<p>All of the things.</p>
					</div>

				</div>
				<!-- <div id="centeredmenu">
					<ul class="list-unstyled">
						<li><a href="/articles">Articles</a></li>
						<li><a href="/asides">Asides</a></li>
						<li><a href="/quotes">Quotes</a></li>
						<li><a href="/blog">All</a></li>
						<li class="evergreen"><a href="/evergreen">Evergreen</a></li>
					</ul>
				</div> -->
			</div>
		</section>
		
		<section id="purpose-photos">
			<h1><a href="/photos">PHOTOS</a></h1>
			
			<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args= array('category_name' => 'Photography','paged' => $paged, 'orderby' => 'rand', 'posts_per_page' => 9, 'tax_query' => array(
				array('taxonomy' => 'post_format', 'field' => 'slug', 'terms' => 'post-format-image') )); query_posts($args);?>

			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
					
					<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'twentytwelve' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
					<div class="col-xs-12 col-sm-6 col-lg-4 purpose-photo" style="background-image: url('<?php echo $image[0]; ?>')"></div>
					</a>
					
				<?php endwhile; ?>


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
		
		<section id="purpose-play">
			<h1><a href="/play">PLAY</a></h1>
			
			<p>Sometimes I do things for no reason.</p>
			
			<div class="container">
				<div class="row">

					<?php
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args= array('category_name' => 'Playground','paged' => $paged, 'posts_per_page' => 4, 'orderby' => 'rand'); query_posts($args);?>
			
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
					
							<div class="col-sm-3 col-xs-6">
								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'twentytwelve' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
										<div class="entry-content">
											<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } else { ?>
											<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
											<?php } ?>
										</div><!-- .entry-content -->
									</a>
								</article><!-- #post -->
							</div>
						
						<?php endwhile; ?>

					<?php endif; // end have_posts() check ?>
			
				</div>
			</div>
			
		</section>
		
		<section id="purpose-end">
			
			<div class="container">
			<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="wufoo">
					<head>
						<!-- Meta Tags -->
						<meta charset="utf-8">
						<meta name="generator" content="Wufoo">
						<meta name="robots" content="index, follow">

						<!-- JavaScript -->
						<script src="<?php echo get_template_directory_uri(); ?>/js/wufoo.js"></script>

						<!--[if lt IE 10]>
						<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
						<![endif]-->
					</head>
					<body id="public">
						<div id="container" class="ltr">
							<form id="form1" name="form1" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate action="https://bfeeney.wufoo.com/forms/z7x4m1/#public">
								<h3>Contact Me</h3>
								<label class="desc" id="title3" for="Field3">Name</label>
								<div class="formName">
									<input id="Field3" name="Field3" type="text" class="field text fn nameField" value="" size="8" tabindex="1" placeholder=" "/>
								</div>

								<label class="desc" id="title5" for="Field5">Email</label>
								<div>
									<input id="Field5" name="Field5" type="email" spellcheck="false" class="field text medium" value="" maxlength="255" tabindex="3" /> 
								</div>

								<div id="foli6" class="notranslate">
									<label class="desc" id="title6" for="Field6">Message</label>
									<div>
										<textarea id="Field6" name="Field6" class="field textarea large" spellcheck="true" rows="6" cols="50" tabindex="4" onkeyup=""></textarea>
									</div>
								</div> 
								<div class="buttons ">
									<div><input id="saveForm" name="saveForm" class="btTxt submit" type="submit" value="Submit"/></div>
								</div>
							</form> 

							<script>
								$(".wufoo input, .wufoo textarea").focus(function() {
									$(".contact-hello").hide();
									$(".contact-thanks").show();
								});
								$(".wufoo input, .wufoo textarea").focusout(function() {
									$(".contact-hello").show();
									$(".contact-thanks").hide();
								});
							</script>

						</div><!--container-->
					</body>
				</div><!-- wufoo -->
	        </div>
			</div>
			</div>
			
		</section>
		
	</section>
	
	


<?php get_footer(); ?>


<script type='text/javascript'>
$(document).ready(sizeContent);

	//Every resize of window
	$(window).resize(sizeContent);

	//Dynamically assign height
	function sizeContent() {
	    var newHeight = $(window).height() - $("header").height() + 51 + "px";
	    $("section").css("height", newHeight);
}
</script>