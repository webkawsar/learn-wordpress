<?php

define( 'HELLO_ELEMENTOR_VERSION', '3.4.4' );
define( 'EHP_THEME_SLUG', 'hello-elementor' );

define( 'HELLO_THEME_PATH', get_template_directory() );
define( 'HELLO_THEME_URL', get_template_directory_uri() );
define( 'HELLO_THEME_ASSETS_PATH', HELLO_THEME_PATH . '/assets/' );
define( 'HELLO_THEME_ASSETS_URL', HELLO_THEME_URL . '/assets/' );
define( 'HELLO_THEME_SCRIPTS_PATH', HELLO_THEME_ASSETS_PATH . 'js/' );
define( 'HELLO_THEME_SCRIPTS_URL', HELLO_THEME_ASSETS_URL . 'js/' );
define( 'HELLO_THEME_STYLE_PATH', HELLO_THEME_ASSETS_PATH . 'css/' );
define( 'HELLO_THEME_STYLE_URL', HELLO_THEME_ASSETS_URL . 'css/' );
define( 'HELLO_THEME_IMAGES_PATH', HELLO_THEME_ASSETS_PATH . 'images/' );
define( 'HELLO_THEME_IMAGES_URL', HELLO_THEME_ASSETS_URL . 'images/' );


if (!function_exists("callbackFunction")) {
    function callbackFunction()
    {
        add_theme_support("post-thumbnails");
        add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));

        // translate language
        load_theme_textdomain("myTranslateId", get_template_directory() . "/languages");

        // Wide & Full alignment (Elementor, Gutenberg)
        add_theme_support('align-wide');
        add_theme_support('responsive-embeds');

        // register sidebar
        register_sidebar(
            array(
                'id' => 'primary',
                'name' => __('Primary Sidebar Test'),
                'description' => __('A short description of the sidebar.'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
            )
        );
    }
}

add_action("after_setup_theme", "callbackFunction");


if ( ! function_exists( 'hello_elementor_display_header_footer' ) ) {
	/**
	 * Check whether to display header footer.
	 *
	 * @return bool
	 */
	function hello_elementor_display_header_footer() {
		$hello_elementor_header_footer = true;

		return apply_filters( 'hello_elementor_header_footer', $hello_elementor_header_footer );
	}
}

