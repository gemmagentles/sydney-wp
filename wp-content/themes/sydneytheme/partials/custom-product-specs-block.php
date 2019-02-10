<?php if ( have_rows( 'product_specifications' ) ) : ?>
	<?php while ( have_rows( 'product_specifications' ) ) : the_row(); ?>
		<?php $model_numbers_terms = get_sub_field( 'model_numbers' ); ?>
		<?php if ( $model_numbers_terms ): ?>
			<?php foreach ( $model_numbers_terms as $model_numbers_term ): ?>
				<?php echo $model_numbers_term->name; ?>
			<?php endforeach; ?>
		<?php endif; ?>
		<h1>Size</h1>
		<?php $product_size_terms = get_sub_field( 'product_size' ); ?>
		<?php if ( $product_size_terms ): ?>
			<?php foreach ( $product_size_terms as $product_size_term ): ?>
				<?php echo $product_size_term->name; ?>
			<?php endforeach; ?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>