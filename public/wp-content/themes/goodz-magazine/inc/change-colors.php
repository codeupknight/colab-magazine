<?php
/**
 * Change colors regarding user choices in customizer
 *
 * @package Goodz Magazine
 */

// Headings color
$headings_color         = get_theme_mod( 'goodz_magazine_heading_color', '#000' );
$paragraph_color        = get_theme_mod( 'goodz_magazine_paragraph_color', '#838383' );
$link_color             = get_theme_mod( 'goodz_magazine_link_color', '#000' );
$background_color       = get_theme_mod( 'background_color', '#fff' );
$footer_color           = get_theme_mod( 'goodz_magazine_footer_color', '#fff' );

// Blog Header Colors
$header_transparency    = get_theme_mod( 'blog_header_transparency_enable', 1 );
$header_bg_color        = get_theme_mod( 'goodz_magazine_bg_header_color', '#fff' );

if ( $header_transparency ) {
    $header_bg_color = 'transparent';
}

$header_bg_ul_color     = $header_bg_color;
$navigation_color       = get_theme_mod( 'goodz_magazine_navigation_color', '#000' );
$navigation_tr_color    = get_theme_mod( 'goodz_magazine_tr_navigation_color', '#000' );
$navigation_hover_color = get_theme_mod( 'goodz_magazine_navigation_hover_color', '#808080' );
$logo_color             = get_theme_mod( 'goodz_magazine_logo_color', '#000' );
$logo_hover_color       = get_theme_mod( 'goodz_magazine_logo_hover_color', '#000' );
$logo_description_color = get_theme_mod( 'goodz_magazine_logo_description_color', '#000' );

?>

<style type="text/css">

    /* Headings color */
    h1, h2, h3, h4, h5, h6,
    h1 a, h2 a, h3 a, h4 a, h5 a, h6 a,
    .widget-title, .nav-links,
    .format-quote blockquote {
        color: <?php echo esc_attr( $headings_color ); ?>;
    }

    /* navigation link colors */

    #site-navigation ul li a,
    a#big-search-trigger,
    .icon-cart {
        color: <?php echo esc_attr( $navigation_color ); ?>;
    }

    .transparent-header #site-navigation ul li a,
    .transparent-header a#big-search-trigger,
    .transparent-header .icon-cart {
        color: <?php echo esc_attr( $navigation_tr_color ); ?>;
    }

    #site-navigation ul li a:hover,
    a#big-search-trigger:hover,
    .icon-cart:hover {
        color: <?php echo esc_attr( $navigation_hover_color ); ?>;
    }

    .menu-toggle span,
    .menu-toggle span:before,
    .menu-toggle span:after {
        background-color: <?php echo esc_attr( $navigation_color ); ?>;
    }

    .transparent-header .menu-toggle span,
    .transparent-header .menu-toggle span:before,
    .transparent-header .menu-toggle span:after {
        background-color: <?php echo esc_attr( $navigation_tr_color ); ?>;
    }

    /* Responsive */
    @media only screen and (min-width: 1025px){

        .main-navigation .nav-menu > li > ul,
        .background-change.transparent-header,
        .background-change .main-navigation .nav-menu .mega-menu-dropdown > ul {
            background-color: <?php echo esc_attr( $header_bg_color ); ?>;
        }

    }

    .transparent-header + .site-content .home-slider .slick-dots button,
    .transparent-header + .site-content .home-slider .slick-dots .slick-active:after,
    .transparent-header + .site-content .home-slider .slick-dots span {
        color: <?php echo esc_attr( $navigation_tr_color ); ?>;
    }

    body:not(.featured-slider-fullwidth) #masthead,
    #masthead.shrink{
        background-color: <?php echo esc_attr( $header_bg_color ); ?>;
    }

    /* Navigation color */
    /*#site-navigation ul li a,
    a#big-search-trigger {
        color: <?php echo esc_attr( $navigation_color ); ?>;
    }*/

    /* Paragraph color */
    .entry-content p {
        color: <?php echo esc_attr( $paragraph_color ); ?>;
    }

    /* Link color */
    a {
        color: <?php echo esc_attr( $link_color ); ?>;
    }

    /* Button color */
    .site-branding a {
        color: <?php echo esc_attr( $logo_color ); ?>;
    }

    .site-branding a:hover {
        color: <?php echo esc_attr( $logo_hover_color ); ?>;
    }

    .site-description {
        color: <?php echo esc_attr( $logo_description_color ); ?>;
    }

    /* Content color */
    #content,
    .main-content-wrap {
        background-color: <?php echo esc_attr( $background_color ); ?>;
    }

    /* Content color */
    .site-footer,
    .featured-slider-fullwidth .site-footer {
        background-color: <?php echo esc_attr( $footer_color ); ?>;
    }

</style>

