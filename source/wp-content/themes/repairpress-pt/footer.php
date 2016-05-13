<?php
/**
 * Footer
 *
 * @package RepairPress
 */

$repairpress_footer_widgets_layout = RepairPressHelpers::footer_widgets_layout_array();
$repairpress_footer_allowed_html = array(
	'a'      => array(
		'href'   => array(),
		'target' => array(),
		'title'  => array(),
	),
	'em'     => array(),
	'strong' => array(),
	'img'    => array(
		'src'    => array(),
		'alt'    => array(),
		'width'  => array(),
		'height' => array(),
	),
	'span'   => array(
		'class'  => array(),
	),
	'i'      => array(
		'class'  => array(),
	),
);

?>

	<footer class="footer">
		<?php if ( ! empty( $repairpress_footer_widgets_layout ) && is_active_sidebar( 'footer-widgets' ) ) : ?>
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<?php
					if ( is_active_sidebar( 'footer-widgets' ) ) {
						dynamic_sidebar( 'footer-widgets' );
					}
					?>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-4">
						<div class="footer-bottom__left">
							<?php echo wp_kses( apply_filters( 'repairpress_footer_left_txt', get_theme_mod( 'footer_left_txt', 'RepairPress Theme Made by <a href="https://www.proteusthemes.com/">ProteusThemes</a>.' ) ), $repairpress_footer_allowed_html ); ?>
						</div>
					</div>
					<div class="col-xs-12 col-md-4">
						<div class="footer-bottom__center">
							<?php echo wp_kses( apply_filters( 'repairpress_footer_center_txt', get_theme_mod( 'footer_center_txt', '<i class="fa  fa-3x  fa-cc-visa"></i> &nbsp; <i class="fa  fa-3x  fa-cc-mastercard"></i> &nbsp; <i class="fa  fa-3x  fa-cc-amex"></i> &nbsp; <i class="fa  fa-3x  fa-cc-paypal"></i>' ) ), $repairpress_footer_allowed_html ); ?>
						</div>
					</div>
					<div class="col-xs-12 col-md-4">
						<div class="footer-bottom__right">
							<?php echo wp_kses( apply_filters( 'repairpress_footer_right_txt', get_theme_mod( 'footer_right_txt', '&copy; 2009-2015 RepairPress. All rights reserved.' ) ), $repairpress_footer_allowed_html ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	</div><!-- end of .boxed-container -->

	<?php wp_footer(); ?>
	</body>
</html>