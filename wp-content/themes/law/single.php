<?php get_header(); ?>

<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );

} ?>


<div id="fh5co-blog" class="fh5co-bg-section">
  <div class="container">

    <div class="blog-inner">
      <?php 
   

      switch_to_locale('en_US');

    if(have_posts()) : while(have_posts()) : the_post();

?>

      <div class="fh5co-blog animate-box">
        <a href="<?php echo esc_url(the_permalink())?>">
          <?php the_post_thumbnail()?>
        </a>
        <div class="blog-text">
          <span class="comment"><a href=""><?php echo get_comments_number()?><i
                class="icon-speech-bubble"></i></a></span>
          <h3><a href="<?php echo esc_url(the_permalink())?>"><?php the_title()?></a></h3>
          <p><?php the_content()?></p>
        </div>
      </div>


      <?php 
			
			
			if(comments_open() || get_comments_number()){
				comments_template();
			};
			
			
			
			?>


      <?php
  endwhile; endif;
?>

    </div>

  </div>
</div>



<?php get_footer(); ?>