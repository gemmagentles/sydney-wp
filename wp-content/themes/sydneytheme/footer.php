        <footer class="footer" role="contentinfo">
				<div class="footer__divider"></div>
				<div class="footer__container">
					<div class="footer__top">
						<nav class="footer__nav" role="navigation">
							<?php html5blank_nav(); ?>
						</nav>
						<div class="company-info">
							<div class="mobile-line"></div>
							<div class="company-address">
								<p><?php the_field('contact_info_address', 'option'); ?></p>
								<p><?php the_field('contact_info_province', 'option'); ?></p>
								<p><?php the_field('contact_info_postal_code', 'option'); ?></p>
								<p><?php the_field('contact_info_country', 'option'); ?></p>
							</div>
							<div class="mobile-line"></div>
							<div class="company-contact">
								<p>T: <?php the_field('contact_info_phone_number', 'option'); ?></p>
								<p>E: <a class="email" href="mailto:<?php the_field('contact_info_email', 'option'); ?>" target="_top"><?php the_field('contact_info_email', 'option'); ?></a></p>
							</div>
						</div>
						<div class="logos">
							<div class ="social">
								<div class="line"></div>

								<a class="social__link" href="<?php the_field('facebook_url', 'option'); ?>" target="_blank">
									<img class="social__icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/facebook.svg" alt="Facebook" title="Facebook" />
								</a>

								<a class="social__link" href="<?php the_field('twitter_url', 'option'); ?>" target="_blank">
									<img class="social__icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/twitter.svg" alt="Twitter" title="Twitter" />
								</a>

								<a class="social__link" href="<?php the_field('instagram_url', 'option'); ?>" target="_blank">
									<img class="social__icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/instagram.svg" alt="Instagram" title="Instagram" />
								</a>
							</div>
							<div class="parent-company">
								<p>Proudly distributed by Kartners</p>
								<img class="kartners-logo" src="<?php echo get_template_directory_uri(); ?>/img/icons/kartners.svg" alt="Kartners">
							</div>
						</div>
					</div>
					<div class="footer__bottom">
						<p class="copyright">
						&copy; <?php bloginfo('name'); ?>, <?php echo date('Y'); ?></p>
						<p class="accredit">Design by <a class="accredit__link" href="https://anotherblankpage.com/">Another Blank Page</a></p>
					</div>
				</div>
			</footer>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>