if (!function_exists('myCustomCSSAndJSS')) {
    function myCustomCSSAndJSS()
    {

        if (apply_filters('hello_elementor_enqueue_style', true)) {
            wp_enqueue_style(
                'hello-elementor',
                HELLO_THEME_STYLE_URL . 'reset.css',
                [],
                HELLO_ELEMENTOR_VERSION
            );
        }

        if (apply_filters('hello_elementor_enqueue_theme_style', true)) {
            wp_enqueue_style(
                'hello-elementor-theme-style',
                HELLO_THEME_STYLE_URL . 'theme.css',
                [],
                HELLO_ELEMENTOR_VERSION
            );
        }

        if (hello_elementor_display_header_footer()) {
            wp_enqueue_style(
                'hello-elementor-header-footer',
                HELLO_THEME_STYLE_URL . 'header-footer.css',
                [],
                HELLO_ELEMENTOR_VERSION
            );
        }


        // Google Fonts
        wp_enqueue_style(
            'google_fonts',
            'https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap',
            array(),
            null
        );

        // <!-- Bootstrap CSS -->
        wp_enqueue_style('bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css");

        // <!-- Nice Select CSS -->
        wp_enqueue_style('nice_select', get_template_directory_uri() . "/assets/css/nice-select.css");

        // <!-- Font Awesome CSS -->
        wp_enqueue_style('font_awesome', get_template_directory_uri() . "/assets/css/font-awesome.min.css");

        // <!-- icofont CSS -->
        wp_enqueue_style('icofont', get_template_directory_uri() . "/assets/css/icofont.css");

        // <!-- Slicknav -->
        wp_enqueue_style('slicknav', get_template_directory_uri() . "/assets/css/slicknav.min.css");

        // <!-- Owl Carousel CSS -->
        wp_enqueue_style('carousel', get_template_directory_uri() . "/assets/css/owl-carousel.css");

        // <!-- Datepicker CSS -->
        wp_enqueue_style('datepicker', get_template_directory_uri() . "/assets/css/datepicker.css");

        // <!-- Animate CSS -->
        wp_enqueue_style('animate', get_template_directory_uri() . "/assets/css/animate.min.css");

        // <!-- Magnific Popup CSS -->
        wp_enqueue_style('magnific', get_template_directory_uri() . "/assets/css/magnific-popup.css");

        // <!-- Medipro CSS -->
        wp_enqueue_style('normalize', get_template_directory_uri() . "/assets/css/normalize.css");
        wp_enqueue_style('style', get_template_directory_uri() . "/assets/style.css");
        wp_enqueue_style('responsive', get_template_directory_uri() . "/assets/css/responsive.css");

    }

}

add_action('wp_enqueue_scripts', 'myCustomCSSAndJSS');

// if ( ! function_exists( 'hello_elementor_scripts_styles' ) ) {
// 	/**
// 	 * Theme Scripts & Styles.
// 	 *
// 	 * @return void
// 	 */
// 	function hello_elementor_scripts_styles() {
// 		if ( apply_filters( 'hello_elementor_enqueue_style', true ) ) {
// 			wp_enqueue_style(
// 				'hello-elementor',
// 				HELLO_THEME_STYLE_URL . 'reset.css',
// 				[],
// 				HELLO_ELEMENTOR_VERSION
// 			);
// 		}

// 		if ( apply_filters( 'hello_elementor_enqueue_theme_style', true ) ) {
// 			wp_enqueue_style(
// 				'hello-elementor-theme-style',
// 				HELLO_THEME_STYLE_URL . 'theme.css',
// 				[],
// 				HELLO_ELEMENTOR_VERSION
// 			);
// 		}

// 		if ( hello_elementor_display_header_footer() ) {
// 			wp_enqueue_style(
// 				'hello-elementor-header-footer',
// 				HELLO_THEME_STYLE_URL . 'header-footer.css',
// 				[],
// 				HELLO_ELEMENTOR_VERSION
// 			);
// 		}
// 	}
// }
// add_action( 'wp_enqueue_scripts', 'hello_elementor_scripts_styles' );


if (!function_exists("my_menu")) {
    function my_menu()
    {
        register_nav_menus(array(
            "top_menu" => __("Top Menu", "myTranslateId"),
            "primary_menu" => __("Primary Menu", "myTranslateId"),
        ));
    }
}

add_action('init', 'my_menu');



// Add 'dropdown' class to sub-menu <ul>
function my_add_dropdown_class($classes)
{
    $classes[] = 'dropdown';
    return $classes;
}
add_filter('nav_menu_submenu_css_class', 'my_add_dropdown_class');

// Add icon to menu items with children
function my_add_menu_icon($title, $item, $args, $depth)
{
    if (in_array('menu-item-has-children', $item->classes) && $depth === 0) {
        $title .= ' <i class="icofont-rounded-down"></i>';
    }
    return $title;
}
add_filter('nav_menu_item_title', 'my_add_menu_icon', 10, 4);



if (!function_exists('custom_post')) {
    function custom_post()
    {
        register_post_type("team", array(
            "labels" => array(
                "name" => __("BD Team", "myTranslateId"),
                "singular_name" => __("team", "myTranslateId"),
            ),
            "public" => true,
            "has_archive" => true,
        ));


        register_post_type("service", array(
            "labels" => array(
                "name" => __("Services", "myTranslateId"),
                "singular_name" => __("service", "myTranslateId"),
                "add_new_item" => __("Add New Service", "myTranslateId"),
                "add_new" => __("Add New", "myTranslateId"),
            ),
            "public" => true,
            "has_archive" => true,
            "supports" => array("title", "editor", "thumbnail")
        ));


        register_post_type(
            'wporg_product',
            array(
                'labels' => array(
                    'name' => __('Products', 'myTranslateId'),
                    'singular_name' => __('Product', 'myTranslateId'),

                    // এটি override করে labels['name'] এর ভ্যালু। যদি menu_name না দাও, তাহলে name (যেটা 'Products' hobe
                    // 'menu_name'             => __( 'Post Types', 'myTranslateId' ),

                    // WordPress-এর উপরের admin bar-এ, যখন তুমি "New" মেনুতে ক্লিক করো (যেখানে আছে "New Post", "New Page" ইত্যাদি), তখন তোমার কাস্টম পোস্ট টাইপের জন্য দেখাবে
                    // 'name_admin_bar' => __('Product', 'myTranslateId'),

                    // এর মানে হলো, যেখানে তোমার কাস্টম পোস্ট টাইপের সবগুলো পোস্ট একসাথে দেখা যাবে (যেমন yoursite.com/products), সেই আর্কাইভ পেজের জন্য ব্যবহৃত টেক্সট হবে "Item Archives"।
                    // 'archives'              => __( 'Item Archives', 'myTranslateId' ),

                    // 'attributes'            => __( 'Item Attributes', 'myTranslateId' ),
                    // 'parent_item_colon'     => __( 'Parent Item:', 'myTranslateId' ),
                    'all_items' => __('All Products', 'myTranslateId'),
                    'add_new_item' => __('Add Product', 'myTranslateId'),
                    // 'add_new'               => __( 'নতুন যোগ করুন', 'myTranslateId' ),
                    // 'new_item'              => __( 'New Item in UI', 'myTranslateId' ),

                    // edit page er heading
                    'edit_item' => __('Edit Product', 'myTranslateId'),
                    'search_items' => __('Search Product', 'myTranslateId'),
                    'not_found' => __('Not found in Products', 'myTranslateId'),
                    'not_found_in_trash' => __('Not found in Trash', 'myTranslateId'),
                ),
                'public' => true,
                'has_archive' => true,
                'rewrite' => array('slug' => 'products'), // my custom slug
                "supports" => array("title", "editor", "thumbnail"),
            )
        );


    }

}


add_action("init", "custom_post");


require_once get_theme_file_path("inc/add_employee.php");
require_once get_theme_file_path("inc/employee_cat.php");
require_once get_theme_file_path("inc/cmb2/init.php");
require_once get_theme_file_path("inc/cmb2/custom_metaboxes.php");


if (!function_exists("my_custom_meta_box")) {
    function my_custom_meta_box()
    {
        function metabox_callback_function()
        {
            ?>

            <label for="phone_number">Enter phone number</label>
            <input type="text" name="phone_number" id="phone_number">

            <?php
        }

        add_meta_box("phone_number", "Enter phone number", "metabox_callback_function", "employee");
    }
}

add_action('add_meta_boxes', 'my_custom_meta_box');

if (!function_exists('product_add')) {
    function short_code_callback()
    {
        // return "This is desktop product details from shortCode";

        ob_start();
        ?>

        <style>
            .label {
                color: white;
                padding: 8px;
                font-family: Arial;
            }

            .success {
                background-color: #04AA6D;
            }

            /* Green */
            .info {
                background-color: #2196F3;
            }

            /* Blue */
            .warning {
                background-color: #ff9800;
            }

            /* Orange */
            .danger {
                background-color: #f44336;
            }

            /* Red */
            .other {
                background-color: #e7e7e7;
                color: black;
            }

            /* Gray */
        </style>
        </head>

        <body>

            <h1>Labels</h1>

            <span class="label success">Success</span>
            <span class="label info">Info</span>
            <span class="label warning">Warning</span>
            <span class="label danger">Danger</span>
            <span class="label other">Other</span>

        </body>

        <?php

        return ob_get_clean();
    }

    function product_add()
    {
        add_shortcode('product_details', 'short_code_callback');
    }
}

add_action("init", 'product_add');



// Settings API
function custom_settings_init()
{
    // register a new setting for "reading" page
    register_setting('reading', 'custom_phone_number');
    register_setting('reading', 'custom_email');

    // register a new section in the "reading" page. ex: section: "custom_settings_section"
    add_settings_section(
        'custom_settings_section',
        'Homepage Information',
        'custom_homepage_section_callback',
        'reading'
    );

    // register a new field in the "custom_phone_number" section, inside the "reading" page
    add_settings_field(
        'custom_phone_number',
        'Support Phone Number',
        'custom_phone_number_callback',
        'reading',
        'custom_settings_section'
    );

    add_settings_field(
        'custom_email',
        'Support Email',
        'custom_email_callback',
        'reading',
        'custom_settings_section'
    );
}

/**
 * register custom_settings_init to the admin_init action hook
 */
add_action('admin_init', 'custom_settings_init');


/**
 * Settings API
 * callback functions
 */

// section content cb
function custom_homepage_section_callback()
{
    echo '<h5>Homepage All Information.</h5>';
}

// field content cb
function custom_phone_number_callback()
{
    // get the value of the setting we've registered with register_setting()
    $setting = get_option('custom_phone_number');
    // output the field
    ?>
    <input type="text" name="custom_phone_number" value="<?php echo isset($setting) ? esc_attr($setting) : ''; ?>"
        placeholder="Enter support phone number">
    <?php
}

function custom_email_callback()
{
    // get the value of the setting we've registered with register_setting()
    $setting = get_option('custom_email');
    // output the field
    ?>
    <input type="text" name="custom_email" value="<?php echo isset($setting) ? esc_attr($setting) : ''; ?>"
        placeholder="Enter support email address">
    <?php
}

// codestar framework
require_once get_theme_file_path() . '/inc/codestar/codestar-framework.php';
require_once get_theme_file_path() . '/inc/codestar/samples/admin-options.php';


// widget start
class My_Widget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct(
            'my-text',  // Base ID
            'Custom Form'   // Name
        );
        add_action('widgets_init', function () {
            register_widget('My_Widget');
        });
    }

    public $args = array(
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>',
        'before_widget' => '<div class="widget-wrap">',
        'after_widget' => '</div></div>',
    );

    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }
        echo '<div class="textwidget">';
        echo esc_html__($instance['text'], 'text_domain');
        echo '</div>';
        echo $args['after_widget'];
    }

    public function form($instance)
    {
        $title = !empty($instance['title']) ? $instance['title'] : esc_html__('', 'text_domain');
        $text = !empty($instance['text']) ? $instance['text'] : esc_html__('', 'text_domain');
        ?>
        <p>
            <label
                for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php echo esc_html__('Title:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>"
                name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text"
                value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <label
                for="<?php echo esc_attr($this->get_field_id('Text')); ?>"><?php echo esc_html__('Text:', 'text_domain'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('text')); ?>"
                name="<?php echo esc_attr($this->get_field_name('text')); ?>" type="text" cols="30"
                rows="10"><?php echo esc_attr($text); ?></textarea>
        </p>
        <?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['text'] = (!empty($new_instance['text'])) ? $new_instance['text'] : '';
        return $instance;
    }
}
$my_widget = new My_Widget();

// widget end


?>