<?php if ( have_rows( 'pdf_content' ) ) : ?>
  <div class="sv-pdf__wrapper">
    <?php while ( have_rows( 'pdf_content' ) ) : the_row(); ?>
        
              <!-- START - Left/Top Box containing description and pdf files -->
              <div class="sv-pdf__left-box">

                <?php if ( have_rows( 'description_and_pdfs' ) ) : ?>
                  <span class="subtitle">About</span>
                  <h2 class="sv-pdf__heading">Product Specs</h2>
                    
                    <?php while ( have_rows( 'description_and_pdfs' ) ) : the_row(); ?>
                      <p><?php the_sub_field( 'description' ); ?></p>

                      <!-- START an accordion to hold a list of pdfs -->
                      <div class="sv-pdf__accordion-wrapper">

                        <?php if ( have_rows( 'pdf_list' ) ) : ?>
                            <?php while ( have_rows( 'pdf_list' ) ) : the_row(); ?>
                              <?php $pdf_file = get_sub_field( 'pdf_file' ); ?>
                              <?php if ( $pdf_file ) { ?>
                                <a class="sv-pdf__link" href="<?php echo $pdf_file['url']; ?>"><?php echo $pdf_file['filename']; ?></a>
                              <?php } ?>
                            <?php endwhile; ?>
                          <?php else : ?>
                            <?php // no rows found ?>
                        <?php endif; ?>

                      </div>
                      <!-- END an accordion to hold a list of pdfs -->

                    <?php endwhile; ?>

                <?php endif; ?>

              </div>
              <!-- END - Left/Top Box containing description and pdf files -->
              <!-- ----------------------------------------------------------------------------->
              <!-- START Right/Bottom Box containing image gallery -->
              <div class="sv-pdf__right-box">

                <?php if ( have_rows( 'image_gallery' ) ) : ?>

                    <?php while ( have_rows( 'image_gallery' ) ) : the_row(); ?>
                      <?php $image = get_sub_field( 'image' ); ?>
                      <?php if ( $image ) { ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                      <?php } ?>
                    <?php endwhile; ?>
                  <?php else : ?>
                    <?php // no rows found ?>

                <?php endif; ?>

              </div>
            <!-- START Right/Bottom Box containing image gallery -->

    <?php endwhile; ?>
  </div>
<?php endif; ?>
<!-- END OF PDF -->