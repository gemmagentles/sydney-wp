<p class="products__subheading">
<?php $product_series_subtitle_term = get_field( 'product_series_subtitle' ); ?>
<?php if ( $product_series_subtitle_term ): ?>
	<?php echo $product_series_subtitle_term->name; ?>
<?php endif; ?>
</p>