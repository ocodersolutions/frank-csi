	<!--Footer block-->
	<footer id="footer" class="has-shadow">
		<!--top footer-->
		<?php if(fthemes_get_option('top_footer_section') == '1') { ?>
		<div class="top-footer">
			<div class="container">
				<div class="row">
					<!--quick links block-->
					<div class="<?php if((fthemes_get_option('footer_newsletter') == '0') && (fthemes_get_option('footer_blog') == '0')) { ?>col-sm-6<?php } elseif(fthemes_get_option('footer_newsletter') == '0') { ?>col-sm-4<?php } elseif(fthemes_get_option('footer_blog') == '0') { ?>col-sm-4<?php } else { ?>col-sm-3<?php } ?>">
						<h2 class="footer-block-title"><?php if(fthemes_get_option('footer_title1') != '') { echo fthemes_get_option('footer_title1'); } else { ?><?php _e('Quick links', 'cosonix'); } ?><span></span></h2>
						<ul class="quick-link-list">
							<?php
								wp_nav_menu(array(
								'theme_location' 	=>'menu_footer', 'container' => false, 'items_wrap' => '%3$s'
								)); 
							?>
						</ul>
					</div>
					<!--end quick links block-->

					<!--social media block-->
					<div class="<?php if((fthemes_get_option('footer_newsletter') == '0') && (fthemes_get_option('footer_blog') == '0')) { ?>col-sm-6<?php } elseif(fthemes_get_option('footer_newsletter') == '0') { ?>col-sm-4<?php } elseif(fthemes_get_option('footer_blog') == '0') { ?>col-sm-4<?php } else { ?>col-sm-3<?php } ?>">
						<h2 class="footer-block-title"><?php if(fthemes_get_option('footer_title2') != '') { echo fthemes_get_option('footer_title2'); } else { ?><?php _e('Social media', 'cosonix'); } ?><span></span></h2>
						<ul class="social-list">
							<?php if(fthemes_get_option('social_facebook') != '') { ?>
							<li><a href="<?php echo fthemes_get_option('social_facebook'); ?>"><span class="wrap-icon"><i class="fa fa-facebook"></i></span>Facebook</a></li>
							<?php } if(fthemes_get_option('social_twitter') != '') { ?>
							<li><a href="<?php echo fthemes_get_option('social_twitter'); ?>"><span class="wrap-icon"><i class="fa fa-twitter"></i></span>Twitter</a></li>
							<?php } if(fthemes_get_option('social_linkedin') != '') { ?>
							<li><a href="<?php echo fthemes_get_option('social_linkedin'); ?>"><span class="wrap-icon"><i class="fa fa-linkedin"></i></span>Linkedin</a></li>
							<?php } if(fthemes_get_option('social_googleplus') != '') { ?>
							<li><a href="<?php echo fthemes_get_option('social_googleplus'); ?>"><span class="wrap-icon"><i class="fa fa-google-plus"></i></span>Google+</a></li>
							<?php } if(fthemes_get_option('social_pinterest') != '') { ?>
							<li><a href="<?php echo fthemes_get_option('social_pinterest'); ?>"><span class="wrap-icon"><i class="fa fa-pinterest"></i></span>Pinterest</a></li>
							<?php } if(fthemes_get_option('social_instagram') != '') { ?>
							<li><a href="<?php echo fthemes_get_option('social_instagram'); ?>"><span class="wrap-icon"><i class="fa fa-instagram"></i></span>Instagram</a></li>
							<?php } if(fthemes_get_option('social_youtube') != '') { ?>
							<li><a href="<?php echo fthemes_get_option('social_youtube'); ?>"><span class="wrap-icon"><i class="fa fa-youtube"></i></span>Youtube</a></li>
							<?php } ?>
						</ul>
					</div>
					<!--end social media block-->

					<!--articles list block-->
					<?php if(fthemes_get_option('footer_blog') == '1') { ?>
					<div class="col-sm-3">
						<h2 class="footer-block-title"><?php if(fthemes_get_option('footer_title3') != '') { echo fthemes_get_option('footer_title3'); } else { ?><?php _e('News Updates', 'cosonix'); } ?><span></span></h2>
						<ul class="article-list">
							<?php			
								$args = array(
								'posts_per_page'   => 2,
								'orderby'          => 'post_date',
								'order'            => 'DESC',
								'post_type'        => 'post',
								'post_status'      => 'publish',
								); 

								$ft_footer_latestpost = new WP_Query( $args );
								if ($ft_footer_latestpost->have_posts()) :
								while($ft_footer_latestpost->have_posts()) : $ft_footer_latestpost->the_post() ;
								global $post;
								?>
							<li>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<p><?php echo excerpt(16); ?></p>
							</li>
							<?php endwhile; ?>
							<?php endif; ?>
						</ul>
					</div>
					<?php } ?>
					<!--end articles list block-->

					<!--newsletter block-->
					<?php if(fthemes_get_option('footer_newsletter') == '1') { ?>
					<div class="col-sm-3">
						<h2 class="footer-block-title"><?php if(fthemes_get_option('footer_title4') != '') { echo fthemes_get_option('footer_title4'); } else { ?><?php _e('Newsletter sign up', 'cosonix'); } ?><span></span></h2>
						<h3 class="newsletter-title"><?php esc_attr_e('Sign up to our newsletter list.', 'cosonix');?></h3>

						<?php if((fthemes_get_option('mailchimp_apikey') != '') && (fthemes_get_option('ft_aweber_listid') == '')) { ?>
						<form id="footer_signup" action="<?php echo esc_url( get_template_directory_uri() );?>/subscribe.php" method="post" class="newsletter-frm">
							<input class="form-control" name="ffname" id="ffname" placeholder="<?php esc_attr_e('Your Name', 'cosonix');?>" type="text"/>
							<input class="form-control" name="femail" id="femail" placeholder="<?php esc_attr_e('Your Email Address', 'cosonix');?>" type="email"/>
							<input value="<?php esc_attr_e('Sign Up', 'cosonix');?>" type="submit"/>
						</form>
						<?php } elseif((fthemes_get_option('ft_aweber_listid') != '') && (fthemes_get_option('mailchimp_apikey') == '')) { ?>
						<form action="https://www.aweber.com/scripts/addlead.pl" method="post" class="newsletter-frm">
							<input type="hidden" name="listname" value="<?php fthemes_get_option('ft_aweber_listid'); ?>" />
							<input type="hidden" name="redirect" value="<?php esc_url( fthemes_get_option('aweber_redirectpage') ); ?>" />
							<input type="hidden" name="meta_redirect_onlist" value="<?php esc_url( fthemes_get_option('aweber_redirectpage_old') ); ?>" />
							<input type="hidden" name="meta_message" value="1" /> 
							<input type="hidden" name="meta_required" value="name,email" />
							<input class="form-control" name="name" placeholder="<?php esc_attr_e('Your Name', 'cosonix');?>" type="text" value="" />
							<input class="form-control" name="email" placeholder="<?php esc_attr_e('Your Email Address', 'cosonix');?>" type="email" value="" />
							<input value="<?php esc_attr_e('Sign Up', 'cosonix');?>" type="submit"/>
						</form>
						<?php } else { ?>
						<form class="newsletter-frm">
							<input class="form-control" name="ffname" placeholder="<?php esc_attr_e('Your Name', 'cosonix');?>" type="text"/>
							<input class="form-control" name="femail" placeholder="<?php esc_attr_e('Your Email Address', 'cosonix');?>" type="email"/>
							<input value="<?php esc_attr_e('Sign Up', 'cosonix');?>" type="submit"/>
						</form>
						<?php } ?>
						<div id="footer_response" class="result"></div>
					</div>
					<?php } ?>
					<!--end newsletter block-->

				</div>
			</div>
		</div>
		<?php } ?>
		<!--top footer-->

		<!--bottom footer-->
		<div class="bottom-footer">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center">
						<a class="footer-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e('Footer Logo', 'cosonix'); ?></a>
						<p class="copyright"><?php echo fthemes_get_option('copy_text'); ?></p>
					</div>
				</div>
			</div>
		</div>
		<!--end bottom footer-->
	</footer>
	<!--End Footer block-->
	<?php $subscribefile = get_template_directory_uri().'/subscribe.php'; ?>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			// jQuery Validation
			$("#home_signup").validate({
				// if valid, post data via AJAX
				submitHandler: function() {
					var subscribefile="<?php echo esc_url( $subscribefile ); ?>";
					$.post(subscribefile, { fname: $("#hfname").val(), email: $("#hfemail").val() }, function(data) {
						$('#home_response').html(data);
					});
				},
				// all fields are required
				rules: {
					hfname: {
						required: true
					},
					hfemail: {
						required: true,
						email: true
					}
				}
			});
		});
	</script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			// jQuery Validation
			$("#signup").validate({
				// if valid, post data via AJAX
				submitHandler: function() {
					var subscribefile="<?php echo esc_url( $subscribefile ); ?>";
					$.post(subscribefile, { fname: $("#fname").val(), email: $("#email").val() }, function(data) {
						$('#response').html(data);
					});
				},
				// all fields are required
				rules: {
					fname: {
						required: true
					},
					email: {
						required: true,
						email: true
					}
				}
			});
		});
	</script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			// jQuery Validation
			$("#footer_signup").validate({
				// if valid, post data via AJAX
				submitHandler: function() {
					var subscribefile="<?php echo esc_url( $subscribefile ); ?>";
					$.post(subscribefile, { fname: $("#ffname").val(), email: $("#femail").val() }, function(data) {
						$('#footer_response').html(data);
					});
				},
				// all fields are required
				rules: {
					ffname: {
						required: true
					},
					femail: {
						required: true,
						email: true
					}
				}
			});
		});
	</script>
	<?php
		/* Always have wp_footer() just before the closing </body>
		* tag of your theme, or you will break many plugins, which
		* generally use this hook to reference JavaScript files.
		*/

		wp_footer();	
	?>
</body>
</html>