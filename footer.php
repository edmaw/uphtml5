			<!-- .main --></div>
<br>
		<!-- Contact -->
			<div class="wrapper style4">
				<article id="contact" class="container 75%">
					<header>
						<h2>Find out more</h2>
						<p>Ornare nulla proin odio consequat sapien vestibulum ipsum sed lorem.</p>
					</header>
					<div>
						<div class="row">
<div class="6u" >												<div class="row">
													<div class="6u 12u(mobile)">
							<?php if ( is_active_sidebar( 'sidebar-widget-area' ) ) { ?>
       <aside class="entry-content">
 <?php dynamic_sidebar( 'sidebar-widget-area' ); ?>
	  </aside>
<?php } ?></div></div>
</div>
							<div class="6u">	
				<header>
						<h2>How can we help you?</h2>
						<p>Ornare nulla proin odio consequat sapien vestibulum ipsum sed lorem.</p>
					</header>
								<form action="../mail.php" method="POST">

											<div>
												<div class="row">
													<div class="6u 12u(mobile)">
														<input type="text" name="name" name="name" placeholder="Name" />
													</div>
													<div class="6u 12u(mobile)">
														<input type="text" name="email" name="email" placeholder="Email" />
													</div>
												</div>
												<div class="row">
													<div class="12u">
														<input type="text" name="subject" name="subject" placeholder="Subject" />
													</div>
												</div>
												<div class="row">
													<div class="12u">
														<textarea name="message" id="message" placeholder="Message"></textarea>
													</div>
												</div>
												<div class="row 200%">
													<div class="12u">
														<ul class="actions">
															<li><input type="submit" value="Send" /></li>
															<li><input type="reset" value="Reset Form" class="alt" /></li>
														</ul>
													</div>
												</div>
											</div>
										</form>
							</div>
							
						</div>
						<div class="row">
							<div class="12u">
								<hr />
								<h3>Find me on ...</h3>
								<ul class="social">
									<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
									<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
									<li><a href="#" class="icon fa-tumblr"><span class="label">Tumblr</span></a></li>
									<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
									<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
									<!--
									<li><a href="#" class="icon fa-rss"><span>RSS</span></a></li>
									<li><a href="#" class="icon fa-instagram"><span>Instagram</span></a></li>
									<li><a href="#" class="icon fa-foursquare"><span>Foursquare</span></a></li>
									<li><a href="#" class="icon fa-skype"><span>Skype</span></a></li>
									<li><a href="#" class="icon fa-soundcloud"><span>Soundcloud</span></a></li>
									<li><a href="#" class="icon fa-youtube"><span>YouTube</span></a></li>
									<li><a href="#" class="icon fa-blogger"><span>Blogger</span></a></li>
									<li><a href="#" class="icon fa-flickr"><span>Flickr</span></a></li>
									<li><a href="#" class="icon fa-vimeo"><span>Vimeo</span></a></li>
									-->
								</ul>
								<hr />
							</div>
						</div>
					</div>
					<footer>
						<ul id="copyright">
							<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5UP</a> vs. <a href="http://gebnet.co.uk">GebNet</a></li>
						</ul>
					</footer>
				</article>
			</div>

		<!-- Scripts -->
			<script src="<?php echo get_stylesheet_directory_uri()?>/assets/js/jquery.min.js"></script>
			<script src="<?php echo get_stylesheet_directory_uri()?>/assets/js/jquery.scrolly.min.js"></script>
			<script src="<?php echo get_stylesheet_directory_uri()?>/assets/js/skel.min.js"></script>
			<script src="<?php echo get_stylesheet_directory_uri()?>/assets/js/skel-viewport.min.js"></script>
			<script src="<?php echo get_stylesheet_directory_uri()?>/assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="<?php echo get_stylesheet_directory_uri()?>/assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="<?php echo get_stylesheet_directory_uri()?>/assets/js/main.js"></script>

	<?php wp_footer(); ?>

	</body>
</html>