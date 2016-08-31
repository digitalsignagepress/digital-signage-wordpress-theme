<?php
/**
 * Adds theme support for custom header, feed links, title tag, post formats, HTML5 and post thumbnails
 */
function digitalsignagepress_add_theme_support() {
    add_theme_support( 'custom-header' );
    add_theme_support( "custom-background");
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-formats', array(
        'aside',
        'link',
        'gallery',
        'status',
        'quote',
        'image',
        'video',
        'audio',
        'chat'
    ) );
    add_theme_support( 'html5', array(
        'comment-list',
        'comment-form',
        'search-form',
        'gallery',
        'caption',
    ) );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'digitalsignagepress_add_theme_support' );

global $content_width;
if ( ! isset( $content_width ) ) $content_width = 900;

if ( is_singular() ) wp_enqueue_script( "comment-reply" );

wp_link_pages( $args );

/**
 * Displays the content with customized more link
 *
 * @return string Formatted output in HTML
 */
function digitalsignagepress_the_content() {
    $text = _x( 'Continue reading %s', 's = post title', 'digitalsignagepress' );
    $more = sprintf( $text, esc_html( get_the_title() ) );
    the_content( $more );
}

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'digitalsignagepress' ),
) );

add_action( 'widgets_init', 'digitalsignagepress_widgets_init' );
function digitalsignagepress_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'digitalsignagepress' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}

function add_editor_style( $stylesheet = 'editor-style.css' ) {
    add_theme_support( 'editor-style' );
 
    if ( ! is_admin() )
        return;

    global $editor_styles;
    $editor_styles = (array) $editor_styles;
    $stylesheet    = (array) $stylesheet;
    if ( is_rtl() ) {
        $rtl_stylesheet = str_replace('.css', '-rtl.css', $stylesheet[0]);
        $stylesheet[] = $rtl_stylesheet;
}
