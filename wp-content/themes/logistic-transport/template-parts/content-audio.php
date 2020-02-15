<?php
/**
 * The template part for displaying slider
 *
 * @package Logistic Transport
 * @subpackage logistic_transport
 * @since Logistic Transport 1.0
 */
?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?>
<?php
  $content = apply_filters( 'the_content', get_the_content() );
  $audio = false;
  // Only get audio from the content if a playlist isn't present.
  if ( false === strpos( $content, 'wp-playlist-script' ) ) {
    $audio = get_media_embedded_in_content( $content, array( 'audio' ) );
  }
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="services-box">    
    <div class="service-image">
      <?php
        if ( ! is_single() ) {
          // If not a single post, highlight the audio file.
          if ( ! empty( $audio ) ) {
            foreach ( $audio as $audio_html ) {
              echo '<div class="entry-audio">';
                echo $audio_html;
              echo '</div><!-- .entry-audio -->';
            }
          };
        };
      ?>
    </div>
    <h2><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
    <div class="lower-box">
      <?php if( get_theme_mod( 'logistic_transport_date_hide',true) != '' || get_theme_mod( 'logistic_transport_comment_hide',true) != '' || get_theme_mod( 'logistic_transport_author_hide',true) != '') { ?>
        <div class="metabox">
          <?php if( get_theme_mod( 'logistic_transport_date_hide',true) != '') { ?>
            <span class="entry-date"><i class="far fa-calendar-alt"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
          <?php } ?>

          <?php if( get_theme_mod( 'logistic_transport_author_hide',true) != '') { ?>
            <span class="entry-author"><i class="fas fa-user"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
          <?php } ?>

          <?php if( get_theme_mod( 'logistic_transport_comment_hide',true) != '') { ?>
            <i class="fas fa-comments"></i><span class="entry-comments"> <?php comments_number( __('0 Comments','logistic-transport'), __('0 Comments','logistic-transport'), __('% Comments','logistic-transport') ); ?></span>
          <?php } ?>
        </div>
      <?php } ?>
      <p><?php the_excerpt();?></p>
      <div class="read-btn">
        <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" title="<?php esc_attr_e( 'Read More', 'logistic-transport' ); ?>"><?php esc_html_e('Read More','logistic-transport'); ?><span class="screen-reader-text"><?php esc_html_e( 'Read More','logistic-transport' );?></span>
        </a>
      </div>
    </div>
  </div>
  <hr>
</article>