<?php if( have_rows('card_grid') ): ?>

<div class="card-grid__wrapper">

<?php
// vars
$cardgridheading = get_field('card_grid_heading');
?>
        
<?php if( $cardgridheading ): ?>
    <h2 class="card-grid__heading"><?php echo $cardgridheading; ?></h2>
<?php endif; ?>

    <div class="card-grid__container">

        <?php while( have_rows('card_grid') ): the_row(); 

            // vars
            $image = get_sub_field('image');

            $title = get_sub_field('title');

            $link = get_sub_field('link');


            ?>
            
            <div class="card-grid__image-wrapper">
                <div class="card-grid__image-container">
                    <a class="card-grid__image-link" href="<?php echo $link; ?>">
                        <img class="card-grid__image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                        <p class="card-grid__image--title">View Products <img class="card-grid__image--title-arrow"src="<?php echo get_template_directory_uri(); ?>/img/icons/right-arrow.svg" alt=""></p>
                    </a>
                </div>
                <a class="card-grid__title-link" href="<?php echo $link; ?>"><?php echo $title; ?></a>
            </div>

        <?php endwhile; ?>

    </div>
    
</div>

<?php endif; ?>
