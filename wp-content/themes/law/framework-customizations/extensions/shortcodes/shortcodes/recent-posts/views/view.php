<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
} ?>


<?php 

$count = (int)$atts['posts_count'] ? $atts['posts_count'] : 1;  

?>


<div class="row">
  <?php 
      $query = new WP_Query([
        'posts_per_page' => $count
      ]);

      switch_to_locale('en_US');

    if($query->have_posts()) : while($query->have_posts()) : $query->the_post();

?>

  <div class="col-lg-4 col-md-4">
    <div class="fh5co-blog animate-box">
      <a href="<?php echo esc_url(the_permalink())?>">
        <?php the_post_thumbnail()?>
      </a>
      <div class="blog-text">
        <span class="posted_on"><?php the_time('M. jS')?></span>
        <span class="comment"><a href=""><?php echo get_comments_number()?><i class="icon-speech-bubble"></i></a></span>
        <h3><a href="<?php echo esc_url(the_permalink())?>"><?php the_title()?></a></h3>
        <p><?php the_excerpt()?></p>
        <a href="<?php echo esc_url(the_permalink())?>" class="btn btn-primary">Read More</a>
      </div>
    </div>
  </div>


  <?php
  endwhile; endif;
?>

</div>