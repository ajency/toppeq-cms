<?php

/*
  =============================================================
  Index
  =============================================================

  1.0 - Theme Support

  2.0 - Enqueue Scripts and Styles

  3.0 - Register Menus

  4.0 - Register Widgets Areas

  5.0 - WP_Customize Fields

  -------------------------------------------------------------
  Index Ends
  -------------------------------------------------------------
 */


/*
  =============================================================
  1.0 - Theme Support
  =============================================================
 */
add_action('after_setup_theme', 'custom_add_theme_support');

function custom_add_theme_support() {
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link', 'audio', 'gallery', 'status'));
    add_post_type_support( 'page', 'excerpt' );
    add_theme_support('custom-logo');
}

/*
  -------------------------------------------------------------
  Theme Support Ends
  -------------------------------------------------------------
 */

/*
  =============================================================
  2.0 - Enqueue Scripts and Styles
  =============================================================
 */

function theme_enqueue_scripts() {
   wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');
   wp_enqueue_style('app-style', get_stylesheet_directory_uri() . '/css/theme-styles.css', '', filemtime(get_stylesheet_directory() . '/css/theme-styles.css'));     
   wp_register_script("app-script", get_stylesheet_directory_uri() . '/js/app.js', array('jquery'), filemtime(get_stylesheet_directory() . '/js/app.js'), true);
   wp_localize_script('app-script', 'myAjax', array('ajaxurl' => admin_url('admin-ajax.php')));
   wp_enqueue_script('app-script'); 
}

add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');


/*
  -------------------------------------------------------------
  Enqueue Scripts and Styles Ends
  -------------------------------------------------------------
 */



/*


  /*
  =============================================================
  3.0 - Register Menus
  =============================================================
 */

function register_menus() {
	register_nav_menus(
		array(
		'main-menu' => __('Headermenu')
		)
	);
}
	
add_action('init', 'register_menus');

/*
  -------------------------------------------------------------
  Register Menus Ends
  -------------------------------------------------------------
 */
 
 /*
  =============================================================
  4.0 - Register Widget Areas
  =============================================================
*/
function custom_widgets() {
    register_sidebar(array(
        'id' => 'footer-widget-area_1',
        'name' => 'Footer widget area Column 2',
        'description' => 'The widget area for footer',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'custom_widgets');


/*
  -------------------------------------------------------------
  Register Widget Areas Ends
  -------------------------------------------------------------
 */


/*
  =============================================================
  5.0 - WP_Customize Fields
  =============================================================
 */

function cc_customize_register($wp_customize) {

   /* Header Logo */
   $wp_customize->add_section("site_logo", array(
        "title" => __("Site Logo", "toppeq"),
        "priority" => 30,
    ));
   
   $wp_customize->add_setting("logo_url", array(
       'default' => '',
   ));

   $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize, "logo_url", array(
            'label' => __('Upload a logo', 'toppeq'),
            'section' => 'site_logo',
            'description' => 'Header Logo',
            'settings' => 'logo_url'
        )
   ));
   
   $wp_customize->add_setting("footer_logo_url", array(
       'default' => '',
   ));

   $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize, "footer_logo_url", array(
            'label' => __('Upload a logo', 'toppeq'),
            'section' => 'site_logo',
            'description' => 'Footer Logo',
            'settings' => 'footer_logo_url'
        )
   ));
}

add_action("customize_register", "cc_customize_register");

show_admin_bar(false);

function create_posttype() { 
  register_post_type( 'services',
      array(
          'labels' => array(
              'name' => __( 'Services' ),
              'singular_name' => __( 'Service' )
          ),
          'public' => true,
          'has_archive' => true,
          'supports'      => array( 'title', 'editor', 'thumbnail'),
          'rewrite' => array('slug' => 'services'),
      )
  );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

function tp_register_custom_post_types() {
    $args = array(
    'labels' => array(
    'name' => __('Press'),
    'singular_name' => __('Press'),
    ),
    'public' => true,
    'has_archive' => false,
    'rewrite' => array( 'slug' => 'press' ),
    'supports' => array( 'title', 'editor', 'thumbnail' ),
    );

  register_post_type( 'press', $args );
}
add_action( 'init', 'tp_register_custom_post_types' ); 


 /* Custom login page logo
================================================== */
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url('./wp-content/themes/toppeq/images/orange-logo-1.png');
            height: 38px;
            width: 100%;
            background-size: contain;
            background-repeat: no-repeat;
            padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function wpbeginner_remove_version() {
return '';
}
add_filter('the_generator', 'wpbeginner_remove_version');