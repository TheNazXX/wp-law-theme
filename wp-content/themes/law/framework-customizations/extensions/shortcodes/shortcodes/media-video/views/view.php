<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
} ?>



<?php 
	if(!empty($atts['url'])): ?>

<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="<?php echo $atts['url']?>" allowfullscreen></iframe>
</div>

<?php endif;?>