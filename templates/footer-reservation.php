<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Resta
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

	$resta_reservation_title     = !empty( resta_opt( 'resta_reservation_title' ) ) ? resta_opt( 'resta_reservation_title' ) : '';
	$resta_reservation_sub_title = !empty( resta_opt( 'resta_reservation_sub_title' ) ) ? resta_opt( 'resta_reservation_sub_title' ) : '';
	$resta_reservation_btn_text  = !empty( resta_opt( 'resta_reservation_btn_text' ) ) ? resta_opt( 'resta_reservation_btn_text' ) : '';
	$resta_reservation_btn_url	  = !empty( resta_opt( 'resta_reservation_btn_url' ) ) ? resta_opt( 'resta_reservation_btn_url' ) : '';
	?>
	<div class="footer_header d-flex justify-content-between">
		<div class="footer_header_left">
			<h3><?php echo esc_html( $resta_reservation_title )?></h3>
			<p><?php echo esc_html( $resta_reservation_sub_title )?></p>
		</div>
		<div class="footer_btn">
			<a href="<?php echo esc_url( $resta_reservation_btn_url )?>" class="boxed-btn2"><?php echo esc_html( $resta_reservation_btn_text )?></a>
		</div>
	</div>