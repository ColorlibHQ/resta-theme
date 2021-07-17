<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Before Wrapper
	 *
	 * @Preloader
	 *
	 */
	add_action( 'resta_preloader', 'resta_site_preloader', 10 );

	/**
	 * Header
	 *
	 * @Header Menu
	 * @Header Bottom
	 * 
	 */

	add_action( 'resta_header', 'resta_header_cb', 10 );

	/**
	 * Hook for footer
	 *
	 */
	add_action( 'resta_footer', 'resta_footer_area', 10 );

	/**
	 * Hook for Blog, single, page, search, archive pages wrapper.
	 */
	add_action( 'resta_wrp_start', 'resta_wrp_start_cb', 10 );
	add_action( 'resta_wrp_end', 'resta_wrp_end_cb', 10 );
	
	/**
	 * Hook for Blog, single, search, archive pages column.
	 */
	add_action( 'resta_blog_col_start', 'resta_blog_col_start_cb', 10 );
	add_action( 'resta_blog_col_end', 'resta_blog_col_end_cb', 10 );
	
	/**
	 * Hook for blog posts thumbnail.
	 */
	add_action( 'resta_blog_posts_thumb', 'resta_blog_posts_thumb_cb', 10 );

	/**
	 * Hook for blog details wrapper.
	 */
	add_action( 'resta_blog_details_wrap_start', 'resta_blog_details_wrap_start_cb', 10 );
	add_action( 'resta_blog_details_wrap_end', 'resta_blog_details_wrap_end_cb', 10 );

	/**
	 * Hook for blog posts title.
	 */
	add_action( 'resta_blog_posts_title', 'resta_blog_posts_title_cb', 10 );

	/**
	 * Hook for blog posts meta.
	 */
	add_action( 'resta_blog_posts_meta', 'resta_blog_posts_meta_cb', 10 );

	/**
	 * Hook for blog posts excerpt.
	 */
	add_action( 'resta_blog_posts_excerpt', 'resta_blog_posts_excerpt_cb', 10 );
	// add_action( 'resta_blog_posts_excerpt', 'resta_blog_read_more_cb', 10 );

	/**
	 * Hook for blog posts info links.
	 */
	add_action( 'resta_blog_posts_info_link', 'resta_blog_posts_info_link_cb', 10 );

	/**
	 * Hook for blog posts content.
	 */
	add_action( 'resta_blog_posts_content', 'resta_blog_posts_content_cb', 10 );
	
	/**
	 * Hook for blog single post social share option.
	 */
	add_action( 'resta_blog_posts_share', 'resta_blog_posts_share_cb', 10 );

	/**
	 * Hook for blog sidebar.
	 */
	add_action( 'resta_blog_sidebar', 'resta_blog_sidebar_cb', 10 );
	
	/**
	 * Hook for blog single post meta category, tag, next - previous link and comments form.
	 */
	add_action( 'resta_blog_single_meta', 'resta_blog_single_meta_cb', 10 );
	
	/**
	 * Hook for page content.
	 */
	add_action( 'resta_page_content', 'resta_page_content_cb', 10 );
	
	
	/**
	 * Hook for 404 page.
	 */
	add_action( 'resta_fof', 'resta_fof_cb', 10 );

	

?>