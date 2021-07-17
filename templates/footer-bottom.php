<?php 		
	// Copyright text
	$url = 'https://colorlib.com/';
	$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'resta' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
	$copyRight = !empty( resta_opt( 'resta_footer_copyright_text' ) ) ? resta_opt( 'resta_footer_copyright_text' ) : $copyText;
	?>

	<div class="copy-right_text">
        <div class="container">
			<div class="row">
				<div class="col-xl-12">
					<p class="copy_right text-center">
						<?php echo wp_kses_post( $copyRight ); 
						?>
					</p>
				</div>
			</div>
		</div>
	</div>