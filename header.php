<?php
/**
 * The Header for our theme.
 * @package Campus Education
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'campus-education' ) ); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <?php if(get_theme_mod('campus_education_preloader',true)){ ?>
    <div id="overlayer"></div>
    <span class="tg-loader">
      <span class="tg-loader-inner"></span>
    </span>
  <?php }?>
  <header role="banner">
    <a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'campus-education' ); ?><span class="screen-reader-text"><?php esc_html_e('Skip to Content','campus-education'); ?></span></a>
    <div class="toggle-menu responsive-menu">
      <button onclick="resMenu_open()" role="tab"><i class="fas fa-bars"></i><?php esc_html_e('Menu','campus-education'); ?><span class="screen-reader-text"><?php esc_html_e('Menu','campus-education'); ?></span></button>
    </div>
    <div class="top-bar">
      <div class="container">
        <?php if(get_theme_mod('campus_education_top_header',true)){ ?>
          <div class="top-header">
            <div class="row">
              <div class="col-lg-3 col-md-6">
                <div class="contact-details">
                  <div class="row">
                    <?php if ( get_theme_mod('campus_education_call_text','') != "" ) {?>
                      <div class="col-lg-2 col-md-2 p-0 conatct-font">
                        <i class="fas fa-phone"></i>
                      </div>
                      <div class="col-lg-10 col-md-10 p-0">
                        <?php if ( get_theme_mod('campus_education_call_text','') != "" ) {?>
                          <p class="bold-font"><?php echo esc_html( get_theme_mod('campus_education_call_text','' )); ?></p>
                        <?php }?>
                        <?php if ( get_theme_mod('campus_education_call_number','') != "" ) {?>
                          <p><?php echo esc_html( get_theme_mod('campus_education_call_number','' )); ?></p>
                        <?php }?>
                      </div>
                    <?php }?>
                  </div>
                </div>
              </div>          
              <div class="col-lg-3 col-md-6 p-0">
                <div class="contact-details">
                  <div class="row">
                    <?php if ( get_theme_mod('campus_education_email_text','') != "" ) {?>
                      <div class="col-lg-2 col-md-2 p-0 conatct-font">
                        <i class="fas fa-envelope"></i>
                      </div>
                      <div class="col-lg-10 col-md-10 p-0">
                        <?php if ( get_theme_mod('campus_education_email_text','') != "" ) {?>
                          <p class="bold-font"><?php echo esc_html( get_theme_mod('campus_education_email_text','') ); ?></p>
                        <?php }?>
                        <?php if ( get_theme_mod('campus_education_email','') != "" ) {?>
                          <p><?php echo esc_html( get_theme_mod('campus_education_email','') ); ?></p>
                        <?php }?>
                      </div>
                    <?php }?>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-8">
                <div class="social-media">
                  <?php if( get_theme_mod( 'campus_education_facebook' ) != '') { ?>
                    <span class="diamond"><a href="<?php echo esc_url( get_theme_mod( 'campus_education_facebook','' ) ); ?>"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php esc_html_e('Facebook','campus-education'); ?></span></a></span>
                  <?php } ?>
                  <?php if( get_theme_mod( 'campus_education_twitter' ) != '') { ?>
                    <span class="diamond"><a href="<?php echo esc_url( get_theme_mod( 'campus_education_twitter','' ) ); ?>"><i class="fab fa-twitter"></i><span class="screen-reader-text"><?php esc_html_e('Twitter','campus-education'); ?></span></a></span>
                  <?php } ?>
                  <?php if( get_theme_mod( 'campus_education_pintrest' ) != '') { ?>
                    <span class="diamond"><a href="<?php echo esc_url( get_theme_mod( 'campus_education_pintrest','' ) ); ?>"><i class="fab fa-pinterest-p"></i><span class="screen-reader-text"><?php esc_html_e('Pinterest','campus-education'); ?></span></a></span>
                  <?php } ?>
                  <?php if( get_theme_mod( 'campus_education_insta' ) != '') { ?>
                    <span class="diamond"><a href="<?php echo esc_url( get_theme_mod( 'campus_education_insta','' ) ); ?>"><i class="fab fa-instagram"></i><span class="screen-reader-text"><?php esc_html_e('Instagram','campus-education'); ?></span></a></span>
                  <?php } ?>
                  <?php if( get_theme_mod( 'campus_education_linkdin' ) != '') { ?>
                    <span class="diamond"><a href="<?php echo esc_url( get_theme_mod( 'campus_education_linkdin','' ) ); ?>"><i class="fab fa-linkedin-in"></i><span class="screen-reader-text"><?php esc_html_e('Linkedin','campus-education'); ?></span></a></span>
                  <?php } ?>
                  <?php if( get_theme_mod( 'campus_education_youtube' ) != '') { ?>
                    <span class="diamond"><a href="<?php echo esc_url( get_theme_mod( 'campus_education_youtube','' ) ); ?>"><i class="fab fa-youtube"></i><span class="screen-reader-text"><?php esc_html_e('Youtube','campus-education'); ?></span></a></span>
                  <?php } ?>
                </div>
              </div>
              <?php if ( get_theme_mod('campus_education_button_text','') != "" ) {?>
                <div class="col-lg-2 col-md-4"> 
                  <div class="donate-link">            
                    <a href="<?php echo esc_html( get_theme_mod('campus_education_button_link','') ); ?>"><?php echo esc_html( get_theme_mod('campus_education_button_text','') ); ?><span class="screen-reader-text"><?php esc_html_e('Apply Online','campus-education'); ?></span></a>    
                  </div>          
                </div>
              <?php }?>
            </div>
          </div>
        <?php }?>
      </div>    
      <div id="header" class="<?php if( get_theme_mod( 'campus_education_sticky_header') != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
        <div class="container">
          <div class="menu-sec">
            <div class="row">
              <div class="col-lg-3 col-md-5">
                <div class="logo">
                  <?php if ( has_custom_logo() ) : ?>
                    <div class="site-logo"><?php the_custom_logo(); ?></div>
                  <?php else: ?>
                    <?php $blog_info = get_bloginfo( 'name' ); ?>
                    <?php if ( ! empty( $blog_info ) ) : ?>
                      <?php if ( is_front_page() && is_home() ) : ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                      <?php else : ?>
                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                      <?php endif; ?>
                    <?php endif; ?>
                    <?php
                    $description = get_bloginfo( 'description', 'display' );
                    if ( $description || is_customize_preview() ) :
                      ?>
                      <p class="site-description">
                        <?php echo esc_html($description); ?>
                      </p>
                    <?php endif; ?>
                  <?php endif; ?>
                </div>
              </div>
              <div class="menubox col-lg-8 col-md-5 p-0">
                <div id="sidelong-menu" class="nav side-nav">
                  <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'campus-education' ); ?>">
                    <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="resMenu_close()"><?php esc_html_e('Close Menu','campus-education'); ?><i class="fas fa-times-circle"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','campus-education'); ?></span></a>
                    <?php 
                      wp_nav_menu( array( 
                        'theme_location' => 'primary',
                        'container_class' => 'main-menu-navigation clearfix' ,
                        'menu_class' => 'clearfix',
                        'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                        'fallback_cb' => 'wp_page_menu',
                      ) ); 
                    ?>
                  </nav>
                </div>
              </div>
              <div class="search-box col-lg-1 col-md-2">
                <span class="diamond1"><div class="wrap"><?php get_search_form(); ?></div></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>