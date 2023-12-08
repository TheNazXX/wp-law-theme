<?php
	get_header();
?>


<aside id="fh5co-hero" class="js-fullheight">
  <div class="flexslider js-fullheight">
    <ul class="slides">
      <li style="background-image: url(<?php echo get_the_post_thumbnail_url()?>);">
        <div class="overlay-gradient"></div>
        <div class="container">
          <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
            <div class="slider-text-inner desc">
              <h2 class="heading-section">Contact Us</h2>
              <p class="fh5co-lead">Designed with <i class="icon-heart3"></i> by the fine folks at <a
                  href="http://freehtml5.co" target="_blank">FreeHTML5.co</a></p>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
</aside>



<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php  the_content();?>
      <?php endwhile; else : ?>
      <?php echo 'Sorry, no posts were found.'; ?>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php 
	get_footer();
?>