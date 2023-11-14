<?php if (!defined('FW')) die('Forbidden');

$class = fw_ext_builder_get_item_width('page-builder', $atts['width'] . '/frontend_class');

?>
<div class="<?php echo esc_attr($class); ?> <?php if(!empty($atts['column_class'])) echo $atts['column_class']?>"
  <?php if(!empty($atts['column_id'])) echo "id='{$atts['column_id']}'"?>>
  <?php echo do_shortcode($content); ?>
</div>