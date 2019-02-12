<div class="sv-pdf__wrapper">
<span class="subtitle">About</span>
<h2 class="sv-pdf__heading">Product Specs</h2>
  <?php if ( have_rows( 'pdf_download_block' ) ) : ?>
    <?php while ( have_rows( 'pdf_download_block' ) ) : the_row(); ?>
      <?php the_sub_field( 'description' ); ?>
      <?php $pdf = get_sub_field( 'pdf' ); ?>
      <?php if ( $pdf ) { ?>
        <a href="<?php echo $pdf['url']; ?>"><?php echo $pdf['filename']; ?></a>
      <?php } ?>
    <?php endwhile; ?>
  <?php endif; ?>
</div>
