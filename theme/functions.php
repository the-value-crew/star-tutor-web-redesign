<?php
/**
 * thestartutor functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package thestartutor
 */

if ( ! defined( 'THESTARTUTOR_VERSION' ) ) {
	/*
	 * Set the theme's version number.
	 *
	 * This is used primarily for cache busting. If you use `npm run bundle`
	 * to create your production build, the value below will be replaced in the
	 * generated zip file with a timestamp, converted to base 36.
	 */
	define( 'THESTARTUTOR_VERSION', '0.1.2' );
}

if ( ! defined( 'THESTARTUTOR_TYPOGRAPHY_CLASSES' ) ) {
	/*
	 * Set Tailwind Typography classes for the front end, block editor and
	 * classic editor using the constant below.
	 *
	 * For the front end, these classes are added by the `thestartutor_content_class`
	 * function. You will see that function used everywhere an `entry-content`
	 * or `page-content` class has been added to a wrapper element.
	 *
	 * For the block editor, these classes are converted to a JavaScript array
	 * and then used by the `./javascript/block-editor.js` file, which adds
	 * them to the appropriate elements in the block editor (and adds them
	 * again when they're removed.)
	 *
	 * For the classic editor (and anything using TinyMCE, like Advanced Custom
	 * Fields), these classes are added to TinyMCE's body class when it
	 * initializes.
	 */
	define(
		'THESTARTUTOR_TYPOGRAPHY_CLASSES',
		'prose prose-neutral max-w-none prose-a:text-primary'
	);
}

if ( ! function_exists( 'thestartutor_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function thestartutor_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on thestartutor, use a find and replace
		 * to change 'thestartutor' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'thestartutor', get_template_directory() . '/languages' );

    // Custom logo support
    add_theme_support( 'custom-logo' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
      array(
        'primary_menu' => __( 'Primary Menu', 'thestartutor' ),
        'footer_menu' => __( 'Footer Menu', 'thestartutor' ),
      )
    );

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
				'style',
				'script',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );
		add_editor_style( 'style-editor-extra.css' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Remove support for block templates.
		remove_theme_support( 'block-templates' );
	}
