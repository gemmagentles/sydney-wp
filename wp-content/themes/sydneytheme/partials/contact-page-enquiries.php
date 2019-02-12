<div class="contact-enquiry__wrapper flex">
    <?php if ( have_rows( 'contact_page_enquiries' ) ) : ?>
      <?php while ( have_rows( 'contact_page_enquiries' ) ) : the_row(); ?>
        <div class="contact-enquiry__inner-wrapper flex">
          <h3 class="contact-enquiry__title"><?php the_sub_field( 'contact_page_enquiries_title' ); ?></h3>
          <p class="contact-enquiry__content"><?php the_sub_field( 'contact_page_enquiries_content' ); ?></p>
          <a href="mailto:<?php the_sub_field( 'contact_page_enquiries_email_address_link_url' ); ?>" target="_blank" title="<?php the_sub_field( 'contact_page_enquiries_email_address_link_text' ); ?>" class="contact-enquiry__link flex"><?php the_sub_field( 'contact_page_enquiries_email_address_link_text' ); ?></a>
        </div>
      <?php endwhile; ?>
    <?php else : ?>
      <?php // no rows found ?>
    <?php endif; ?>
</div>