<?php
	
	// limit title length for the blog page *****************************************************************
	function the_titlesmall($before = '', $after = '', $echo = true, $length = false) { $title = get_the_title();

		if ( $length && is_numeric($length) ) {
			$title = mb_substr( $title, 0, $length, 'utf-8' );
		}
	
		if ( strlen($title)> 0 ) {
			$title = apply_filters('the_titlesmall', $before . $title . $after, $before, $after);
			if ( $echo )
				echo $title;
			else
				return $title;
		}
	}
	
	function the_excerptforblog($before = '', $after = '', $echo = true, $length=false){ 
		$excerpt = get_the_excerpt();
		if ( $length && is_numeric($length) ) {
			$excerpt = mb_substr( $excerpt, 0, $length, 'utf-8' );
		}
		if ( strlen($excerpt)> 0 ) {
			$excerpt = apply_filters('the_excerptforblog',  $before . $excerpt . $after, $before, $after);
			if ( $echo )
				echo $excerpt;
			else
				return $excerpt;
		}
	}
	
	
	
	register_nav_menus(array(
		'primary' => __( 'Men&uacute; Principal'  )
	));
	
	add_theme_support( 'post-thumbnails' ); 
	
	function add_scripts_to_page(){
		wp_enqueue_style('owl-carrousel', get_template_directory_uri().'/css/owl.carousel.css');
		wp_enqueue_style('owl-theme', get_template_directory_uri().'/css/owl.theme.css');
		wp_enqueue_style('ga-theme-style', get_template_directory_uri().'/style.css?v=1.3');
		wp_enqueue_style('main-style', get_template_directory_uri().'/css/main.css');
		
		wp_register_script('complete-js-library', get_template_directory_uri().'/js/lib.js', array('jquery'), '', true);
		wp_register_script('main-script', get_template_directory_uri().'/js/main.js', '', '', true);
		wp_enqueue_script('complete-js-library');
		wp_enqueue_script('app-script');
		wp_enqueue_script('main-script');
	}
	
	add_action('wp_enqueue_scripts', 'add_scripts_to_page');
		require get_template_directory().'/walker.php' ;
	
	// homepage excerp length in words **********************************************************************	
	/*function wpdocs_custom_excerpt_length( $length ) {
	    return 20;
	}
	add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );*/
	
	// disable the admin bar ********************************************************************************
	show_admin_bar(false);
	
	

	