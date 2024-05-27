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
	define( 'THESTARTUTOR_VERSION', '0.1.3' );
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
				'footer_menu'  => __( 'Footer Menu', 'thestartutor' ),
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
	wp_enqueue_style( 'swiper', get_template_directory_uri() . '/swiper-bundle.min.css', array(), THESTARTUTOR_VERSION, 'all' );
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), THESTARTUTOR_VERSION, true );

	wp_enqueue_style( 'thestartutor-style', get_stylesheet_uri(), array(), THESTARTUTOR_VERSION, 'all' );
	wp_enqueue_script( 'thestartutor-script', get_template_directory_uri() . '/js/script.min.js', array( 'swiper' ), THESTARTUTOR_VERSION, true );

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
if ( ! function_exists( 'thestartutor_custom_walker_nav_menu_setup' ) ) {
	function thestartutor_custom_walker_nav_menu_setup() {
		require_once 'inc/CustomWalkerNavMenu.php';
	}

	add_action( 'after_setup_theme', 'thestartutor_custom_walker_nav_menu_setup' );
}


/**
 * Get full path of the image
 *
 * @param string $img_name Image name.
 * @return string
 */
function thestartutor_get_static_img( $img_name ) {
	return get_template_directory_uri() . '/assets/images/' . $img_name;
}



function add_additional_class_on_li( $classes, $item, $args ) {
	if ( isset( $args->add_li_class ) ) {
		$classes[] = $args->add_li_class;
	}
	return $classes;
}
add_filter( 'nav_menu_css_class', 'add_additional_class_on_li', 1, 3 );


function add_custom_class_to_menu_item( $classes, $item, $args ) {
	if ( is_page( $item->title ) ) {
		// Add the 'text-brand-invert' class to the current menu item
		$classes[] = 'text-brand-invert';
	}
	return $classes;
}
add_filter( 'nav_menu_css_class', 'add_custom_class_to_menu_item', 10, 3 );



/**
 * Custom callback function for wp_list_comments.
 */
function thestartutor_list_comments( $comment, $args, $depth ) {
	if ( $comment->comment_approved == '0' ) {
		return;
	}
	if ( 'div' === $args['style'] ) {
			$tag       = 'div';
			$add_below = 'comment';
	} else {
			$tag       = 'li';
			$add_below = 'div-comment';
	}?>
<<?php echo $tag; ?>
	<?php comment_class( empty( $args['has_children'] ) ? 'flex flex-col py-[24px] px-[24px] gap-[8px]' : 'parent flex flex-col py-[24px] px-[24px] gap-[8px]' ); ?>
	id="comment-<?php comment_ID(); ?>">
									<?php
									if ( 'div' != $args['style'] ) {
										?>
	<div id="div-comment-<?php comment_ID(); ?>" class="comment-body flex flex-col py-[24px] px-[24px] gap-[8px]">
											<?php
									}
									?>
		<div class="comment-author vcard flex gap-[7px]">
			<?php
			if ( $args['avatar_size'] != 0 ) {
				?>
			<div style="background-image: url('<?php echo esc_url( get_avatar_url( $comment->comment_author_email ) ); ?>')"
				class="w-[40px] h-[40px] bg-center bg-cover rounded-full"></div>
				<?php
				// echo get_avatar( $comment, $args['avatar_size'] );
			}
					// printf( __( '<cite class="fn">%s</cite> <span class="says">says:</span>' ), get_comment_author_link() );
			?>
			<div class="flex flex-col">
				<span class="font-semibold text-semibold"><?php echo $comment->comment_author; ?></span>
				<div class="comment-meta commentmetadata text-captionSmall font-captionSmall">
					<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
										<?php
										/*
										translators: 1: date, 2: time */
										// printf(
										// __('%1$s at %2$s'),
										// get_comment_date(),
										// get_comment_time()
										// );
										printf(
											__( '%1$s' ),
											date( 'M d, Y', strtotime( get_comment_date() ) )
										);
										?>
					</a>
					<?php
							edit_comment_link( __( '(Edit)' ), '  ', '' );
					?>
				</div>
			</div>
		</div>

		<div>
			<?php comment_text(); ?>
		</div>

		<div class="reply flex items-center gap-[4px]">
			<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24"
				stroke-width="1.5" stroke="currentColor">
				<path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
			</svg>
			<?php
						comment_reply_link(
							array_merge(
								$args,
								array(
									'add_below' => $add_below,
									'depth'     => $depth,
									'max_depth' => $args['max_depth'],
								)
							)
						);
			?>
		</div>
		<?php
		if ( 'div' != $args['style'] ) :
			?>
	</div>
			<?php
	endif;
}
