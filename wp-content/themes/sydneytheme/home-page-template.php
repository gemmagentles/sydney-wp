<?php /* Template Name: Home Page Template */ get_header(); ?>

	<main role="main">
		<!-- Slider -->
		<section>
			<?php include 'partials/slider.php'; ?> 		
		</section>
		<!-- /Slider -->

		<!-- Product Styles Grid -->
		<section>
			<?php include 'partials/product-styles-grid.php'; ?> 		
		</section>
		<!-- /Product Styles Grid -->

		<!-- Product Grid -->
		<section>
			<?php include 'partials/product-grid.php'; ?> 		
		</section>
		<!-- /Product Grid -->
	</main>

<?php include 'partials/newsletter-signup.php'; ?> 

<?php get_footer(); ?>
