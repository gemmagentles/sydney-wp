<?php /* Template Name: Contact Page Template */ get_header(); ?>

    <main role="main">

        <!-- Contact Page Centered Text -->
        <section>

            <?php get_template_part('partials/centered-text'); ?>

        </section>
        <!-- /Contact Page Centered Text -->


        <!-- Contact Page Enquiries -->
        <section>

            <?php get_template_part('partials/contact-page-enquiries'); ?>

        </section>
        <!-- /Contact Page Enquiries -->

        <!-- Contact Page Form -->
        <section>

            <?php get_template_part('partials/contact-page-form-info'); ?>

        </section>
        <!-- /Contact Page Form -->

        <!-- Contact Page Map -->
        <section>
            <div class="contact-map-wrapper">
                <?php the_field( 'contact_map' ); ?> <!-- One field no need for a partial -->
            </div>
        </section>
        <!-- /Contact Page Map -->

    </main>

<?php get_footer(); ?>