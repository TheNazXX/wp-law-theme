<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
} ?>


<?php 

$count = (int)$atts['posts_count'] ? $atts['posts_count'] : 1;  

?>

<div class="row">
  <?php
      $query = new WP_Query([
        'post_type' => 'attorneys',
        'posts_per_page' => $count
      ]);


    if($query->have_posts()) : while($query->have_posts()) : $query->the_post();

?>

  <div class="col-md-4 col-sm-4 text-center animate-box" data-animate-effect="fadeIn">
    <div class="fh5co-staff">
      <?php the_post_thumbnail()?>
      <h3><?php the_title()?></h3>
      <strong class="role"></strong>
      <p><?php the_content() ?></p>
      <ul class="fh5co-social-icons">
        <li><a href="#"><i class="icon-facebook"></i></a></li>
        <li><a href="#"><i class="icon-twitter"></i></a></li>
        <li><a href="#"><i class="icon-dribbble"></i></a></li>
        <li><a href="#"><i class="icon-github"></i></a></li>
      </ul>
    </div>
  </div>



  <?php
  endwhile; endif;
?>

</div>