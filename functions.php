<?php
/**
 * cone functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link https://codex.wordpress.org/Plugin_API
 *
 * @package cone
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function cone_theme_setup() {
 
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    load_theme_textdomain( 'cone', get_template_directory() . '/languages' );
 
    // Register nav menues to use wp_nav_menu()
    register_nav_menus( array(
        'primary' => __( 'Primary menu', 'cone' ),
        'secondary' => __( 'Secondary menu', 'cone' ),
        'product' => __( 'Product menu', 'cone' ),
        'mobile' => __( 'Mobile menu', 'cone' ),
        'footer' => __( 'Footer menu', 'cone' )
    ) );
 
    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
     */
    add_theme_support( 'post-thumbnails' );
    // Add thumb sizes below
    add_image_size( 'rectangle-thumb', 375, 220, true );

    /*
     * Enable support for Post Formats.
     * See https://codex.wordpress.org/Post_Formats
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
    ) );
 
    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'cone_theme_setup' );

/**
 * Register custom post types
 * 
 * @link https://codex.wordpress.org/Function_Reference/register_post_type
 */
function cone_register_post_types() {
    // Custom post types should be registered here
}
add_action( 'init', 'cone_register_post_types' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cone_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'cone' ),
        'id'            => 'sidebar-1',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'cone_widgets_init' );

/**
 * Set the post excerpt length to 40 words.
 *
 * To override this length in a child theme, remove
 * the filter and add your own function tied to
 * the excerpt_length filter hook.
 *
 * @param int $length The number of excerpt characters.
 * @return int The filtered number of characters.
 */
function cone_set_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'cone_set_excerpt_length' );

/**
 * Replace "[...]" in the Read More link with an ellipsis.
 *
 * The "[...]" is appended to automatically generated excerpts.
 *
 * To override this in a child theme, remove the filter and add your own
 * function tied to the excerpt_more filter hook.
 *
 * @param string $more The Read More text.
 * @return The filtered Read More text.
 */
function cone_excerpt_more( $more ) {
    if ( ! is_admin() ) {
        return ' &hellip;';
    }
    return $more;
}
add_filter( 'excerpt_more', 'cone_excerpt_more' );

/**
 * Add all the main scripts and styles here.
 */
function cone_enqueue_scripts() {

    // WordPress style.css
    wp_enqueue_style( 'default-style', get_stylesheet_uri() );

    // Hamburger script and css
    wp_enqueue_script( 'hamburger-scripts', get_template_directory_uri() . '/assets/js/lib/hamburger.js', array('jquery'), 1.0, true );

    wp_enqueue_script( 'swiper-scripts', get_template_directory_uri() . '/assets/js/lib/swiper.min.js', array('jquery'), 1.0, true );

    wp_enqueue_style( 'swiper-style', get_template_directory_uri() . '/assets/css/lib/swiper.min.css' );

    wp_enqueue_style( 'hamburger-style', get_template_directory_uri() . '/assets/css/lib/hamburgers.min.css' );

    wp_enqueue_script( 'modernizr-scripts', get_template_directory_uri() . '/assets/js/lib/modernizr.js', array('jquery'), 1.0, true );

    wp_enqueue_script( 'sharer-script', get_template_directory_uri() . '/assets/js/lib/sharer.min.js', array('jquery'), 1.0, true );

    wp_enqueue_style( 'slider-style', get_template_directory_uri() . '/assets/css/lib/slider.css' );

    wp_enqueue_script( 'slider-scripts', get_template_directory_uri() . '/assets/js/lib/slider.js', array('jquery'), 1.0, true );


    // vendor.css created with gulp
    wp_enqueue_style( 'main-min-style', get_template_directory_uri() . '/assets/css/main.min.css' );

    // vendor.js created with gulp
    wp_enqueue_script( 'main-min-scripts', get_template_directory_uri() . '/assets/js/src/main.min.js', array('jquery'), 1.0, true );

    wp_localize_script(
      'main-min-scripts', // this needs to match the name of our enqueued script
      'ajaxApi',      // the name of the object
      array('ajaxurl' => admin_url('admin-ajax.php')) // the property/value
    );
}
add_action( 'wp_enqueue_scripts', 'cone_enqueue_scripts' );

// Custom template tags
require get_template_directory() . '/inc/template-tags.php';


class Menu_With_Description extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        global $wp_query;
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        $class_names = $value = '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
        $class_names = ' class="' . esc_attr( $class_names ) . '"';

        $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

        $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) .'"' : '';
        $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) .'"' : '';
        $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'"' : '';

        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '<br /><span class="menu-description">' . $item->description . '</span>';
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}


  // TypeKit

  wp_enqueue_script( 'elp-typekit', '//use.typekit.net/fes2kjt.js');



  function elp_typekit_inline() {

      if ( wp_script_is( 'elp-typekit', 'done' ) ) { ?>

          <script>try{Typekit.load({ async: true });}catch(e){}</script>

      <?php }

  }

  add_action( 'wp_head', 'elp_typekit_inline' );


  function api_upsales_ajax() {

    
    $apikey = '8609b099b7c6b1a8b8035a156416d2cb5dbb2174cf5609ad463ab95672218cee';

    $url = 'https://integration.upsales.com/api/v2/contacts/?token=' . $apikey;

    $contactInfo = array(
      'name' => $_POST['name'],
      'phone' => '',
      'cellPhone' => $_POST['phone'],
      'email' => $_POST['email'],
      'title' => '',
      'notes' => $_POST['notes'],
      'client' => 2,
      'active' => true,
    );

    $response = wp_remote_post( $url, array(
        'headers' => array(
            'Content-Type' => 'application/json',
            'Accept-Encoding' => 'utf-8'
        ),
        'body' => json_encode($contactInfo)
    ) );


    wp_send_json($response);

}

add_action( 'wp_ajax_api_upsales_ajax', 'api_upsales_ajax' );

add_action( 'wp_ajax_nopriv_api_upsales_ajax', 'api_upsales_ajax' );

?>