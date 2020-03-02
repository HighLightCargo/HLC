<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="content-ma">
 *
 * @package Logistic Transport
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'logistic-transport' ) ); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="main-bodybox">
	<?php wp_body_open(); ?>
	
	<header role="banner">
		<a class="screen-reader-text skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'logistic-transport' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Skip to content ', 'logistic-transport' );?></span></a>
		<div id="header">
		  	<div class="container inner-box">
		  		<div class="site_header">
		  			<div class="row m-0">
					    <div class="col-lg-3 col-md-3">
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
					    <div class="col-lg-9 col-md-9">
					    	<?php if( get_theme_mod('logistic_transport_topbar_hide',true) != ''){ ?>
						    	<div class="row topbar">
							        <div class="col-lg-2 col-md-6">
							        	<div class="call">
							        	<?php if( get_theme_mod( 'logistic_transport_call','' ) != '') { ?>
							        		<i class="fas fa-phone"></i><?php echo esc_html( get_theme_mod('logistic_transport_call','') ); ?>
							          	<?php } ?>
							          	</div>
							        </div>
							        <div class="col-lg-3 col-md-6">
							        	<div class="call">
								        	<?php if( get_theme_mod( 'logistic_transport_mail','' ) != '') { ?>
										        <i class="fas fa-envelope"></i><?php echo esc_html( get_theme_mod('logistic_transport_mail','') ); ?>
										    <?php } ?>
									    </div>
							        </div>
							        <div class="col-lg-4 col-md-6">
							        	<div class="call">
								        	<?php if( get_theme_mod( 'logistic_transport_time','' ) != '') { ?>
								        		<i class="far fa-clock"></i><?php echo esc_html( get_theme_mod('logistic_transport_time','') ); ?>
								        	<?php } ?>
							        	</div>
							        </div>
							        <div class="col-lg-3 col-md-6">
							        	<div class="social-media">
						          			<?php if( get_theme_mod( 'logistic_transport_facebook_url' ) != '') { ?>
						            			<a href="<?php echo esc_url( get_theme_mod( 'logistic_transport_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php esc_attr_e( 'Facebook','logistic-transport' );?></span></a>
						          			<?php } ?>
						          			<?php if( get_theme_mod( 'logistic_transport_twitter_url' ) != '') { ?>
						            			<a href="<?php echo esc_url( get_theme_mod( 'logistic_transport_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i><span class="screen-reader-text"><?php esc_attr_e( 'Twitter','logistic-transport' );?></span></a>
						          			<?php } ?>
						          			<?php if( get_theme_mod( 'logistic_transport_google_url' ) != '') { ?>
						            			<a href="<?php echo esc_url( get_theme_mod( 'logistic_transport_google_url','' ) ); ?>"><i class="fab fa-google-plus-g"></i><span class="screen-reader-text"><?php esc_attr_e( 'Google Plus','logistic-transport' );?></span></a>
						          			<?php } ?>
						          			<?php if( get_theme_mod( 'logistic_transport_linkdin_url' ) != '') { ?>
						            			<a href="<?php echo esc_url( get_theme_mod( 'logistic_transport_linkdin_url','' ) ); ?>"><i class="fab fa-linkedin-in"></i><span class="screen-reader-text"><?php esc_attr_e( 'Linkedin','logistic-transport' );?></span></a>
						          			<?php } ?>
						          			<?php if( get_theme_mod( 'logistic_transport_youtube_url' ) != '') { ?>
						            			<a href="<?php echo esc_url( get_theme_mod( 'logistic_transport_youtube_url','' ) ); ?>"><i class="fab fa-youtube"></i><span class="screen-reader-text"><?php esc_attr_e( 'Youtube','logistic-transport' );?></span></a>
						          			<?php } ?>
						        		</div>
							        </div>
							    </div> 
						    <?php }?> 
						    <div class="<?php if( get_theme_mod( 'logistic_transport_sticky_header') != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>"> 
						        <div class="row">
									<div class="menubox nav col-lg-8 col-md-6 col-2">
									   	<div class="toggle-menu responsive-menu">
						                   	<button role="tab" onclick="resMenu_open()"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','logistic-transport'); ?></span></button>
						               	</div>
						               	<div id="menu-sidebar" class="nav sidebar">
							                <nav id="primary-site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'logistic-transport' ); ?>">
							                    <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="resMenu_close()"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','logistic-transport'); ?></span></a>
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
									<div class="search-box col-lg-1 col-md-1 col-2">
							            <span class="search-icon"><a href="#" onclick="search_open()"><i class="fas fa-search"></i><span class="screen-reader-text"><?php esc_html_e( 'Search Open', 'logistic-transport' );?></span></a></span>
							        </div>
							  	  	<div class="col-lg-3 col-md-5 col-6 p-0">
							  	  		<?php if( get_theme_mod( 'logistic_transport_request_btn_url' ) != '' || get_theme_mod( 'logistic_transport_request_btn_text' ) != '') { ?>
										<div class="request-btn">
									  		<a href="<?php echo esc_url( get_theme_mod( 'logistic_transport_request_btn_url','' ) ); ?>" class="blogbutton-small" ><?php echo esc_html( get_theme_mod( 'logistic_transport_request_btn_text','' ) ); ?><span class="screen-reader-text"><?php esc_html_e( 'Request a Date', 'logistic-transport' );?></span>
										  </a>
										</div>
										<?php } ?>
									</div>
								</div>
								<div class="serach_outer">
					          		<div class="closepop"><a href="#" onclick="search_close()"><i class="far fa-window-close"></i><span class="screen-reader-text"><?php esc_html_e( 'Search Closed', 'logistic-transport' );?></span></a></div>
						          	<div class="serach_inner">
						            	<?php get_search_form(); ?>
						          	</div>
						        </div>
						    </div>
					    </div>
				    </div>
				</div>
			</div>
		</div>
	</header>