endif;
add_action( 'after_setup_theme', 'thestartutor_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function thestartutor_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Footer', 'thestartutor' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'thestartutor' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'thestartutor_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function thestartutor_scripts() {
	wp_enqueue_style( 'thestartutor-style', get_stylesheet_uri(), array(), THESTARTUTOR_VERSION );
	wp_enqueue_script( 'thestartutor-script', get_template_directory_uri() . '/js/script.min.js', array(), THESTARTUTOR_VERSION, true );

  // Custom
  wp_enqueue_style("thestartutor-main", get_template_directory_uri() . "/assets/css/main.css", array(), THESTARTUTOR_VERSION, "all");
  wp_enqueue_script("thestartutor-main", get_template_directory_uri() . "/assets/js/main.js", array(), THESTARTUTOR_VERSION, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'thestartutor_scripts' );

/**
 * Enqueue the block editor script.
 */
function thestartutor_enqueue_block_editor_script() {
	wp_enqueue_script(
		'thestartutor-editor',
		get_template_directory_uri() . '/js/block-editor.min.js',
		array(
			'wp-blocks',
			'wp-edit-post',
		),
		THESTARTUTOR_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'thestartutor_enqueue_block_editor_script' );

/**
 * Enqueue the script necessary to support Tailwind Typography in the block
 * editor, using an inline script to create a JavaScript array containing the
 * Tailwind Typography classes from THESTARTUTOR_TYPOGRAPHY_CLASSES.
 */
function thestartutor_enqueue_typography_script() {
	if ( is_admin() ) {
		wp_enqueue_script(
			'thestartutor-typography',
			get_template_directory_uri() . '/js/tailwind-typography-classes.min.js',
			array(
				'wp-blocks',
				'wp-edit-post',
			),
			THESTARTUTOR_VERSION,
			true
		);
		wp_add_inline_script( 'thestartutor-typography', "tailwindTypographyClasses = '" . esc_attr( THESTARTUTOR_TYPOGRAPHY_CLASSES ) . "'.split(' ');", 'before' );
	}
}
add_action( 'enqueue_block_assets', 'thestartutor_enqueue_typography_script' );

/**
 * Add the Tailwind Typography classes to TinyMCE.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function thestartutor_tinymce_add_class( $settings ) {
	$settings['body_class'] = THESTARTUTOR_TYPOGRAPHY_CLASSES;
	return $settings;
}
add_filter( 'tiny_mce_before_init', 'thestartutor_tinymce_add_class' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';


// Custom walker nav menu
if(!function_exists("thestartutor_custom_walker_nav_menu_setup")) {
  function thestartutor_custom_walker_nav_menu_setup() {
    require_once("inc/CustomWalkerNavMenu.php");
  }

  add_action("after_setup_theme", "thestartutor_custom_walker_nav_menu_setup");
}


/**
 * Get full path of the image
 *
 * @param string $img_name Image name.
 * @return string
 */
function thestartutor_get_static_img($img_name) {
  return get_template_directory_uri() . "/assets/images/" . $img_name;
}

/**
 * Custom callback function for wp_list_comments.
 * 
 */
function thestartutor_list_comments($comment, $args, $depth) { ?>
	<div id="<?php comment_ID(); ?>" class="flex flex-col py-[24px] px-[24px] gap-[8px]">
	<div class="flex gap-[7px]">
			<div style="background-image: url('<?php echo esc_url( get_avatar_url( $comment->comment_author_email ) ); ?>')" class="w-[40px] h-[40px] bg-center bg-cover rounded-full"></div>
			<div class="flex flex-col">
					<span class="text-semibold font-semibold"><?php echo $comment->comment_author; ?></span>
					<span class="text-captionSmall font-captionSmall"><?php echo date("M d, Y", strtotime($comment->comment_date)); ?></span>
			</div>
	</div>
	<div>
		<?php comment_text(); ?>
	</div>
	<div class="mt-[10px] flex items-center gap-[16px]">
			<div class="flex items-center gap-[4px]">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
							<path d="M17.7077 6.2567V11.7626C17.7077 12.1965 17.6223 12.6261 17.4562 13.0269C17.2902 13.4276 17.0468 13.7919 16.7401 14.0986C16.4333 14.4054 16.0691 14.6487 15.6683 14.8147C15.2675 14.9807 14.8379 15.0662 14.4041 15.0662H12.2018L10.3848 16.8831C10.3353 16.9358 10.2756 16.9778 10.2093 17.0066C10.143 17.0352 10.0716 17.0501 9.99935 17.0501C9.9271 17.0501 9.85568 17.0352 9.78935 17.0066C9.7231 16.9778 9.66335 16.9358 9.61393 16.8831L7.79697 15.0662H5.59459C4.71842 15.0662 3.87815 14.7181 3.25861 14.0986C2.63907 13.4791 2.29102 12.6388 2.29102 11.7626V6.2567C2.29102 5.38053 2.63907 4.54026 3.25861 3.92072C3.87815 3.30117 4.71842 2.95312 5.59459 2.95312H14.4041C15.2803 2.95312 16.1205 3.30117 16.7401 3.92072C17.3596 4.54026 17.7077 5.38053 17.7077 6.2567Z" stroke="#7A7A7A" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
					<span class="text-captionBig font-captionBig text-secondary">3 Replies</span>
			</div>
			<div class="flex items-center gap-[4px]">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
							<path d="M4.7918 7.84375H3.80555C2.98851 7.84375 2.32617 8.50613 2.32617 9.32313V16.2269C2.32617 17.044 2.98851 17.7063 3.80555 17.7063H4.7918C5.60884 17.7063 6.27118 17.044 6.27118 16.2269V9.32313C6.27118 8.50613 5.60884 7.84375 4.7918 7.84375Z" stroke="#7A7A7A" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M17.6331 10.2L16.4496 16.1175C16.3594 16.5716 16.1124 16.9795 15.7518 17.2697C15.3911 17.5601 14.94 17.7142 14.4771 17.7054H8.24398C7.72085 17.7054 7.21913 17.4976 6.84922 17.1276C6.4793 16.7577 6.27148 16.256 6.27148 15.7329V9.8154C6.28733 9.43556 6.38341 9.06348 6.55339 8.72348C6.72338 8.38356 6.96343 8.0834 7.25773 7.84286L8.07633 2.9116C8.09478 2.79656 8.14014 2.68751 8.20873 2.59332C8.27732 2.49914 8.36722 2.42249 8.47097 2.36961C8.5748 2.31674 8.68963 2.28914 8.80622 2.28906C8.92272 2.28899 9.03755 2.31643 9.14147 2.36916L10.0587 2.82285C10.6646 3.12245 11.1498 3.62055 11.4333 4.23423C11.7168 4.84791 11.7816 5.54017 11.617 6.19582L11.2027 7.833H15.7001C15.9926 7.83294 16.2815 7.89794 16.5457 8.0233C16.8101 8.14867 17.0432 8.33123 17.2282 8.55781C17.4132 8.7844 17.5455 9.04931 17.6156 9.33331C17.6856 9.61731 17.6916 9.9134 17.6331 10.2Z" stroke="#7A7A7A" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
					<span class="text-captionBig font-captionBig text-secondary">24 Likes</span>
			</div>
	</div>
</div>
<?php
}