<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var int $form_id
 * @var string $submit_button_text
 * @var array $extra_data
 */
?>
<div>
  <button class="btn btn-primary contact-form-btn" type="submit"><?php echo esc_attr( $submit_button_text ) ?></button>
</div>