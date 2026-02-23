<?php
//about theme info
add_action( 'admin_menu', 'campus_education_gettingstarted' );
function campus_education_gettingstarted() {    	
	add_theme_page( esc_html__('Get Started', 'campus-education'), esc_html__('Get Started', 'campus-education'), 'edit_theme_options', 'campus_education_guide', 'campus_education_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function campus_education_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', get_template_directory_uri() . '/inc/getting-started/getting-started.css');
}
add_action('admin_enqueue_scripts', 'campus_education_admin_theme_style');

//guidline for about theme
function campus_education_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'campus-education' );
?>
<div class="wrapper-info">
	<div class="col-left">
		<div class="intro">
			<h3><?php esc_html_e( 'Welcome to Campus Education WordPress Theme', 'campus-education' ); ?></h3>
		</div>
		<div class="color_bg_blue">
			<p>Version: <?php echo esc_html($theme['Version']);?></p>
				<p class="intro_version"><?php esc_html_e( 'Congratulations! You are about to use the most easy to use and felxible WordPress theme.', 'campus-education' ); ?></p>
				<div class="blink">
					<h4><?php esc_html_e( 'Theme Created By Themesglance', 'campus-education' ); ?></h4>
				</div>
			<div class="intro-text"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/themesglance-logo.png" alt="" /></div>
			<div class="coupon-code"><?php esc_html_e( 'Get', 'campus-education' ); ?> <span><?php esc_html_e( '20% off', 'campus-education' ); ?></span> <?php esc_html_e( 'on Premium Theme with the discount code: ', 'campus-education' ); ?> <span><?php esc_html_e( '" Get20 "', 'campus-education' ); ?></span></div>
		</div>
		<div class="started">
			<h3><?php esc_html_e( 'Lite Theme Info', 'campus-education' ); ?></h3>
			<p><?php esc_html_e( 'Campus Education is a visually appealing, engaging and informative education WordPress theme for high schools, colleges, campuses, universities, coaching centres, e-learning portals, teaching academies, secondary schools and other LMS. With profound customization, you can change the look of the site to make it the best fit for kindergartens, preschools, day care centres and primary schools.  The theme is responsive, translation ready and cross-browser compatible. Banners and sliders can be used to make it more impacting. This education WordPress theme has proper placement of call to action buttons to invoke visitors to take actions in your favour. Social media icons can help you link to maximum people in just a few clicks. Standard design pattern is followed to make it SEO ready. Built on Bootstrap framework, it encourages easy usage of the theme. Customization is its powerful tool that can change the look and feel of the website.', 'campus-education')?></p>
			<hr>
			<h3><?php esc_html_e( 'Help Docs', 'campus-education' ); ?></h3>
			<ul>
				<p><?php esc_html_e( 'Campus Education', 'campus-education' ); ?> <a href="<?php echo esc_url( CAMPUS_EDUCATION_THEMESGLANCE_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'campus-education' ); ?></a></p>
			</ul>
			<hr>
			<h3><?php esc_html_e( 'Get started with Campus Education Theme', 'campus-education' ); ?></h3>
			<div class="col-left-inner"> 
				<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/free-screenshot.png" alt="" />
			</div>		
			<div class="col-right-inner">
				<p><?php esc_html_e( 'Go to', 'campus-education' ); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizer', 'campus-education' ); ?> </a> <?php esc_html_e( 'and start customizing your website', 'campus-education' ); ?></p>
				<ul>
					<li><?php esc_html_e( 'Easily customizable ', 'campus-education' ); ?> </li>
					<li><?php esc_html_e( 'Absolutely free', 'campus-education' ); ?> </li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-area">
			<h3><?php esc_html_e('Premium Theme Information', 'campus-education'); ?></h3>
			<hr>
		</div>
		<div class="centerbold">
			<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/responsive.png" alt="" />
			<hr class="firsthr">
			<a href="<?php echo esc_url( CAMPUS_EDUCATION_THEMESGLANCE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'campus-education'); ?></a>
			<a href="<?php echo esc_url( CAMPUS_EDUCATION_THEMESGLANCE_PRO_THEME_URL ); ?>"><?php esc_html_e('Buy Pro', 'campus-education'); ?></a>
			<a href="<?php echo esc_url( CAMPUS_EDUCATION_THEMESGLANCE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'campus-education'); ?></a>
			<hr class="secondhr">
		</div>
		<h3><?php esc_html_e( 'PREMIUM THEME FEATURES', 'campus-education'); ?></h3>
		<ul>
		 	<li><?php esc_html_e( 'Slider with unlimited slides', 'campus-education'); ?></li>
		 	<li><?php esc_html_e( 'Custom Posttype for "courses" listing', 'campus-education'); ?></li>
		 	<li><?php esc_html_e( 'Custom Posttype for "Events" listing', 'campus-education'); ?></li>
		 	<li><?php esc_html_e( 'Video Section', 'campus-education'); ?></li>
		 	<li><?php esc_html_e( 'Search courses', 'campus-education'); ?></li>
		 	<li><?php esc_html_e( 'Courses categories listing', 'campus-education'); ?></li>
		 	<li><?php esc_html_e( 'Gallery Plugin with shortcode', 'campus-education'); ?></li>
		 	<li><?php esc_html_e( 'Custom Posttype for "Instructor" listing', 'campus-education'); ?></li>
		 	<li><?php esc_html_e( 'Social Icon widget', 'campus-education'); ?></li>
		 	<li><?php esc_html_e( 'Blog Post section on home', 'campus-education'); ?></li>
		 	<li><?php esc_html_e( 'Newsletter with contact form 7', 'campus-education'); ?></li>
		 	<li><?php esc_html_e( 'Woocommerce Product section on home', 'campus-education'); ?></li>
		 	<li><?php esc_html_e( 'Record Section', 'campus-education'); ?></li>
		 	<li><?php esc_html_e( 'Contact widget for footer', 'campus-education'); ?></li>
		 	<li><?php esc_html_e( 'Contact page Template', 'campus-education'); ?></li>
		 	<li><?php esc_html_e( 'Recent Post Widget with thumbnails', 'campus-education'); ?></li>
		 	<li><?php esc_html_e( 'Blog full width, With Left and Right sidebar Template', 'campus-education'); ?></li>
		</ul>
	</div>
	<div class="service">
		<div class="col-lg-3 col-md-3">
			<h3><span class="dashicons dashicons-media-document"></span> <?php esc_html_e('Get Support', 'campus-education'); ?></h3>
			<ol>
				<li>
					<a href="<?php echo esc_url( CAMPUS_EDUCATION_THEMESGLANCE_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'campus-education'); ?></a>
				</li>
			</ol>
		</div>
		<div class="col-lg-3 col-md-3">
			<h3><span class="dashicons dashicons-welcome-widgets-menus"></span> <?php esc_html_e('Getting Started', 'campus-education'); ?></h3>
			<ol>
				<li> <?php esc_html_e('Start', 'campus-education'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'campus-education'); ?></a> <?php esc_html_e('your website.', 'campus-education'); ?></li>
			</ol>
		</div>
		<div class="col-lg-3 col-md-3">
			<h3><span class="dashicons dashicons-star-filled"></span> <?php esc_html_e('Rate This Theme', 'campus-education'); ?></h3>
			<ol>
				<li>
					<a href="<?php echo esc_url( CAMPUS_EDUCATION_THEMESGLANCE_REVIEW ); ?>" target="_blank"><?php esc_html_e('Rate it here', 'campus-education'); ?></a>
				</li>
			</ol>
		</div>
		<div class="col-lg-3 col-md-3">
			<h3><span class="dashicons dashicons-editor-help"></span> <?php esc_html_e( 'Help Docs', 'campus-education' ); ?></h3>
			<ol>
				<li><?php esc_html_e( 'Campus Education Lite', 'campus-education' ); ?> <a href="<?php echo esc_url( CAMPUS_EDUCATION_THEMESGLANCE_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'campus-education' ); ?></a></li>
			</ol>
		</div>
	</div>
</div>
<?php } ?>