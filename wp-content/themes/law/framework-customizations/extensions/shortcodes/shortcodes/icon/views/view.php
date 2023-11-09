<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<a href="<?php echo isset($atts['url']) ? esc_attr($atts['url']) : '#';?>">
	<span class="fw-icon">
		<i class="<?php echo esc_attr($atts['icon']); ?>"></i>
		<?php if (!empty($atts['title'])): ?>
			<br/>
			<span class="list-title"><?php echo $atts['title'] ?></span>
		<?php endif; ?>
	</span>
</a>