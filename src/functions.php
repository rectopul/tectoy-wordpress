<?php

/* Stop errors if any */
error_reporting(E_ERROR | E_PARSE);
/* End stop Errors */

/**
 * Theme Setup
 * get all supports and menus for this theme
 * List all functions into this function
 */
if (!function_exists('rmb_theme_setup')) {
    function rmb_theme_setup()
    {
        add_post_type_support('page', 'excerpt');
    }
}

/**
 * Enable api
 */

wp_enqueue_script('wp-api');

function rmb_theme_setup_support()
{

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Add excerpt field in pages
    add_post_type_support('page', 'excerpt');

    // This adds support on thumbnails for pages only:
    add_theme_support('post-thumbnails', array('page'));


    // Custom background color.
    add_theme_support(
        'custom-background',
        array(
            'default-color' => 'f5efe0',
        )
    );

    // Set content-width.
    global $content_width;
    if (!isset($content_width)) {
        $content_width = 580;
    }

    /*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
    add_theme_support('post-thumbnails');

    // Set post thumbnail size.
    set_post_thumbnail_size(1200, 9999);

    // Add custom image size used in Cover Template.

    add_image_size('page-thumbnail', 571, 631);
    add_image_size('single_thumbnail', 410, 450, true);
    add_image_size('post_category', 410, 231);
    add_image_size('project_thumb', 650, 462, true);
    add_image_size('project_preview', 728, 463);
    add_image_size('mini_banner', 640, 420, true);
    add_image_size('image_medium', 550, 400, true);
    add_image_size('post_image', 310, 200, true);
    // Custom logo.
    $logo_width  = 120;
    $logo_height = 90;

    // If the retina setting is active, double the recommended width and height.
    if (get_theme_mod('retina_logo', false)) {
        $logo_width  = floor($logo_width * 2);
        $logo_height = floor($logo_height * 2);
    }

    add_theme_support(
        'custom-logo',
        [
            'height'      => $logo_height,
            'width'       => $logo_width,
            'flex-height' => true,
            'flex-width'  => true,
        ]
    );

    /**
     * Add Support to custom header in pages
     */
    $header = [
        'default-text-color' => 'fff',
        'width'              => 1000,
        'height'             => 250,
        'flex-width'         => true,
        'flex-height'        => true,
    ];

    add_theme_support('custom-header', $header);

    /*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
    add_theme_support('title-tag');

    /*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',
        )
    );

    /*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Twenty Twenty, use a find and replace
	 * to change 'twentytwenty' to the name of your theme in all the template files.
	 */
    load_theme_textdomain('auaha');

    // Add support for full and wide align images.
    add_theme_support('align-wide');

    // Add support for responsive embeds.
    add_theme_support('responsive-embeds');

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');
}

add_action('after_setup_theme', 'rmb_theme_setup_support');

/**
 * Register navigation menus uses wp_nav_menu in five places.
 */
function rmb_theme_menus()
{

    $locations = array(
        'primary'  => __('Desktop Horizontal Menu', 'twentytwenty'),
        'expanded' => __('Desktop Expanded Menu', 'twentytwenty'),
        'mobile'   => __('Mobile Menu', 'twentytwenty'),
        'footer'   => __('Footer Menu', 'twentytwenty'),
        'social'   => __('Social Menu', 'twentytwenty'),
    );

    register_nav_menus($locations);
}

add_action('init', 'rmb_theme_menus');

/**
 * Register and Enqueue Scripts.
 */
