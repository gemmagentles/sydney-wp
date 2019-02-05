<?php if( have_rows('slider') ): ?>

	<div class="slider">

	<?php while( have_rows('slider') ): the_row(); 

		// vars
		$image = get_sub_field('image');
		$subheading = get_sub_field('subheading');
		$heading = get_sub_field('heading');
		$paragraph = get_sub_field('paragraph');
		$link = get_sub_field('link');
		$linkText = get_sub_field('link_text');

		?>

		<div class="slide">

            <img class="slide__image"src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

            <div class="slider__content-box">
                <span class="subtitle"><?php echo $subheading; ?></span>
                <h2 class="slider__content-box--heading"><?php echo $heading; ?></h2>
                <p class="slider__content-box--paragraph"><?php echo $paragraph; ?></p>
                <button class="sydney-button__with-icon" onclick="location.href='<?php echo $link; ?>'" type="button">
                <?php echo $linkText; ?> <img class="sydney-button__with-icon--icon"src="<?php echo get_template_directory_uri(); ?>/img/icons/right-arrow.svg" alt=""></button>
            </div>

        </div>

    <?php endwhile; ?>
    
    <div class="slider__default-fallback"><img src="<?php echo get_template_directory_uri(); ?>/img/slider/default-slider.jpg" alt="Chicago Collection Products"></div>

    <div class="slider__arrow--prev"><button class="sydney-button__with-icon" onclick="plusSlides(-1)" type="button"><img class="sydney-button__with-icon--icon"src="<?php echo get_template_directory_uri(); ?>/img/icons/left-arrow.svg" alt=""></button></div>
    <div class="slider__arrow--next"><button class="sydney-button__with-icon" onclick="plusSlides(1)" type="button"><img class="sydney-button__with-icon--icon"src="<?php echo get_template_directory_uri(); ?>/img/icons/right-arrow.svg" alt=""></button></div>

</div>

<?php endif; ?>

<script>
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
console.log('test');

}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slide");
//   var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
//   for (i = 0; i < dots.length; i++) {
//       dots[i].className = dots[i].className.replace(" active", "");
//   }
  slides[slideIndex-1].style.display = "block"; 
//   dots[slideIndex-1].className += " active";
}


</script>