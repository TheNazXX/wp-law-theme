<?php if (!defined('FW')) die('Forbidden'); ?>

<?php if($data['slides']):?>

<div class="owl-carousel owl-carousel-fullwidth">

  <?php foreach($data['slides'] as $slide){ ?>

  <div class="item">
    <div class="testimony-slide active text-center">
      <figure>
        <img src="<?php echo $slide['src']?>" alt="user">
      </figure>
      <span><?php echo $slide['title']?></span>
      <blockquote>
        <p>&ldquo;<?php echo $slide['desc']?>&rdquo;</p>
      </blockquote>
    </div>
  </div>

  <?php }?>
</div>

<?php endif;?>