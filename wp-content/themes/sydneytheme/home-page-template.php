<?php /* Template Name: Home Page Template */ get_header(); ?>

	<main role="main">
		<!-- Slider -->
		<section>
			<?php include 'partials/slider.php'; ?> 		
		</section>
		<!-- /Slider -->

		<!-- Card Grid -->
		<section>
			<?php include 'partials/card-grid.php'; ?> 		
		</section>
		<!-- /Card Grid -->

		<!-- Product Grid -->
		<section>
			<?php include 'partials/product-grid.php'; ?> 		
		</section>
		<!-- /Product Grid -->
	</main>

<?php include 'partials/newsletter-signup.php'; ?> 

<?php get_footer(); ?>
