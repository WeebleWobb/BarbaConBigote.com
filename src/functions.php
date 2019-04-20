<?php

/* ===========================================================
Theme Support Functions
============================================================== */

add_theme_support( 'post-thumbnails' ); 

add_theme_support('menus');

/* ===========================================================
Navigation Functions
============================================================== */

function register_theme_menus() {
    register_nav_menus(
        array(
            'primary-menu'  =>  __('Primary Menu')
        )
    );
}

add_action('init', 'register_theme_menus');

// Custom Walker Nav Menu
class barba_walker extends Walker_Nav_Menu {

    function start_el(&$output, $item, $depth=0, $args=array(), $id = 0) {
        $object = $item->object;
        $type = $item->type;
        $title = $item->title;
        $permalink = $item->url;

        $output .= '<li class="nav-item">';
        $output .= '<a href="' . $permalink . '" class="nav-link">';
        $output .= $title;
        $output .= '</a>';
        $output .= '</li>';

    }

}

// CSS to head
function barba_theme_style() {
    wp_enqueue_style('bootstrap-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css');
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css?family=Signika+Negative:400,600,700');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'barba_theme_style');


// Scripts to footer
function barba_theme_scripts() {
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '', true);
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), '', true);
    wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js', array('jquery'), '', true);
    wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/releases/v5.0.2/js/all.js', array(), '', true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'barba_theme_scripts');

/* ===========================================================
Custom Color WYSIWYG function
============================================================== */

function custom_color_options($init) {

    $custom_colours = '
        "4F2C1f", "Brown",
        "323232", "Charcoal",
        "EFEFEF", "Grey",
        "F5A800", "Orange",
        "D54935", "Red"
    ';

    // build colour grid default+custom colors
    $init['textcolor_map'] = '['.$custom_colours.']';

    // change the number of rows in the grid if the number of colors changes
    // 8 swatches per row
    $init['textcolor_rows'] = 1;

    return $init;
}

add_filter('tiny_mce_before_init', 'custom_color_options');

/* ===========================================================
WP Login Functions
============================================================== */

// Changes Logo Url
function barba_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'barba_login_logo_url' );

function barba_login_logo_url_title() {
    return 'Juan D. Bolaños: UX/UI Designer | Avid Developer | Analytics enthusiast | User Experience Advocate';
}
add_filter( 'login_headertitle', 'barba_login_logo_url_title' );

// Changes the WP Login Logo
function barba_login_logo() { ?>
    <style type="text/css">
        body.login {
            background-color: #d54935;
            color: #323232;
            padding: 0 30px;
        }
        body.login div#login {
            min-width: 320px;
            max-width: 400px;
            width: 100%
        }
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/barba-logo.png);
			height: 70px;
			width: 320px;
			background-size: 176px 89px;
			background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
        body.login div#login form#loginform {
        	-webkit-box-shadow: 0 0 40px rgba(79, 44, 31, .5);
            box-shadow: 0 0 40px rgba(79, 44, 31, .5);
            border-radius: 5px;
            padding: 30px 35px;
        }
        body.login div#login form#loginform label {
            color: #323232;
        }
        body.login div#login form#loginform input {
            border-color: #d2d2d2;
        }
        body.login div#login form#loginform input:focus {
        	border-color: #efefef;
        	-webkit-box-shadow: 0 0 2px rgba(50, 50, 50, .8);
        	box-shadow: 0 0 2px rgba(50, 50, 50, .8);
        }
        body.login div#login form#loginform p.submit, body.login div#login form#loginform p.forgetmenot {
            margin-top: 1em;
        }
        body.login div#login form#loginform p.submit input#wp-submit {
        	text-decoration: none;
		    padding: 5px 20px;
		    display: inline-block;
		    font-size: .875em;
		    border: none;
		    border-radius: 3px;
		    background-color: #d54935;
		    height: auto;
		    border-color: transparent;
		    box-shadow: none;
		    text-shadow: none;
        }
        body.login div#login form#loginform p.submit input#wp-submit:hover {
        	cursor: pointer;
   			background-color: #f5a800;
        }
        body.login div#login p#backtoblog a, body.login div#login p#nav a {
            color: #efefef;
        }
        body.login div#login p#backtoblog a:hover , body.login div#login p#nav a:hover {
            color: #f5a800;
        }
    </style>
<?php }

add_action( 'login_enqueue_scripts', 'barba_login_logo' );