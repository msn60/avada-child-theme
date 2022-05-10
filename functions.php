<?php
/**
 * The main template that your theme works with it.
 *
 * This file is like a plugin for your template. All of functions and classes
 * that you want to use it in your WordPress theme, are inside in this file.
 *
 * @package    Msn_Avada_Child
 * @version    1.1.1
 * @author     Mehdi Soltani <soltani.n.mehdi@gmail.com>
 * @link       https://github.com/msn60
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use Msn_Avada_Child\Inc\Core\Constant;

final class Main_Avada_Child_Theme {
	/**
	 * Instance property of Main_Avada_Child_Theme Class.
	 *
	 * @access private
	 * @var    Main_Avada_Child_Theme $instance create only one instance from plugin primary class
	 * @static
	 */
	private static $instance;

	/**
	 * The unique identifier of this theme.
	 *
	 * @since    1.1.1
	 * @access   protected
	 * @var      string $theme_name The string used to uniquely identify this theme.
	 */
	protected $theme_name;
	/**
	 * The current version of the theme.
	 *
	 * @since    1.1.1
	 * @access   protected
	 * @var      string $theme_version The current version of the theme.
	 */
	protected $theme_version;

	private function __construct() {
		$autoloader_path = 'inc/class-autoloader.php';
		require_once trailingslashit( get_theme_file_path() ) . $autoloader_path;
		Constant::define_constant();

		if ( defined( 'MSN_CHILD_VERSION' ) ) {
			$this->theme_version = MSN_CHILD_VERSION;
		} else {
			$this->theme_version = '1.1.1';
		}

	}

	public function init_theme() {
		$this->register_general_add_action();
	}

	public function register_general_add_action() {
		add_action( 'wp_enqueue_scripts', array( $this, 'register_css_files' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'register_js_files' ) );
		add_action( 'after_setup_theme', array( $this, 'setup_language_file' ) );
	}

	public function register_general_add_filter() {
		add_filter( 'woocommerce_checkout_fields', 'override_checkout_fields' );
	}

	public function setup_language_file() {
		load_child_theme_textdomain( 'Avada', MSN_CHILD_LANG );
		/*$lang = get_stylesheet_directory() . '/languages';
		load_child_theme_textdomain( 'Avada', $lang );*/
	}

	public function register_css_files() {
		// enqueue parent styles
		//wp_enqueue_style('parent-theme', get_template_directory_uri() . '/style.css');
		wp_register_style( 'msn-custom-child-style', MSN_CHILD_CSS . 'custom.css', [], MSN_CHILD_CSS_VERSION );
		wp_enqueue_style( 'msn-custom-child-style' );

	}

	public function register_js_files() {
		//wp_enqueue_script( 'msncustom.script', get_stylesheet_directory_uri() . '/msn-jesm-1-0-0.js', array( 'jquery' ), 2, true );
		wp_register_script( 'msn-custom-child-js', MSN_CHILD_JS . 'custom.js', array(), MSN_CHILD_CSS_VERSION, true );
		wp_enqueue_script( 'msn-custom-child-js' );
	}

	public function override_checkout_fields( $fields ) {
		//unset($fields['billing']['billing_state']);
		unset( $fields['billing']['billing_country'] );
		unset( $fields['billing']['billing_company'] );
		//unset($fields['billing']['billing_address_1']);
		unset( $fields['billing']['billing_address_2'] );
		unset( $fields['billing']['billing_postcode'] );
		unset( $fields['billing']['billing_city'] );
		//unset($fields['shipping']['shipping_state']);
		unset( $fields['shipping']['shipping_country'] );
		unset( $fields['shipping']['shipping_company'] );
		//unset($fields['shipping']['shipping_address_1']);
		unset( $fields['shipping']['shipping_address_2'] );
		unset( $fields['shipping']['shipping_postcode'] );
		unset( $fields['shipping']['shipping_city'] );
		return $fields;
	}

	public static function instance() {
		if ( is_null( ( self::$instance ) ) ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

}

$main_avada_child_theme_object = Main_Avada_Child_Theme::instance();
$main_avada_child_theme_object->init_theme();










