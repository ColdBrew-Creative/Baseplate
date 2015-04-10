	<div class="row">
		<hr>
		<footer itemscope itemtype="http://schema.org/WPFooter">
			<div class="row">

				<div class="medium-6 large-3 columns">
					<h1>ABOUT</h1>
					<p>We do cool things.</p>
					<a class="footer-icon" href="">
						<i class="fa fa-facebook-official fa-2x"></i>
					</a>
				</div>

				<div class="medium-6 large-3 columns">
					<h1>LOCATIONS</h1>
					<p>San Francisco
						<ul>
							<li>Pier 1/2</li>
							<li>Pier 1</li>
							<li>Pier 39</li>
							<li>Pier 40</li>
						</ul>
					</p>
				</div>

				<div class="medium-6 large-3 columns">
					<h1>NEWS</h1>
					<?php
						// Fetch 5 recent blog posts
						$footerquery = new WP_Query('showposts=5');
						if ($footerquery->have_posts()) {
							while ($footerquery->have_posts()) {
								$footerquery->the_post(); ?>
								<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
							<?php }
						}
						// Display message if no posts exist
						else { ?>
							<p><?php _e('Add some blog posts!'); ?></p>
						<?php }
					?>
				</div>

				<div class="medium-6 large-3 columns">
					<h1>CONTACT</h1>
					<p class="bold">HOURS</p><p>9 to 5:30 Mon-Sun</p>
					<p class="bold">PHONE</p><p>1-987-654-3210</p>
					<p class="bold">EMAIL</p><p>you@domain.com</p>
				</div>

			</div>
		</footer>
	</div>

	<!-- jQuery -->
	<script src="<?php echo get_template_directory_uri(); ?>/library/js/min/jquery-2.1.3.min.js"></script>

	<!-- Google Analytics goes in here: -->
	<?php if(!is_user_logged_in()) { ?>
	<?php } ?>

	<?php wp_footer(); ?><!-- all scripts before this line -->
</body>
</html>
