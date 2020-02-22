<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Logistic Transport
 */

get_header(); ?>

<main id="main" role="main" class="theme-main-box">
    <div class="container">
        <?php
        $left_right = get_theme_mod( 'logistic_transport_theme_options','Right Sidebar');
        if($left_right == 'Left Sidebar'){ ?>
            <div class="row">
                <div class="col-lg-4 col-md-4"><?php get_sidebar(); ?></div>
                <div class="col-lg-8 col-md-8">
                    <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Results For: %s','logistic-transport'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                    <?php if ( have_posts() ) :
                    /* Start the Loop */
                      
                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/content', get_post_format() ); 
                      
                        endwhile;
                        wp_reset_postdata();
                        else :

                            get_template_part( 'no-results' ); 

                        endif; 
                    ?>
                    <div class="navigation">
                        <?php
                            // Previous/next page navigation.
                            the_posts_pagination( array(
                                'prev_text'          => __( 'Previous page', 'logistic-transport' ),
                                'next_text'          => __( 'Next page', 'logistic-transport' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'logistic-transport' ) . ' </span>',
                            ) );
                        ?>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        <?php }else if($left_right == 'Right Sidebar'){ ?>
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Results For: %s','logistic-transport'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                    <?php if ( have_posts() ) :
                        /* Start the Loop */
                          
                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/content', get_post_format() ); 
                          
                        endwhile;
                        wp_reset_postdata();
                        else :

                            get_template_part( 'no-results' ); 

                        endif; 
                    ?>
                    <div class="navigation">
                        <?php
                            // Previous/next page navigation.
                            the_posts_pagination( array(
                                'prev_text'          => __( 'Previous page', 'logistic-transport' ),
                                'next_text'          => __( 'Next page', 'logistic-transport' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'logistic-transport' ) . ' </span>',
                            ) );
                        ?>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4"><?php get_sidebar(); ?></div>
            </div>
        <?php }else if($left_right == 'One Column'){ ?>            
            <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Results For: %s','logistic-transport'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
            <?php if ( have_posts() ) :
                /* Start the Loop */
                  
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content', get_post_format() ); 
                  
                endwhile;
                wp_reset_postdata();
                else :

                    get_template_part( 'no-results' ); 

                endif; 
            ?>
            <div class="navigation">
                <?php
                    // Previous/next page navigation.
                    the_posts_pagination( array(
                        'prev_text'          => __( 'Previous page', 'logistic-transport' ),
                        'next_text'          => __( 'Next page', 'logistic-transport' ),
                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'logistic-transport' ) . ' </span>',
                    ) );
                ?>
                <div class="clearfix"></div>
            </div>
        <?php }else if($left_right == 'Three Columns'){ ?>
            <div class="row">
                <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar( 'sidebar-1' ); ?></div>
                <div class="col-lg-6 col-md-6">
                   <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Results For: %s','logistic-transport'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                    <?php if ( have_posts() ) :
                        /* Start the Loop */
                          
                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/content', get_post_format() ); 
                          
                        endwhile;
                        wp_reset_postdata();
                        else :

                            get_template_part( 'no-results' ); 

                        endif; 
                    ?>
                    <div class="navigation">
                        <?php
                            // Previous/next page navigation.
                            the_posts_pagination( array(
                                'prev_text'          => __( 'Previous page', 'logistic-transport' ),
                                'next_text'          => __( 'Next page', 'logistic-transport' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'logistic-transport' ) . ' </span>',
                            ) );
                        ?>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar( 'sidebar-2' ); ?></div>
            </div>
        <?php }else if($left_right == 'Four Columns'){ ?>
            <div class="row">
                <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar( 'sidebar-1' ); ?></div>
                <div class="col-lg-3">
                    <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Results For: %s','logistic-transport'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                    <?php if ( have_posts() ) :
                        /* Start the Loop */
                          
                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/content', get_post_format() ); 
                          
                        endwhile;
                        wp_reset_postdata();
                        else :

                            get_template_part( 'no-results' ); 

                        endif; 
                    ?>
                    <div class="navigation">
                        <?php
                            // Previous/next page navigation.
                            the_posts_pagination( array(
                                'prev_text'          => __( 'Previous page', 'logistic-transport' ),
                                'next_text'          => __( 'Next page', 'logistic-transport' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'logistic-transport' ) . ' </span>',
                            ) );
                        ?>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar( 'sidebar-2' ); ?></div>
                <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar( 'sidebar-3' ); ?></div>
            </div>
        <?php }else if($left_right == 'Grid Layout'){ ?>
            <div class="row">
                <div class="col-lg-9 col-md-9">
                    <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Results For: %s','logistic-transport'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                    <div class="row">
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                              
                            while ( have_posts() ) : the_post();

                                get_template_part( 'template-parts/grid-layout' ); 
                              
                            endwhile;
                            wp_reset_postdata();
                            else :

                                get_template_part( 'no-results' ); 

                            endif; 
                        ?>
                    </div>
                    <div class="navigation">
                        <?php
                            // Previous/next page navigation.
                            the_posts_pagination( array(
                                'prev_text'          => __( 'Previous page', 'logistic-transport' ),
                                'next_text'          => __( 'Next page', 'logistic-transport' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'logistic-transport' ) . ' </span>',
                            ) );
                        ?>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar( 'sidebar-1' ); ?></div>
            </div>
        <?php }else {?>
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Results For: %s','logistic-transport'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                    <?php if ( have_posts() ) :
                        /* Start the Loop */
                          
                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/content', get_post_format() ); 
                          
                        endwhile;
                        wp_reset_postdata();
                        else :

                            get_template_part( 'no-results' ); 

                        endif; 
                    ?>
                    <div class="navigation">
                        <?php
                            // Previous/next page navigation.
                            the_posts_pagination( array(
                                'prev_text'          => __( 'Previous page', 'logistic-transport' ),
                                'next_text'          => __( 'Next page', 'logistic-transport' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'logistic-transport' ) . ' </span>',
                            ) );
                        ?>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4"><?php get_sidebar(); ?></div>
            </div>
        <?php } ?>
    </div>
</main>

<?php get_footer(); ?>