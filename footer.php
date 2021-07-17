<?php 
/**
 * @Packge     : Resta
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
    // Block direct access
    if( !defined( 'ABSPATH' ) ){
        exit( 'Direct script access denied.' );
    }

        /**
         * Footer Area
         *
         * @Footer
         * @Back To Top Button
         *
         * @Hook resta_footer
         *
         * @Hooked  resta_footer_area 
         *
         */

		do_action( 'resta_footer' );

	wp_footer(); 
 ?>
</body>
</html>