function rmb_register_scripts()
{

    wp_enqueue_script(
        'instaFeed-js',
        get_template_directory_uri() . '/js/instafeed.min.js',
        array('jquery'),
        '',
        true
    );

    wp_enqueue_script(
        'bootstrap-js',
        get_template_directory_uri() . '/vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js',
        array('jquery'),
        '',
        true
    );

    //wp_style_add_data('twentytwenty-style', 'rtl', 'replace');

    // Add output of Bootstrap settings as inline style.
    wp_add_inline_style(
        'bootstrap-style',
        get_template_directory_uri() . '/vendor/twbs/bootstrap/dist/css/bootstrap.min.css'
    );

    // Add output of swiperJs scripts.
    wp_enqueue_script(
        'swiperJs-script',
        get_template_directory_uri() . '/js/swiper-bundle.min.js',
        array('jquery'),
        '6.12',
        true
    );

    // Add output of theme scripts
    wp_enqueue_script(
        'baseTheme-script',
        get_template_directory_uri() . '/js/theme.js',
        array('jquery'),
        '2.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'rmb_register_scripts');
/**
 * Register and Enqueue Styles.
 */
function rmb_register_styles()
{

    //$theme_version = wp_get_theme()->get('Version');

    //wp_style_add_data('twentytwenty-style', 'rtl', 'replace');

    // Add output of Bootstrap settings as inline style.
    wp_enqueue_style(
        'bootstrap-style',
        get_template_directory_uri() . '/vendor/twbs/bootstrap/dist/css/bootstrap.min.css'
    );

    // Add output of Bootstrap settings as inline style.
    wp_enqueue_style('swiperJs-style', get_template_directory_uri() . '/css/swiper-bundle.min.css');

    //add font overpass
    //https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap

    wp_enqueue_style(
        'google-montserrat',
        'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap',
        false
    );

    wp_enqueue_style('font-SpaceGrotesk', get_template_directory_uri() . '/assets/fonts/spacegrotesk/font.css');
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/app.css');
}

add_action('wp_enqueue_scripts', 'rmb_register_styles');

function rmb_register_admin()
{
    wp_register_style('custom_wp_admin_css', get_template_directory_uri() . '/assets/css/admin/admin.css', false, '1.0.0');
    wp_enqueue_style('custom_wp_admin_css');

    wp_enqueue_script(
        'custom_wp_admin_js',
        get_template_directory_uri() . '/js/admin.js',
        array('jquery'),
        '2.0',
        true
    );
}

add_action('admin_enqueue_scripts', 'rmb_register_admin');


/**
 * Implement get theme mods.
 */
require get_template_directory() . '/inc/getThemeMods.php';
// Register Custom Navigation Walker 
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

/**
 * Insert custom controls from this theme
 */
require_once get_template_directory() . '/inc/rmbCustomControls.php';
/**
 * Implement the Custom Controls form madison.
 */
require get_template_directory() . '/inc/madison/functions.php';


/**
 * Custom post types and custom
 * taxonomies files
 */
require_once get_template_directory() . '/inc/custom/posts.php';
/**
 * Custom controls
 * taxonomies files
 */
require_once get_template_directory() . '/inc/custom/panel.php';
require_once get_template_directory() . '/inc/custom/section.php';
require_once get_template_directory() . '/inc/custom/settings.php';
require_once get_template_directory() . '/inc/custom/control.php';
require_once get_template_directory() . '/inc/custom/callbacks.php';
require_once get_template_directory() . '/inc/custom/partials.php';
require_once get_template_directory() . '/inc/custom/posts.php';

/**
 * Stick custom post
 */

function insertMetaboxes()
{

    add_meta_box('pseudosticky', 'Destaque', 'insertStickPost', 'product', 'side', 'high');

    function insertStickPost($post, $metabox)
    {
        $entered = get_post_meta($post->ID, 'pseudosticky', true);

        printf(
            '<label><input name="pseudosticky" type="checkbox" %s> Destacar</label>',
            $entered == "on" ? ' checked="checked"' : ''
        );
    }
}

add_action('add_meta_boxes', 'insertMetaboxes');

// Save Meta Details
add_action('save_post', 'save_details');

function save_details()
{
    global $post;

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post->ID;
    }

    update_post_meta($post->ID, "pseudosticky", $_POST["pseudosticky"]);
}



if (!function_exists('wp_body_open')) {

    /**
     * Shim for wp_body_open, ensuring backward compatibility with versions of WordPress older than 5.2.
     */
    function wp_body_open()
    {
        do_action('wp_body_open');
    }
}

/**
 * SVG sprite
 * 
 */
function svg_sprite($name)
{
    $svg = esc_url(get_template_directory_uri() . '/assets/svg/symbol/sprite.svg#' . $name);

    //var_dump($svg);

    echo '<svg shape-rendering="geometricPrecision">
        <use xlink:href="' . $svg . '"/></use>
    </svg>';
}

function get_svg_sprite($name)
{
    $svg = esc_url(get_template_directory_uri() . '/assets/svg/symbol/sprite.svg#' . $name);

    //var_dump($svg);

    return '<svg shape-rendering="geometricPrecision">
        <use xlink:href="' . $svg . '"/></use>
    </svg>';
}

//add class in links menu

function add_specific_menu_location_atts($atts, $item, $args)
{
    // check if the item is in the primary menu
    if ($args->theme_location == 'primary') {
        // add the desired attributes:
        $atts['class'] = 'nav-link';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3);




/**
 * GET Routes of api
 */
require_once get_template_directory() . '/inc/api/routes.php';
//facebook login
require_once get_template_directory() . '/inc/api/facebookLogin.php';

add_action('wp', array('FB_Login', 'check'));

/**
 * Widgets Dashboards
 */
require_once get_template_directory() . '/inc/widgets/votes.php';



/**
 * Customization form login
 * This file contains all structure for modify 
 * the form of register new users
 */
require_once get_template_directory() . '/inc/register/functions.php';

/**
 * Add extra itens in menu
 * 
 */

add_filter('wp_nav_menu_items', 'prefix_add_menu_item', 10, 2);
/**
 * Add Menu Item to end of menu
 */
function prefix_add_menu_item($items, $args)
{

    if ($args->theme_location == 'primary') {
        $new_item       = array(
            '<li class="nav-item"><a data-id="" class="button-orange nav-link " href="#">Loja Tectoy</a></li>',
            '<li class="nav-item">
                     <nav class="language">
                         <a href="#" class="portugues"></a>
                         <a href="#" class="espanhol"></a>
                         <a href="#" class="ingles"></a>
                    </nav>
            </li>'
        );
        $items          = preg_replace('/<\/li>\s<li/', '</li>,<li',  $items);

        $array_items    = explode(',', $items);
        array_splice($array_items, count($array_items), 0, $new_item); // splice in at position 3
        $items          = implode('', $array_items);
    }
    return $items;
}
