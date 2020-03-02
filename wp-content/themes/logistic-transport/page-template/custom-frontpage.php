<?php
/**
 * The template for displaying home page.
 *
 * Template Name: Custom Home Page
 *
 * @package Logistic Transport
 */
get_header(); ?>

<main id="main" role="main">
  <?php if( get_theme_mod('logistic_transport_slider_hide_show') != ''){ ?>
    <section id="slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
        <?php $slider_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'logistic_transport_slider_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $slider_pages[] = $mod;
            }
          }
          if( !empty($slider_pages) ) :
          $args = array(
              'post_type' => 'page',
              'post__in' => $slider_pages,
              'orderby' => 'post__in'
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
        ?>     
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <?php the_post_thumbnail(); ?> 
              <div class="carousel-caption">
                <div class="inner_carousel">
                  <h1><?php the_title();?></h1>
                  <p><?php $excerpt = get_the_excerpt(); echo esc_html( logistic_transport_string_limit_words( $excerpt,15 ) ); ?></p>
                  <div class="read-btn">
                    <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small"><?php esc_html_e('Read More','logistic-transport'); ?><i class="fas fa-angle-right"></i><span class="screen-reader-text"><?php esc_html_e( 'Read More','logistic-transport');?></span>
                    </a>
                  </div>  
                </div>
              </div>
            </div>
            <?php $i++; endwhile; 
            wp_reset_postdata();?>
        </div>
        <?php else : ?>
        <div class="no-postfound"></div>
          <?php endif;
        endif;?>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span><span class="screen-reader-text"><?php esc_html_e( 'Previous','logistic-transport');?></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span><span class="screen-reader-text"><?php esc_html_e( 'Next','logistic-transport');?></span>
        </a>
      </div>  
      <div class="clearfix"></div>
    </section> 
  <?php }?>

  <?php do_action( 'logistic_transport_after_slider' ); ?>

  <?php if( get_theme_mod('logistic_transport_services_category') != ''){ ?>
    <section id="services">
    	<div class="container">
        <div class="service-box">
            <div class="row">
    	        <?php 
  	         	$page_query = new WP_Query(array( 'category_name' => esc_html(get_theme_mod('logistic_transport_services_category'),'theblog')));?>
  	          	<?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
  	          		<div class="col-lg-4 col-md-4">
                    <div class="service-content">
  		                <?php the_post_thumbnail(); ?> 
                      <strong><a href="<?php echo esc_url( get_permalink() );?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></strong><hr>
                      <div class="learn-btn">
                        <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" title="<?php esc_attr_e( 'LEARN MORE', 'logistic-transport' ); ?>"><?php esc_html_e('LEARN MORE','logistic-transport'); ?><span class="screen-reader-text"><?php esc_html_e( 'LEARN MORE','logistic-transport');?></span>
                        </a>
                      </div>
                    </div>
  		            </div>
  	          	<?php endwhile;
  	          	wp_reset_postdata();
    	        ?>
    	      </div>
        </div>
    	</div>
    </section>
  <?php }?>

  <?php do_action( 'logistic_transport_after_service' ); ?>

  <?php if( get_theme_mod('logistic_transport_discover_post') != ''){ ?>

  <section id="about">
    <div class="container">
      <?php
        $args = array( 'name' => get_theme_mod('logistic_transport_discover_post',''));
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
          while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <?php
                 $content = apply_filters( 'the_content', get_the_content() );
                 $video = false;

                 // Only get video from the content if a playlist isn't present.
                 if ( false === strpos( $content, 'wp-playlist-script' ) ) {
                   $video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
                 }
                ?>  
                <?php
                  if ( ! is_single() ) {
                    // If not a single post, highlight the video file.
                    if ( ! empty( $video ) ) {
                      foreach ( $video as $video_html ) {
                        echo '<div class="entry-video">';
                          echo $video_html;
                        echo '</div>';
                      }
                    }
                    elseif(has_post_thumbnail()) { 
                      the_post_thumbnail(); 
                    } 
                  }; 
                ?>           
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="about-content">
                  <h2><a href="<?php echo esc_url( get_permalink() );?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2><hr>
                  <p><?php $excerpt = get_the_excerpt(); echo esc_html( logistic_transport_string_limit_words( $excerpt,60 ) ); ?></p>
                </div>          
              </div>
            </div>
          <?php endwhile; 
          wp_reset_postdata();?>
        <?php else : ?>
          <div class="no-postfound"></div>
      <?php endif; ?>
    </div>
  </section>

  <?php }?>

  <?php do_action( 'logistic_transport_after_product' ); ?>

  <div id="content-ma">
  	<div class="container">
    	<?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
  	</div>
  </div>
</main>

<?php get_footer(); ?>