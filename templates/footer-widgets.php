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

	// $footer_logo_img_id = get_theme_mod( 'footer_logo_img' );
	// $footer_logo_img 	= !empty($footer_logo_img_id) ? wp_get_attachment_image_src( $footer_logo_img_id, 'resta_site_logo_155x40' )[0] : '';
	// $footer_text 	    = resta_opt( 'resta_footer_text' ) == '' ? 'Esteem spirit temper too say adieus who <br> direct esteem. It esteems luckily or <br> picture placing drawing.' : resta_opt( 'resta_footer_text' );
	// $site_url 	    	= home_url('/');
			?>

	<div class="footer_top">
		<div class="container">
			<div class="row">
				<?php
					// Footer widget 1
					if( is_active_sidebar( 'footer-1' ) ){
						dynamic_sidebar( 'footer-1' );
					}
							
					// Footer widget 2
					if( is_active_sidebar( 'footer-2' ) ){
						dynamic_sidebar( 'footer-2' );
					}

					// Footer widget 3
					if( is_active_sidebar( 'footer-3' ) ){
						dynamic_sidebar( 'footer-3' );
					}

					// Footer widget 4
					if( is_active_sidebar( 'footer-4' ) ){
						dynamic_sidebar( 'footer-4' );
					}
				?>

			</div>
		</div>
	</div>