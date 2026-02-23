<?php
/**
 * Campus Education Theme Customizer
 * @package Campus Education
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function campus_education_customize_register( $wp_customize ) {

	class Campus_Education_WP_Customize_Range_Control extends WP_Customize_Control{
	    public $type = 'custom_range';
	    public function enqueue(){
	        wp_enqueue_script(
	            'cs-range-control',
	            false,
	            true
	        );
	    }
	    public function render_content(){?>
	        <label>
	            <?php if ( ! empty( $this->label )) : ?>
	                <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
	            <?php endif; ?>
	            <div class="cs-range-value"><?php echo esc_attr($this->value()); ?></div>
	            <input data-input-type="range" type="range" <?php $this->input_attrs(); ?> value="<?php echo esc_attr($this->value()); ?>" <?php $this->link(); ?> />
	            <?php if ( ! empty( $this->description )) : ?>
	                <span class="description customize-control-description"><?php echo esc_html($this->description); ?></span>
	            <?php endif; ?>
	        </label>
        <?php }
	}	

	//add home page setting pannel
	$wp_customize->add_panel( 'campus_education_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'campus-education' ),
	    'description' => __( 'Description of what this panel does.', 'campus-education' ),
	) );

	// Add the Theme Color Option section.
	$wp_customize->add_section( 'campus_education_theme_color_option', array( 
		'panel' => 'campus_education_panel_id', 
		'title' => esc_html__( 'Global Color Settings', 'campus-education' ) 
	) );

  	$wp_customize->add_setting( 'campus_education_first_theme_color', array(
	    'default' => '#ff8634',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'campus_education_first_theme_color', array(
  		'label' => 'Color Option 1',
	    'description' => __('One can change complete theme global color settings on just one click.', 'campus-education'),
	    'section' => 'campus_education_theme_color_option',
	    'settings' => 'campus_education_first_theme_color',
  	)));

  	$wp_customize->add_setting( 'campus_education_second_theme_color', array(
	    'default' => '#13182c',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'campus_education_second_theme_color', array(
  		'label' => 'Color Option 2',
	    'description' => __('One can change complete theme global color settings on just one click.', 'campus-education'),
	    'section' => 'campus_education_theme_color_option',
	    'settings' => 'campus_education_second_theme_color',
  	)));

	// font array
	$font_array = array(
        '' => 'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' => 'Acme',
        'Anton' => 'Anton',
        'Architects Daughter' => 'Architects Daughter',
        'Arimo' => 'Arimo',
        'Arsenal' => 'Arsenal', 
        'Arvo' => 'Arvo',
        'Alegreya' => 'Alegreya',
        'Alfa Slab One' => 'Alfa Slab One',
        'Averia Serif Libre' => 'Averia Serif Libre',
        'Bangers' => 'Bangers', 
        'Boogaloo' => 'Boogaloo',
        'Bad Script' => 'Bad Script',
        'Bitter' => 'Bitter',
        'Bree Serif' => 'Bree Serif',
        'BenchNine' => 'BenchNine', 
        'Cabin' => 'Cabin', 
        'Cardo' => 'Cardo',
        'Courgette' => 'Courgette',
        'Cherry Swash' => 'Cherry Swash',
        'Cormorant Garamond' => 'Cormorant Garamond',
        'Crimson Text' => 'Crimson Text',
        'Cuprum' => 'Cuprum', 
        'Cookie' => 'Cookie', 
        'Chewy' => 'Chewy', 
        'Days One' => 'Days One', 
        'Dosis' => 'Dosis',
        'Droid Sans' => 'Droid Sans',
        'Economica' => 'Economica',
        'Fredoka One' => 'Fredoka One',
        'Fjalla One' => 'Fjalla One',
        'Francois One' => 'Francois One',
        'Frank Ruhl Libre' => 'Frank Ruhl Libre',
        'Gloria Hallelujah' => 'Gloria Hallelujah',
        'Great Vibes' => 'Great Vibes',
        'Handlee' => 'Handlee', 
        'Hammersmith One' => 'Hammersmith One',
        'Inconsolata' => 'Inconsolata', 
        'Indie Flower' => 'Indie Flower', 
        'IM Fell English SC' => 'IM Fell English SC', 
        'Julius Sans One' => 'Julius Sans One',
        'Josefin Slab' => 'Josefin Slab', 
        'Josefin Sans' => 'Josefin Sans', 
        'Kanit' => 'Kanit', 
        'Lobster' => 'Lobster', 
        'Lato' => 'Lato',
        'Lora' => 'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather', 
        'Monda' => 'Monda',
        'Montserrat' => 'Montserrat',
        'Muli' => 'Muli', 
        'Marck Script' => 'Marck Script',
        'Noto Serif' => 'Noto Serif',
        'Open Sans' => 'Open Sans', 
        'Overpass' => 'Overpass',
        'Overpass Mono' => 'Overpass Mono',
        'Oxygen' => 'Oxygen', 
        'Orbitron' => 'Orbitron', 
        'Patua One' => 'Patua One', 
        'Pacifico' => 'Pacifico',
        'Padauk' => 'Padauk', 
        'Playball' => 'Playball',
        'Playfair Display' => 'Playfair Display', 
        'PT Sans' => 'PT Sans',
        'Philosopher' => 'Philosopher',
        'Permanent Marker' => 'Permanent Marker',
        'Poiret One' => 'Poiret One', 
        'Quicksand' => 'Quicksand', 
        'Quattrocento Sans' => 'Quattrocento Sans', 
        'Raleway' => 'Raleway', 
        'Rubik' => 'Rubik', 
        'Rokkitt' => 'Rokkitt', 
        'Russo One' => 'Russo One', 
        'Righteous' => 'Righteous', 
        'Slabo' => 'Slabo', 
        'Source Sans Pro' => 'Source Sans Pro', 
        'Shadows Into Light Two' =>'Shadows Into Light Two', 
        'Shadows Into Light' => 'Shadows Into Light', 
        'Sacramento' => 'Sacramento', 
        'Shrikhand' => 'Shrikhand', 
        'Tangerine' => 'Tangerine',
        'Ubuntu' => 'Ubuntu', 
        'VT323' => 'VT323', 
        'Varela Round' => 'Varela Round', 
        'Vampiro One' => 'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
    );

	//Typography
	$wp_customize->add_section( 'campus_education_typography', array(
    	'title'      => __( 'Typography', 'campus-education' ),
		'priority'   => null,
		'panel' => 'campus_education_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'campus_education_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'campus_education_paragraph_color', array(
		'label' => __('Paragraph Color', 'campus-education'),
		'section' => 'campus_education_typography',
		'settings' => 'campus_education_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('campus_education_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'campus_education_sanitize_choices'
	));
	$wp_customize->add_control(
	    'campus_education_paragraph_font_family', array(
	    'section'  => 'campus_education_typography',
	    'label'    => __( 'Paragraph Fonts','campus-education'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting('campus_education_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('campus_education_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','campus-education'),
		'section'	=> 'campus_education_typography',
		'setting'	=> 'campus_education_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'campus_education_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'campus_education_atag_color', array(
		'label' => __('"a" Tag Color', 'campus-education'),
		'section' => 'campus_education_typography',
		'settings' => 'campus_education_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('campus_education_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'campus_education_sanitize_choices'
	));
	$wp_customize->add_control(
	    'campus_education_atag_font_family', array(
	    'section'  => 'campus_education_typography',
	    'label'    => __( '"a" Tag Fonts','campus-education'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'campus_education_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'campus_education_li_color', array(
		'label' => __('"li" Tag Color', 'campus-education'),
		'section' => 'campus_education_typography',
		'settings' => 'campus_education_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('campus_education_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'campus_education_sanitize_choices'
	));
	$wp_customize->add_control(
	    'campus_education_li_font_family', array(
	    'section'  => 'campus_education_typography',
	    'label'    => __( '"li" Tag Fonts','campus-education'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'campus_education_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'campus_education_h1_color', array(
		'label' => __('H1 Color', 'campus-education'),
		'section' => 'campus_education_typography',
		'settings' => 'campus_education_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('campus_education_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'campus_education_sanitize_choices'
	));
	$wp_customize->add_control(
	    'campus_education_h1_font_family', array(
	    'section'  => 'campus_education_typography',
	    'label'    => __( 'H1 Fonts','campus-education'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('campus_education_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('campus_education_h1_font_size',array(
		'label'	=> __('H1 Font Size','campus-education'),
		'section'	=> 'campus_education_typography',
		'setting'	=> 'campus_education_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'campus_education_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'campus_education_h2_color', array(
		'label' => __('h2 Color', 'campus-education'),
		'section' => 'campus_education_typography',
		'settings' => 'campus_education_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('campus_education_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'campus_education_sanitize_choices'
	));
	$wp_customize->add_control(
	    'campus_education_h2_font_family', array(
	    'section'  => 'campus_education_typography',
	    'label'    => __( 'h2 Fonts','campus-education'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('campus_education_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('campus_education_h2_font_size',array(
		'label'	=> __('h2 Font Size','campus-education'),
		'section'	=> 'campus_education_typography',
		'setting'	=> 'campus_education_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'campus_education_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'campus_education_h3_color', array(
		'label' => __('h3 Color', 'campus-education'),
		'section' => 'campus_education_typography',
		'settings' => 'campus_education_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('campus_education_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'campus_education_sanitize_choices'
	));
	$wp_customize->add_control(
	    'campus_education_h3_font_family', array(
	    'section'  => 'campus_education_typography',
	    'label'    => __( 'h3 Fonts','campus-education'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('campus_education_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('campus_education_h3_font_size',array(
		'label'	=> __('h3 Font Size','campus-education'),
		'section'	=> 'campus_education_typography',
		'setting'	=> 'campus_education_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'campus_education_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'campus_education_h4_color', array(
		'label' => __('h4 Color', 'campus-education'),
		'section' => 'campus_education_typography',
		'settings' => 'campus_education_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('campus_education_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'campus_education_sanitize_choices'
	));
	$wp_customize->add_control(
	    'campus_education_h4_font_family', array(
	    'section'  => 'campus_education_typography',
	    'label'    => __( 'h4 Fonts','campus-education'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('campus_education_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('campus_education_h4_font_size',array(
		'label'	=> __('h4 Font Size','campus-education'),
		'section'	=> 'campus_education_typography',
		'setting'	=> 'campus_education_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'campus_education_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'campus_education_h5_color', array(
		'label' => __('h5 Color', 'campus-education'),
		'section' => 'campus_education_typography',
		'settings' => 'campus_education_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('campus_education_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'campus_education_sanitize_choices'
	));
	$wp_customize->add_control(
	    'campus_education_h5_font_family', array(
	    'section'  => 'campus_education_typography',
	    'label'    => __( 'h5 Fonts','campus-education'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('campus_education_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('campus_education_h5_font_size',array(
		'label'	=> __('h5 Font Size','campus-education'),
		'section'	=> 'campus_education_typography',
		'setting'	=> 'campus_education_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'campus_education_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'campus_education_h6_color', array(
		'label' => __('h6 Color', 'campus-education'),
		'section' => 'campus_education_typography',
		'settings' => 'campus_education_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('campus_education_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'campus_education_sanitize_choices'
	));
	$wp_customize->add_control(
	    'campus_education_h6_font_family', array(
	    'section'  => 'campus_education_typography',
	    'label'    => __( 'h6 Fonts','campus-education'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('campus_education_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('campus_education_h6_font_size',array(
		'label'	=> __('h6 Font Size','campus-education'),
		'section'	=> 'campus_education_typography',
		'setting'	=> 'campus_education_h6_font_size',
		'type'	=> 'text'
	));

    //Social Icons(topbar)
	$wp_customize->add_section('campus_education_social_media',array(
		'title'	=> __('Social Icon','campus-education'),
		'description'	=> __('Add Header Content here','campus-education'),
		'priority'	=> null,
		'panel' => 'campus_education_panel_id',
	));

	$wp_customize->add_setting('campus_education_facebook',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('campus_education_facebook',array(
		'label'	=> __('Add Facebook link','campus-education'),
		'section'	=> 'campus_education_social_media',
		'setting'	=> 'campus_education_facebook',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('campus_education_twitter',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('campus_education_twitter',array(
		'label'	=> __('Add Twitter link','campus-education'),
		'section'	=> 'campus_education_social_media',
		'setting'	=> 'campus_education_twitter',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('campus_education_pintrest',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('campus_education_pintrest',array(
		'label'	=> __('Add Pintrest link','campus-education'),
		'section'	=> 'campus_education_social_media',
		'setting'	=> 'campus_education_pintrest',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('campus_education_insta',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('campus_education_insta',array(
		'label'	=> __('Add Instagram link','campus-education'),
		'section'	=> 'campus_education_social_media',
		'setting'	=> 'campus_education_insta',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('campus_education_linkdin',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('campus_education_linkdin',array(
		'label'	=> __('Add Linkdin link','campus-education'),
		'section'	=> 'campus_education_social_media',
		'setting'	=> 'campus_education_linkdin',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('campus_education_youtube',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('campus_education_youtube',array(
		'label'	=> __('Add Youtube link','campus-education'),
		'section'	=> 'campus_education_social_media',
		'setting'	=> 'campus_education_youtube',
		'type'	=> 'url'
	));

	//Topbar section
	$wp_customize->add_section('campus_education_topbar_icon',array(
		'title'	=> __('Topbar Section','campus-education'),
		'description'	=> __('Add Header Content here','campus-education'),
		'priority'	=> null,
		'panel' => 'campus_education_panel_id',
	));

	$wp_customize->add_setting('campus_education_top_header',array(
       'default' => true,
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('campus_education_top_header',array(
       'type' => 'checkbox',
       'label' => __('Enable Top Header','campus-education'),
       'section' => 'campus_education_topbar_icon'
    ));

    $wp_customize->add_setting('campus_education_sticky_header',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('campus_education_sticky_header',array(
       'type' => 'checkbox',
       'label' => __('Stick header on Desktop','campus-education'),
       'section' => 'campus_education_topbar_icon'
    ));

	$wp_customize->add_setting('campus_education_email_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('campus_education_email_text',array(
		'label'	=> __('Add Email Text','campus-education'),
		'section'	=> 'campus_education_topbar_icon',
		'setting'	=> 'campus_education_email_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('campus_education_email',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('campus_education_email',array(
		'label'	=> __('Add Email Address','campus-education'),
		'section'	=> 'campus_education_topbar_icon',
		'setting'	=> 'campus_education_email',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('campus_education_call_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('campus_education_call_text',array(
		'label'	=> __('Add Contact Text','campus-education'),
		'section'	=> 'campus_education_topbar_icon',
		'setting'	=> 'campus_education_call_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('campus_education_call_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('campus_education_call_number',array(
		'label'	=> __('Add Contact Number','campus-education'),
		'section'	=> 'campus_education_topbar_icon',
		'setting'	=> 'campus_education_call_number',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('campus_education_button_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('campus_education_button_text',array(
		'label'	=> __('Add Button Text','campus-education'),
		'section'	=> 'campus_education_topbar_icon',
		'setting'	=> 'campus_education_button_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('campus_education_button_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('campus_education_button_link',array(
		'label'	=> __('Add Button Link','campus-education'),
		'section'	=> 'campus_education_topbar_icon',
		'setting'	=> 'campus_education_button_link',
		'type'		=> 'url'
	));

	//home page slider
	$wp_customize->add_section( 'campus_education_slider_section' , array(
    	'title' => __( 'Slider Settings', 'campus-education' ),
		'priority'   => null,
		'panel' => 'campus_education_panel_id'
	) );

	$wp_customize->add_setting('campus_education_slider_hide',array(
       'default' => 'false',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('campus_education_slider_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide slider','campus-education'),
       'section' => 'campus_education_slider_section',
    ));

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'campus_education_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'campus_education_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'campus_education_slider_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'campus-education' ),
			'section'  => 'campus_education_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}

	//content Alignment
    $wp_customize->add_setting('campus_education_slider_alignment_option',array(
    'default' => __('Center Align','campus-education'),
        'sanitize_callback' => 'campus_education_sanitize_choices'
	));
	$wp_customize->add_control('campus_education_slider_alignment_option',array(
        'type' => 'radio',
        'label' => __('Slider Content Alignment','campus-education'),
        'section' => 'campus_education_slider_section',
        'choices' => array(
            'Center Align' => __('Center Align','campus-education'),
            'Left Align' => __('Left Align','campus-education'),
            'Right Align' => __('Right Align','campus-education'),
        ),
	) );

    //Slider excerpt
	$wp_customize->add_setting( 'campus_education_slider_excerpt_number', array(
		'default'              => 15,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'campus_education_slider_excerpt_number', array(
		'label'       => esc_html__( 'Slider Excerpt length','campus-education' ),
		'section'     => 'campus_education_slider_section',
		'type'        => 'number',
		'settings'    => 'campus_education_slider_excerpt_number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Opacity
	$wp_customize->add_setting('campus_education_slider_opacity_color',array(
      'default'              => 0.4,
      'sanitize_callback' => 'campus_education_sanitize_choices'
	));
	$wp_customize->add_control( 'campus_education_slider_opacity_color', array(
		'label'       => esc_html__( 'Slider Image Opacity','campus-education' ),
		'section'     => 'campus_education_slider_section',
		'type'        => 'select',
		'settings'    => 'campus_education_slider_opacity_color',
		'choices' => array(
	      '0' =>  esc_attr('0','campus-education'),
	      '0.1' =>  esc_attr('0.1','campus-education'),
	      '0.2' =>  esc_attr('0.2','campus-education'),
	      '0.3' =>  esc_attr('0.3','campus-education'),
	      '0.4' =>  esc_attr('0.4','campus-education'),
	      '0.5' =>  esc_attr('0.5','campus-education'),
	      '0.6' =>  esc_attr('0.6','campus-education'),
	      '0.7' =>  esc_attr('0.7','campus-education'),
	      '0.8' =>  esc_attr('0.8','campus-education'),
	      '0.9' =>  esc_attr('0.9','campus-education')
	  ),
	));

	//Welcome Campus Section
	$wp_customize->add_section('campus_education_campus',array(
		'title'	=> __('Welcome To Our Campus','campus-education'),
		'description'	=> __('Add Welcome To Our Campus sections below.','campus-education'),
		'panel' => 'campus_education_panel_id',
	));

	$wp_customize->add_setting('campus_education_campus_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('campus_education_campus_title',array(
		'label'	=> __('Section Title','campus-education'),
		'section'	=> 'campus_education_campus',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('campus_education_campus_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('campus_education_campus_text',array(
		'label'	=> __('Add Text','campus-education'),
		'section'	=> 'campus_education_campus',
		'type'		=> 'text'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('campus_education_campus_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('campus_education_campus_category',array(
		'type'    => 'select',
		'choices' => $cat_post,
		'label' => __('Select Category to display Latest Post','campus-education'),
		'section' => 'campus_education_campus',
	));

	//layout setting
	$wp_customize->add_section( 'campus_education_theme_layout', array(
    	'title'  => __( 'Blog Settings', 'campus-education' ),
		'priority'   => null,
		'panel' => 'campus_education_panel_id'
	) );

	$wp_customize->add_setting('campus_education_preloader',array(
       'default' => 'true',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('campus_education_preloader',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Preloader','campus-education'),
       'section' => 'campus_education_theme_layout'
    ));

    $wp_customize->add_setting( 'campus_education_preloader_color', array(
	    'default' => '#333333',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'campus_education_preloader_color', array(
  		'label' => __('Preloader Color', 'campus-education'),
	    'section' => 'campus_education_theme_layout',
	    'settings' => 'campus_education_preloader_color',
  	)));

  	$wp_customize->add_setting( 'campus_education_preloader_bg_color', array(
	    'default' => '#ffffff',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'campus_education_preloader_bg_color', array(
  		'label' => __('Preloader Background Color', 'campus-education'),
	    'section' => 'campus_education_theme_layout',
	    'settings' => 'campus_education_preloader_bg_color',
  	)));

	$wp_customize->add_setting('campus_education_theme_layout_options',array(
        'default' => __('Default Theme','campus-education'),
        'sanitize_callback' => 'campus_education_sanitize_choices'
	));
	$wp_customize->add_control('campus_education_theme_layout_options',array(
        'type' => 'radio',
        'label' => __('Theme Layout','campus-education'),
        'section' => 'campus_education_theme_layout',
        'choices' => array(
            'Default Theme' => __('Default Theme','campus-education'),
            'Container Theme' => __('Container Theme','campus-education'),
            'Box Container Theme' => __('Box Container Theme','campus-education'),
        ),
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('campus_education_layout', array(
        'default' => __( 'Right Sidebar', 'campus-education' ),
        'sanitize_callback' => 'campus_education_sanitize_choices'	        
	) );
	$wp_customize->add_control('campus_education_layout', array(
        'type' => 'radio',
        'label' => __( 'Blog Layout', 'campus-education' ),
        'section' => 'campus_education_theme_layout',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','campus-education'),
            'Right Sidebar' => __('Right Sidebar','campus-education'),
            'One Column' => __('One Column','campus-education'),
            'Three Columns' => __('Three Columns','campus-education'),
            'Four Columns' => __('Four Columns','campus-education'),
            'Grid Layout' => __('Grid Layout','campus-education')
        ),
	) );

    $wp_customize->add_setting('campus_education_metafields_date',array(
       'default' => 'true',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('campus_education_metafields_date',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Date ','campus-education'),
       'section' => 'campus_education_theme_layout'
    ));

    $wp_customize->add_setting('campus_education_metafields_author',array(
       'default' => 'true',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('campus_education_metafields_author',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Author','campus-education'),
       'section' => 'campus_education_theme_layout'
    ));

    $wp_customize->add_setting('campus_education_metafields_comment',array(
       'default' => 'true',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('campus_education_metafields_comment',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Comments','campus-education'),
       'section' => 'campus_education_theme_layout'
    ));

    $wp_customize->add_setting('campus_education_blog_post_content',array(
    	'default' => __('Excerpt Content','campus-education'),
        'sanitize_callback' => 'campus_education_sanitize_choices'
	));
	$wp_customize->add_control('campus_education_blog_post_content',array(
        'type' => 'radio',
        'label' => __('Blog Post Content Type','campus-education'),
        'section' => 'campus_education_theme_layout',
        'choices' => array(
            'No Content' => __('No Content','campus-education'),
            'Full Content' => __('Full Content','campus-education'),
            'Excerpt Content' => __('Excerpt Content','campus-education'),
        ),
	) );

    $wp_customize->add_setting( 'campus_education_post_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'campus_education_post_excerpt_number', array(
		'label'       => esc_html__( 'Blog Post Excerpt Number (Max 50)','campus-education' ),
		'section'     => 'campus_education_theme_layout',
		'type'        => 'number',
		'settings'    => 'campus_education_post_excerpt_number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
		'active_callback' => 'campus_education_excerpt_enabled'
	) );

	$wp_customize->add_setting( 'campus_education_button_excerpt_suffix', array(
		'default'   => '...',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'campus_education_button_excerpt_suffix', array(
		'label'       => esc_html__( 'Post Excerpt Suffix','campus-education' ),
		'section'     => 'campus_education_theme_layout',
		'type'        => 'text',
		'settings'    => 'campus_education_button_excerpt_suffix',
		'active_callback' => 'campus_education_excerpt_enabled'
	) );

	// Button option
	$wp_customize->add_section( 'campus_education_button_options', array(
		'title' =>  __( 'Button Options', 'campus-education' ),
		'panel' => 'campus_education_panel_id',
	));

    $wp_customize->add_setting( 'campus_education_blog_button_text', array(
		'default'   => 'Read Full',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'campus_education_blog_button_text', array(
		'label'       => esc_html__( 'Blog Post Button Label','campus-education' ),
		'section'     => 'campus_education_button_options',
		'type'        => 'text',
		'settings'    => 'campus_education_blog_button_text'
	) );

	$wp_customize->add_setting('campus_education_button_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('campus_education_button_padding',array(
		'label'	=> esc_html__('Button Padding','campus-education'),
		'section'=> 'campus_education_button_options',
		'active_callback' => 'campus_education_button_enabled'
	));

	$wp_customize->add_setting('campus_education_top_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('campus_education_top_button_padding',array(
		'label'	=> __('Top','campus-education'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'campus_education_button_options',
		'type'=> 'number',
		'active_callback' => 'campus_education_button_enabled'
	));

	$wp_customize->add_setting('campus_education_bottom_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('campus_education_bottom_button_padding',array(
		'label'	=> __('Bottom','campus-education'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'campus_education_button_options',
		'type'=> 'number',
		'active_callback' => 'campus_education_button_enabled'
	));

	$wp_customize->add_setting('campus_education_left_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('campus_education_left_button_padding',array(
		'label'	=> __('Left','campus-education'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'campus_education_button_options',
		'type'=> 'number',
		'active_callback' => 'campus_education_button_enabled'
	));

	$wp_customize->add_setting('campus_education_right_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('campus_education_right_button_padding',array(
		'label'	=> __('Right','campus-education'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'campus_education_button_options',
		'type'=> 'number',
		'active_callback' => 'campus_education_button_enabled'
	));

	$wp_customize->add_setting( 'campus_education_button_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Campus_Education_WP_Customize_Range_Control( $wp_customize, 'campus_education_button_border_radius', array(
            'label'  => __('Border Radius','campus-education'),
            'section'  => 'campus_education_button_options',
            'description' => __('Measurement is in pixel.','campus-education'),
            'input_attrs' => array(
                'min' => 0,
                'max' => 50,
            ),
			'active_callback' => 'campus_education_button_enabled'
    )));

	//footer text
	$wp_customize->add_section('campus_education_footer_section',array(
		'title'	=> __('Footer Section','campus-education'),
		'panel' => 'campus_education_panel_id'
	));

	$wp_customize->add_setting('campus_education_hide_scroll',array(
        'default' => 'true',
        'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('campus_education_hide_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Back To Top','campus-education'),
      	'section' => 'campus_education_footer_section',
	));

	$wp_customize->add_setting('campus_education_back_to_top',array(
        'default' => __('Right','campus-education'),
        'sanitize_callback' => 'campus_education_sanitize_choices'
	));
	$wp_customize->add_control('campus_education_back_to_top',array(
        'type' => 'radio',
        'label' => __('Back to Top Alignment','campus-education'),
        'section' => 'campus_education_footer_section',
        'choices' => array(
            'Left' => __('Left','campus-education'),
            'Right' => __('Right','campus-education'),
            'Center' => __('Center','campus-education'),
        ),
	) );

	$wp_customize->add_setting('campus_education_footer_widget',array(
        'default'           => '4',
        'sanitize_callback' => 'campus_education_sanitize_choices',
    ));
    $wp_customize->add_control('campus_education_footer_widget',array(
        'type'        => 'radio',
        'label'       => __('No. of Footer columns', 'campus-education'),
        'section'     => 'campus_education_footer_section',
        'description' => __('Select the number of footer columns and add your widgets in the footer.', 'campus-education'),
        'choices' => array(
            '1'     => __('One column', 'campus-education'),
            '2'     => __('Two columns', 'campus-education'),
            '3'     => __('Three columns', 'campus-education'),
            '4'     => __('Four columns', 'campus-education')
        ),
    )); 
	
	$wp_customize->add_setting('campus_education_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('campus_education_text',array(
		'label'	=> __('Copyright Text','campus-education'),
		'description'	=> __('Add some text for footer like copyright etc.','campus-education'),
		'section'	=> 'campus_education_footer_section',
		'type'		=> 'text'
	));	
}
add_action( 'customize_register', 'campus_education_customize_register' );	

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Campus_Education_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Campus_Education_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Campus_Education_Customize_Section_Pro(
			$manager,
			'example_1',
				array(
				'priority'   => 9,
				'title'    => esc_html__( 'Campus Education Pro', 'campus-education' ),
				'pro_text' => esc_html__( 'Go Pro', 'campus-education' ),
				'pro_url'  => esc_url('https://www.themesglance.com/themes/campus-education-wordpress-theme/')
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'campus-education-customize-controls', trailingslashit( get_template_directory_uri() ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'campus-education-customize-controls', trailingslashit( get_template_directory_uri() ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Campus_Education_Customize::get_instance();