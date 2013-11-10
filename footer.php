<?php ?>

	<!-- <div class="col-md-2">
		<footer id="footer">
			<section class="footer-nav">
				<ul class="footer-nav-top">
					<li><a href="/design">Work</a></li>
					<li><a href="/about">About</a></li>
					<li><a href="/blog">Blog</a></li>
					<li><a href="/photography">Photos</a></li>
					<li><a href="/playground">Playground</a></li>
				</ul>
			</section>
			<section class="site-credits">
				<h4>Site Design by Brian Feeney</h4>
				<h4><a href="/?feed=rss"> RSS Feed</a></h4>
			</section>
		</footer>
	</div> -->
	
<footer id="footer">
	<a data-toggle="modal" href="#myModal" class="contact"><div data-icon="u" class="icon-mail"></div></a>
	<a href="tel:3179020092" class="phone visible-xs"><div data-icon="e" class="icon-telephone"></div></a>
	<a href="/purpose" class="purpose">/purpose</a>
</footer>


<!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <!-- <h3 class="modal-title">Contact Me</h3> -->
        </div>
        <div class="modal-body">
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
									<textarea id="Field6" name="Field6" class="field textarea large" spellcheck="true" rows="4" cols="50" tabindex="4" onkeyup=""></textarea>
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
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/collapse.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/modal.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/transition.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/button.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/dropdown.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/navigation.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/tab.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/affix.js"></script>

<script>
	$(".navbar-toggle").click( function() {
	  $("#title").toggle();
	  $('.home #title').hide();
	});
</script>




</body>
</html>