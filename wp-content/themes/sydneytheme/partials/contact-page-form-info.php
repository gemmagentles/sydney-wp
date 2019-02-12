<div class="contact-form__wrapper flex">
<?php if ( have_rows( 'contact_information' ) ) : ?>
    <?php while ( have_rows( 'contact_information' ) ) : the_row(); ?>
      <div class="contact-form__inner-wrapper flex form">
        <?php if ( have_rows( '' ) ) : ?>
                <?php while ( have_rows( '' ) ) : the_row(); ?>
                    <h3 class="contact-form__title"><?php the_sub_field( 'contact_form_title' ); ?></h3>
                    <?php the_sub_field( 'contact_form_short_code' ); ?>
                <?php endwhile; ?>
            <?php endif; ?>
      </div>
        <?php if ( have_rows( 'contact_information_inner' ) ) : ?>
      <div class="contact-form__inner-wrapper flex content">
            <?php while ( have_rows( 'contact_information_inner' ) ) : the_row(); ?>
          <div class="contact-form__content">
            <h3 class="contact-form__title"><?php the_sub_field( 'contact_title' ); ?></h3>
            <div class="contact-form__content--group">
                      <span><?php the_sub_field( 'contact_address' ); ?></span>
                    <span>
                <?php the_sub_field( 'contact_city' ); ?>,
                <?php the_sub_field( 'contact_province' ); ?>
                <?php the_sub_field( 'contact_postal_code' ); ?>
              </span>
              <span><?php the_sub_field( 'contact_country' ); ?></span>
            </div>
            <div class="contact-form__content--group">
                        <span><?php the_sub_field( 'contact_phone_number' ); ?></span>
            </div>
            <div class="contact-form__content--group">
                        <span><?php the_sub_field( 'contact_email' ); ?></span>
            </div>
          </div>
            <?php endwhile; ?>
    </div>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
</div>