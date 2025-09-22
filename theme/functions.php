<?php
/**
 * scs_consultoria functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package scs_consultoria
 */

if ( ! defined( 'SCS_CONSULTORIA_VERSION' ) ) {
	/*
	 * Set the theme's version number.
	 *
	 * This is used primarily for cache busting. If you use `npm run bundle`
	 * to create your production build, the value below will be replaced in the
	 * generated zip file with a timestamp, converted to base 36.
	 */
	define( 'SCS_CONSULTORIA_VERSION', '0.1.0' );
}

if ( ! defined( 'SCS_CONSULTORIA_TYPOGRAPHY_CLASSES' ) ) {
	/*
	 * Set Tailwind Typography classes for the front end, block editor and
	 * classic editor using the constant below.
	 *
	 * For the front end, these classes are added by the `scs_consultoria_content_class`
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
		'SCS_CONSULTORIA_TYPOGRAPHY_CLASSES',
		'prose prose-neutral max-w-none prose-a:text-primary'
	);
}

if ( ! function_exists( 'scs_consultoria_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function scs_consultoria_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on scs_consultoria, use a find and replace
		 * to change 'scs_consultoria' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'scs_consultoria', get_template_directory() . '/languages' );

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
				'menu-1' => __( 'Primary', 'scs_consultoria' ),
				'menu-2' => __( 'Footer Menu', 'scs_consultoria' ),
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
add_action( 'after_setup_theme', 'scs_consultoria_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function scs_consultoria_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Footer', 'scs_consultoria' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'scs_consultoria' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'scs_consultoria_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function scs_consultoria_scripts() {
	wp_enqueue_style( 'scs_consultoria-style', get_stylesheet_uri(), array(), SCS_CONSULTORIA_VERSION );
	wp_enqueue_script( 'scs_consultoria-script', get_template_directory_uri() . '/js/script.min.js', array(), SCS_CONSULTORIA_VERSION, true );
	wp_enqueue_script( 'scs_consultoria-custom-animations', get_template_directory_uri() . '/js/custom-animations.js', array('scs_consultoria-script'), SCS_CONSULTORIA_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'scs_consultoria_scripts' );

/**
 * Enqueue the block editor script.
 */
function scs_consultoria_enqueue_block_editor_script() {
	$current_screen = function_exists( 'get_current_screen' ) ? get_current_screen() : null;

	if (
		$current_screen &&
		$current_screen->is_block_editor() &&
		'widgets' !== $current_screen->id
	) {
		wp_enqueue_script(
			'scs_consultoria-editor',
			get_template_directory_uri() . '/js/block-editor.min.js',
			array(
				'wp-blocks',
				'wp-edit-post',
			),
			SCS_CONSULTORIA_VERSION,
			true
		);
		wp_add_inline_script( 'scs_consultoria-editor', "tailwindTypographyClasses = '" . esc_attr( SCS_CONSULTORIA_TYPOGRAPHY_CLASSES ) . "'.split(' ');", 'before' );
	}
}
add_action( 'enqueue_block_assets', 'scs_consultoria_enqueue_block_editor_script' );

/**
 * Add the Tailwind Typography classes to TinyMCE.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function scs_consultoria_tinymce_add_class( $settings ) {
	$settings['body_class'] = SCS_CONSULTORIA_TYPOGRAPHY_CLASSES;
	return $settings;
}
add_filter( 'tiny_mce_before_init', 'scs_consultoria_tinymce_add_class' );

/**
 * Limit the block editor to heading levels supported by Tailwind Typography.
 *
 * @param array  $args Array of arguments for registering a block type.
 * @param string $block_type Block type name including namespace.
 * @return array
 */
function scs_consultoria_modify_heading_levels( $args, $block_type ) {
	if ( 'core/heading' !== $block_type ) {
		return $args;
	}

	// Remove <h1>, <h5> and <h6>.
	$args['attributes']['levelOptions']['default'] = array( 2, 3, 4 );

	return $args;
}
add_filter( 'register_block_type_args', 'scs_consultoria_modify_heading_levels', 10, 2 );

/**
 * Handle form submission for diagnostico
 */
function handle_diagnostico_form_submission() {
	// Verify nonce for security
	if ( ! isset( $_POST['diagnostico_nonce'] ) || ! wp_verify_nonce( $_POST['diagnostico_nonce'], 'diagnostico_form' ) ) {
		wp_die( __( 'Security check failed.', 'scs_consultoria' ) );
	}

	// Sanitize form data
	$nome = sanitize_text_field( $_POST['nome'] );
	$empresa = sanitize_text_field( $_POST['empresa'] );
	$cargo = sanitize_text_field( $_POST['cargo'] );
	$email = sanitize_email( $_POST['email'] );
	$telefone = sanitize_text_field( $_POST['telefone'] );

	// Validate required fields
	if ( empty( $nome ) || empty( $empresa ) || empty( $cargo ) || empty( $email ) || empty( $telefone ) ) {
		wp_redirect( home_url( '/?error=1' ) );
		exit;
	}

	// Validate email
	if ( ! is_email( $email ) ) {
		wp_redirect( home_url( '/?error=2' ) );
		exit;
	}

	// Prepare email content
	$subject = 'Nova Solicitação de Diagnóstico - Recupera S+';
	$message = "Nova solicitação de diagnóstico recebida:\n\n";
	$message .= "Nome: {$nome}\n";
	$message .= "Empresa: {$empresa}\n";
	$message .= "Cargo: {$cargo}\n";
	$message .= "Email: {$email}\n";
	$message .= "Telefone: {$telefone}\n\n";
	$message .= "Data/Hora: " . current_time( 'Y-m-d H:i:s' ) . "\n";
	$message .= "IP: " . $_SERVER['REMOTE_ADDR'] . "\n";

	// Email headers
	$headers = array(
		'Content-Type: text/plain; charset=UTF-8',
		'From: ' . get_bloginfo( 'name' ) . ' <noreply@' . $_SERVER['HTTP_HOST'] . '>',
		'Reply-To: ' . $email,
	);

	// Send email to admin
	$admin_email = get_option( 'admin_email' );
	wp_mail( $admin_email, $subject, $message, $headers );

	// Save to database (optional - create custom table or use options)
	$submission_data = array(
		'nome' => $nome,
		'empresa' => $empresa,
		'cargo' => $cargo,
		'email' => $email,
		'telefone' => $telefone,
		'data' => current_time( 'mysql' ),
		'ip' => $_SERVER['REMOTE_ADDR'],
	);
	
	// Save as option (you might want to create a custom table instead)
	$submissions = get_option( 'diagnostico_submissions', array() );
	$submissions[] = $submission_data;
	update_option( 'diagnostico_submissions', $submissions );

	// Redirect with success message
	wp_redirect( home_url( '/?success=1' ) );
	exit;
}
add_action( 'admin_post_submit_diagnostico', 'handle_diagnostico_form_submission' );
add_action( 'admin_post_nopriv_submit_diagnostico', 'handle_diagnostico_form_submission' );

/**
 * Add admin menu for viewing submissions
 */
function scs_consultoria_admin_menu() {
	add_menu_page(
		__( 'Diagnósticos', 'scs_consultoria' ),
		__( 'Diagnósticos', 'scs_consultoria' ),
		'manage_options',
		'diagnosticos',
		'scs_consultoria_diagnosticos_page',
		'dashicons-clipboard',
		30
	);
}
add_action( 'admin_menu', 'scs_consultoria_admin_menu' );

/**
 * Diagnosticos admin page
 */
function scs_consultoria_diagnosticos_page() {
	$submissions = get_option( 'diagnostico_submissions', array() );
	?>
	<div class="wrap">
		<h1><?php _e( 'Solicitações de Diagnóstico', 'scs_consultoria' ); ?></h1>
		
		<?php if ( empty( $submissions ) ) : ?>
			<p><?php _e( 'Nenhuma solicitação encontrada.', 'scs_consultoria' ); ?></p>
		<?php else : ?>
			<table class="wp-list-table widefat fixed striped">
				<thead>
					<tr>
						<th><?php _e( 'Data', 'scs_consultoria' ); ?></th>
						<th><?php _e( 'Nome', 'scs_consultoria' ); ?></th>
						<th><?php _e( 'Empresa', 'scs_consultoria' ); ?></th>
						<th><?php _e( 'Cargo', 'scs_consultoria' ); ?></th>
						<th><?php _e( 'Email', 'scs_consultoria' ); ?></th>
						<th><?php _e( 'Telefone', 'scs_consultoria' ); ?></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ( array_reverse( $submissions ) as $submission ) : ?>
						<tr>
							<td><?php echo esc_html( $submission['data'] ); ?></td>
							<td><?php echo esc_html( $submission['nome'] ); ?></td>
							<td><?php echo esc_html( $submission['empresa'] ); ?></td>
							<td><?php echo esc_html( $submission['cargo'] ); ?></td>
							<td><a href="mailto:<?php echo esc_attr( $submission['email'] ); ?>"><?php echo esc_html( $submission['email'] ); ?></a></td>
							<td><?php echo esc_html( $submission['telefone'] ); ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		<?php endif; ?>
	</div>
	<?php
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
