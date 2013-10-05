<?php global $more;?>

<?php 
/*
Template Name: About
*/
get_header(); ?>

<section>
	<div class="container">
		<div class="row">
			<div class="span6 about-info">
				<div class="my-picture">
					<img src="<?php echo get_template_directory_uri(); ?>/images/sillhoute.png" class="me">
				</div>
				<h2>I am a designer and developer living in Brooklyn, NY.</h2> 
				<h3>I am employed by <a href="http://familiar-studio.com">Familiar</a>, I <a href="http://twitter.com/bfeeney">tweet</a>, I <a href="http://brianfeeney.us/blog">blog</a> about design and other things, I have a <a href="http://briancfeeney.tumblr.com">tumblr</a>, and I take <a href="http://brianfeeney.us/blog/photography">photos</a>.</h3>
				<h3>If you'd like to contact me, arrange a meeting, or would just like to share a beer or coffee, please don't hesitate to send me a note. I'd love to hear from you.</h3>
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
								<div class="row">
									<div class="span3">
										<label class="desc" id="title3" for="Field3">Name</label>
										<div class="formName">
											<input id="Field3" name="Field3" type="text" class="field text fn nameField" value="" size="8" tabindex="1" placeholder=" "/>
										</div>
									</div>
									<div class="span3">
										<label class="desc" id="title5" for="Field5">Email</label>
										<div>
											<input id="Field5" name="Field5" type="email" spellcheck="false" class="field text medium" value="" maxlength="255" tabindex="3" /> 
										</div>
									</div>
									<div class="span6">
										<div id="foli6" class="notranslate">
											<label class="desc" id="title6" for="Field6">Message</label>
											<div>
												<textarea id="Field6" name="Field6" class="field textarea large" spellcheck="true" rows="6" cols="50" tabindex="4" onkeyup=""></textarea>
											</div>
										</div> 
										<div class="buttons ">
											<div><input id="saveForm" name="saveForm" class="btTxt submit" type="submit" value="Submit"/></div>
										</div>
									</div>
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
				</div>
			</div>
			<div class="span6">
				<div class="row">
					<div class="span3 about-section-box">
						<div class="heading">
							<h1><a href="/blog">Blog</a></h1>
						</div>
						<a href="/blog"><div class="about-blog">				
								<?php
									$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
									$args= array('category_name' => 'Blog','paged' => $paged, 'posts_per_page' => 4); query_posts($args);?>

						    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<div class="post">
									<div class="postTitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?><span class="postDate"><?php the_time('M / j') ?></span></a></div>
								</div>
								<?php endwhile; else: ?>
								<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
								<?php endif; ?>
						</div></a>
						<div class="down-triangle"></div>
					</div>
					<div class="span3 about-section-box">
						<div class="heading">
							<h1><a href="/design">Design</a></h1>
						</div>
						<a href="/design"><div class="about-design">				
								<?php
									$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
									$args= array('category_name' => 'Portfolio','paged' => $paged, 'posts_per_page' => 1); query_posts($args);?>

						    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<div class="post">
									<div class="postContent">
										<img src="<?php the_field('image'); ?>">
									</div>
								</div>
								<?php endwhile; else: ?>
								<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
								<?php endif; ?>
						</div></a>
						<div class="down-triangle"></div>
					</div>
					<div class="span3 about-section-box">
						<div class="heading">
							<h1><a href="/photography">Photos</a></h1>
						</div>
						<a href="/photography"><div class="about-photos">				
								<?php
									$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
									$args= array('category_name' => 'Photography','paged' => $paged, 'posts_per_page' => 1); query_posts($args);?>

						    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<div class="post">
									<div class="postContent">
										<a href="/photography"><?php the_content(__('(more...)')); ?></a>
									</div>
								<?php endwhile; else: ?>
								<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
								<?php endif; ?>
							</div>
						</div>
						<div class="down-triangle"></div>
					</div></a>
					<div class="span3 about-section-box">
						<div class="heading">
							<h1><a href="/playground">Playground</a></h1>
						</div>
						<a href="/playground"><div class="about-playground">			
								<?php
									$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
									$args= array('category_name' => 'Playground','paged' => $paged, 'posts_per_page' => 1); query_posts($args);?>

						    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<div class="post">
									<div class="postContent">
										<?php the_content(__('(more...)')); ?>
									</div>
								<?php endwhile; else: ?>
								<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
								<?php endif; ?>
						</div></a>
					</div>
					<div class="down-triangle"></div>
				</div>
			</div>
		</div>
	</div>	
</section>

<?php get_footer(); ?>