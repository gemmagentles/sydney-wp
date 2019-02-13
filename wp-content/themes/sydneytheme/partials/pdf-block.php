<?php if ( have_rows( 'pdf_download_block' ) ) : ?>
  <?php while ( have_rows( 'pdf_download_block' ) ) : the_row(); ?>


    <div class="sv-pdf__wrapper">
        <div class="sv-pdf__left-box">
          <span class="subtitle">About</span>
          <h2 class="sv-pdf__heading">Product Specs</h2>
          <p><?php the_sub_field( 'description' ); ?></p>
        </div>
          <?php $pdf = get_sub_field( 'pdf' ); ?>
          <?php if ( $pdf ) { ?>
            <div class="sv-pdf__right-box">
              <img class="sv-pdf__icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/pdf.svg" alt="PDF Icon">
              <h4>Download PDF:</h4>
              <a class="sv-pdf__link" href="<?php echo $pdf['url']; ?>" target="_blank"><?php echo $pdf['filename']; ?></a>
            </div>
          <?php } ?>
    </div>



  <?php endwhile; ?>
<?php endif; ?>
