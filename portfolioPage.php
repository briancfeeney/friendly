<?php global $more;?>

<?php 
/*
Template Name: Portfolio
*/
get_header(); ?>

<div class="col-lg-10 col-lg-offset-1 main">
	
	<section id="design">
	
	<div class="row">
		
		<div class="col-sm-4">
			<h1 class="title">Design & Dev</h1>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
			
			<p>I'm currently employed as a designer for the <a href="http://brooklynmuseum.org">Brooklyn Museum</a>, but I also take freelance work, both print and Web. If you'd like to make something together, please <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">send me a note.</a></p>
			
			<div id="accordion">
				<!-- <h3>
					<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Contact Me</a>
				</h3> -->
				<div id="collapseOne" class="panel panel-collapse collapse">
					<div class="panel-body">
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
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-sm-8">
				
				<h5>Web <small>Design and Development</small></h5>
		
				<ul class="list-unstyled grid cs-style-3">
					<div class="row">
					
						<?php
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args= array('category_name' => 'Web','paged' => $paged, 'posts_per_page' => 10); query_posts($args);?>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
						<div class="col-sm-4">
							 <li>
								<figure>
									<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
										<!-- <img src="<?php the_field('image'); ?>"> -->
										<div class="portfolio-image" style="background-image:url('<?php the_field("image"); ?>');"></div>
									
										<figcaption>
											<p><?php the_title(); ?></p>
										</figcaption>
									</a>
								</figure>
							 </li>
						</div>

						<?php endwhile; else: ?>
						<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
						<?php endif; ?>
					
					</div>
				</ul>

				<h5>Print</h5>

				<ul class="list-unstyled grid cs-style-3">
					<div class="row">
					
						<?php
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args= array('category_name' => 'Print','paged' => $paged, 'posts_per_page' => 10); query_posts($args);?>

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<div class="col-sm-4">
								 <li>
									<figure>
										<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
											<!-- <img src="<?php the_field('image'); ?>"> -->
											<div class="portfolio-image" style="background-image:url('<?php the_field("image"); ?>');"></div>

											<figcaption>
												<p><?php the_title(); ?></p>
											</figcaption>
										</a>
									</figure>	
								 </li>
							</div>

						<?php endwhile; else: ?>
						<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
						<?php endif; ?>
				
					</div>
				</ul>
				
				<h5>Development <small>Front-End</small></h5>
		
				<ul class="list-unstyled development">
					<div class="row">
						
						<div class="col-sm-4">
							 <li>
								<div class="portfolio-image">
									<h4>Familiar</h4>
									<a href="http://measureofthings.com/"><h3>The Measure of All Things</h3></a>
								</div>
							 </li>
						</div>
						<div class="col-sm-4">
							 <li>
								<div class="portfolio-image">
									<h4>Familiar</h4>
									<a href="http://www.artmattersfoundation.org/"><h3>Art Matters Foundation</h3></a>
								</div>
							 </li>
						</div>
						<div class="col-sm-4">
							 <li>
								<div class="portfolio-image">
									<h4>Familiar</h4>
									<a href="http://thomasdozol.com/"><h3>Thomas Dozol</h3></a>
								</div>
							 </li>
						</div>
						<div class="col-sm-4">
							 <li>
								<div class="portfolio-image">
									<h4>Familiar</h4>
									<a href="http://www.urbanglass.org/"><h3>Urban Glass</h3></a>
								</div>
							 </li>
						</div>
						<div class="col-sm-4">
							 <li>
								<div class="portfolio-image">
									<h4>Familiar</h4>
									<a href="http://www.kunsthallstavanger.no/"><h3>Kunsthall Stavanger</h3></a>
								</div>
							 </li>
						</div>
						<div class="col-sm-4">
							 <li>
								<div class="portfolio-image">
									<h4>Familiar</h4>
									<a href="http://urbanarts.org"><h3>Urban Arts</h3></a>
								</div>
							 </li>
						</div>
						<div class="col-sm-4">
							 <li>
								<div class="portfolio-image">
									<h4>Familiar</h4>
									<a href="http://mimizeiger.com/"><h3>Mimi Zeiger</h3></a>
								</div>
							 </li>
						</div>
						<div class="col-sm-4">
							 <li>
								<div class="portfolio-image">
									<h4>Familiar</h4>
									<a href="http://teenagefilm.com/"><h3>Teenage</h3></a>
								</div>
							 </li>
						</div>
						<div class="col-sm-4">
							 <li>
								<div class="portfolio-image">
									<h4>Familiar</h4>
									<a href="http://change-machine.org/"><h3>Change Machine</h3></a>
								</div>
							 </li>
						</div>
						<div class="col-sm-4">
							 <li>
								<div class="portfolio-image">
									<h4>Familiar</h4>
									<a href="http://www.paulahayes.com/"><h3>Paula Hayes</h3></a>
								</div>
							 </li>
						</div>
						<div class="col-sm-4">
							 <li>
								<div class="portfolio-image">
									<h4>Familiar</h4>
									<a href="http://samgreen.to/"><h3>Sam Green</h3></a>
								</div>
							 </li>
						</div>
						<div class="col-sm-4">
							 <li>
								<div class="portfolio-image">
									<h4>Familiar</h4>
									<a href="http://visualaids.org/"><h3>Visual Aids</h3></a>
								</div>
							 </li>
						</div>
					
					</div>
				</ul>
					
			</div>
	</section>
</div>

<?php get_footer(); ?>
