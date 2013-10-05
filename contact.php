<?php global $more;?>

<?php 
/*
Template Name: contact
*/
get_header(); ?>

<div class="col-lg-7 col-lg-offset-1">
	
	<section id="contact">

		<div class="contact-hello">
			<h2>I am employed by <a href="http://familiar-studio.com">Familiar</a>, but I also take freelance work.</h2>
			<h2>Get in touch and let's make something together.</h2>
		</div>
		<div class="contact-thanks">
			<h2>Looking forward to hearing from you!</h2>
			<h2>I'll send a reply your way in a jiff.</h2>
		</div>

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

	</section>

</div>

<?php get_footer(); ?>