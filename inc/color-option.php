<?php
	
	$campus_education_first_theme_color = get_theme_mod('campus_education_first_theme_color');

	$campus_education_second_theme_color = get_theme_mod('campus_education_second_theme_color');

	$custom_css = '';

	if($campus_education_first_theme_color != false){
		$custom_css .=' #footer input[type="submit"], .bradcrumbs a:hover, .bradcrumbs span, #sidebar .tagcloud a:hover, .nav-menu ul ul a, .page-template-custom-front-page .top-bar, .top-bar, h1.page-title, h1.search-title , #slider .carousel-control-prev-icon, #slider .carousel-control-next-icon, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, .post-info, .blogbtn a, .inner, .footerinner .tagcloud a:hover, #sidebar input[type="submit"], .pagination .current, span.meta-nav, .tags a:hover, #comments a.comment-reply-link{';
			$custom_css .='background-color: '.esc_html($campus_education_first_theme_color).';';
		$custom_css .='}';
	}
	if($campus_education_first_theme_color != false){
		$custom_css .=' .nav-menu ul li a:active, .nav-menu ul li a:hover, #sidebar ul li a:hover, a, .nav-menu a:hover, .blog-sec h2 a, .more-btn a, .border-image i, .footerinner ul li a:hover,  span.post-title , .tags a i{';
			$custom_css .='color: '.esc_html($campus_education_first_theme_color).';';
		$custom_css .='}';
	}
	if($campus_education_first_theme_color != false){
		$custom_css .='  #sidebar form, .pagination .current, .pagination a:hover, .tags a:hover, .nav-menu ul ul {';
			$custom_css .='border-color: '.esc_html($campus_education_first_theme_color).';';
		$custom_css .='}';
	}
	if($campus_education_first_theme_color != false){
		$custom_css .=' 
		@media screen and (max-width:1000px){
			.nav-menu .current_page_item > a, .nav-menu .current-menu-item > a, .nav-menu .current_page_ancestor > a, nav-menu ul li a:hover{';
			$custom_css .='color: '.esc_html($campus_education_first_theme_color).';';
		$custom_css .='} }';
	}
	if($campus_education_first_theme_color != false){
		$custom_css .=' 
		@media screen and (max-width:1000px){
			 .nav-menu ul li a:hover{';
			$custom_css .='border-left-color: '.esc_html($campus_education_first_theme_color).' !important;';
		$custom_css .='} }';
	}


	if($campus_education_second_theme_color != false){
		$custom_css .=' input[type="submit"], a.button, #comments a.comment-reply-link:hover, span.page-number,span.page-links-title, .nav-menu ul ul a:hover, .donate-link:hover, #slider, .more-btn a:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .blogbtn a:hover, #footer, .bradcrumbs a , #comments input[type="submit"].submit, .pagination a:hover, .diamond, .diamond1, hr.hr-border {';
			$custom_css .='background-color: '.esc_html($campus_education_second_theme_color).';';
		$custom_css .='}';
	}
	if($campus_education_second_theme_color != false){
		$custom_css .=' p.bold-font,  a:hover, .nav-menu a, .social-media i:hover, .logo p, #welcome-campus h2, #welcome-campus h3 a, #welcome-campus p, .description p, .title-box h1, #wrapper h1, .contact-details p, .donate-link a, .logo h1 a, .logo p.site-title a,.post-info span,.post-info i, .blogbtn a, #sidebar h3, span.meta-nav,.tags a:hover, #comments a.comment-reply-link, #footer .copyright p, #footer .copyright p a,.bradcrumbs a:hover{';
			$custom_css .='color: '.esc_html($campus_education_second_theme_color).';';
		$custom_css .='}';
	}
	if($campus_education_second_theme_color != false){
		$custom_css .='#sidebar h3, .pagination span, .pagination a, .donate-link{';
			$custom_css .='border-color: '.esc_html($campus_education_second_theme_color).';';
		$custom_css .='}';
	}

	// Layout Options
	$theme_layout = get_theme_mod( 'campus_education_theme_layout_options','Default Theme');
    if($theme_layout == 'Default Theme'){
		$custom_css .='body{';
			$custom_css .='max-width: 100%;';
		$custom_css .='}';
	}else if($theme_layout == 'Container Theme'){
		$custom_css .='body{';
			$custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$custom_css .='}';
	}else if($theme_layout == 'Box Container Theme'){
		$custom_css .='body{';
			$custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$custom_css .='}';
	}


	/*-------------- Slider Opacity -------------------*/

	$slider_layout = get_theme_mod( 'campus_education_slider_opacity_color','0.4');
	if($slider_layout == '0'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0';
		$custom_css .='}';
	}else if($slider_layout == '0.1'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.1';
		$custom_css .='}';
	}else if($slider_layout == '0.2'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.2';
		$custom_css .='}';
	}else if($slider_layout == '0.3'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.3';
		$custom_css .='}';
	}else if($slider_layout == '0.4'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.4';
		$custom_css .='}';
	}else if($slider_layout == '0.5'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.5';
		$custom_css .='}';
	}else if($slider_layout == '0.6'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.6';
		$custom_css .='}';
	}else if($slider_layout == '0.7'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.7';
		$custom_css .='}';
	}else if($slider_layout == '0.8'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.8';
		$custom_css .='}';
	}else if($slider_layout == '0.9'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.9';
		$custom_css .='}';
	}

	/*----------- Slider Content Layout ----------------*/

	$slider_layout = get_theme_mod( 'campus_education_slider_alignment_option','Center Align');
    if($slider_layout == 'Left Align'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$custom_css .='text-align:left;';
		$custom_css .='}';
	}else if($slider_layout == 'Center Align'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$custom_css .='text-align:center;';
		$custom_css .='}';
	}else if($slider_layout == 'Right Align'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$custom_css .='text-align:right;';
		$custom_css .='}';
	}

	/*--------- Preloader Color Option -------*/
	$campus_education_preloader_color = get_theme_mod('campus_education_preloader_color');

	if($campus_education_preloader_color != false){
		$custom_css .=' .tg-loader{';
			$custom_css .='border-color: '.esc_html($campus_education_preloader_color).';';
		$custom_css .='} ';
		$custom_css .=' .tg-loader-inner{';
			$custom_css .='background-color: '.esc_html($campus_education_preloader_color).';';
		$custom_css .='} ';
	}

	$campus_education_preloader_bg_color = get_theme_mod('campus_education_preloader_bg_color');

	if($campus_education_preloader_bg_color != false){
		$custom_css .=' #overlayer{';
			$custom_css .='background-color: '.esc_html($campus_education_preloader_bg_color).';';
		$custom_css .='} ';
	}

	/*-------- Topbar hide -----------*/

	$topbar = get_theme_mod('campus_education_topbar_icon');

	if($topbar == false){
		$custom_css .=' .top-bar{';
			$custom_css .='border-top: 2px solid #ff8634;';
		$custom_css .='} ';
	}

	/*------------ Button Settings option-----------------*/

	$top_button_padding = get_theme_mod('campus_education_top_button_padding');
	$bottom_button_padding = get_theme_mod('campus_education_bottom_button_padding');
	$left_button_padding = get_theme_mod('campus_education_left_button_padding');
	$right_button_padding = get_theme_mod('campus_education_right_button_padding');
	if($top_button_padding != false || $bottom_button_padding != false || $left_button_padding != false || $right_button_padding != false){
		$custom_css .='.more-btn a, .blogbtn a, #comments input[type="submit"].submit{';
			$custom_css .='padding-top: '.esc_html($top_button_padding).'px; padding-bottom: '.esc_html($bottom_button_padding).'px; padding-left: '.esc_html($left_button_padding).'px; padding-right: '.esc_html($right_button_padding).'px; display:inline-block;';
		$custom_css .='}';
	}

	$button_border_radius = get_theme_mod('campus_education_button_border_radius');
	$custom_css .='.more-btn a, .blogbtn a, #comments input[type="submit"].submit{';
		$custom_css .='border-radius: '.esc_html($button_border_radius).'px;';
	$custom_css .='}';