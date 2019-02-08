<?php if( have_rows('product_styles_grid') ): ?>

<div class="product-styles-grid__wrapper">
        
<h2 class="product-styles-grid__heading">Our Styles</h2>

    <div class="product-styles-grid__container">

        <?php while( have_rows('product_styles_grid') ): the_row(); 

            // vars
            $image = get_sub_field('image');

            $title = get_sub_field('title');

            $link = get_sub_field('link');


            ?>
            
            <div class="product-styles-grid__image-wrapper">
                <div class="product-styles-grid__image-container">
                    <a class="product-styles-grid__image-link" href="<?php echo $link; ?>">
                        <img class="product-styles-grid__image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                        <p class="product-styles-grid__image--title">View Products <img class="product-styles-grid__image--title-arrow"src="<?php echo get_template_directory_uri(); ?>/img/icons/right-arrow.svg" alt=""></p>
                    </a>
                </div>
                <a class="product-styles-grid__title-link" href="<?php echo $link; ?>"><?php echo $title; ?></a>
            </div>

        <?php endwhile; ?>

    </div>
    
</div>

<?php endif; ?>
