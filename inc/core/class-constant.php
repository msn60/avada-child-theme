<?php
/**
 * Constant Class File
 *
 * This file contains Constant class which defines needed constants to ease
 * your theme development processes.
 *
 * @package    Msn_Avada_Child
 * @author     Mehdi Soltani <soltani.n.mehdi@gmail.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://github.com/msn60
 * @since      1.1.1
 */

namespace Msn_Avada_Child\Inc\Core;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class Constant
 *
 * This class defines needed constants that you will use in theme development.
 *
 * @package    Msn_Avada_Child
 * @author     Mehdi Soltani <soltani.n.mehdi@gmail.com>
 */
class Constant {

	/**
	 * Define define_constant method in Constant class
	 *
	 * It defines all of constants that you need
	 *
	 * @access  public
	 * @static
	 */
	public static function define_constant() {

		/**
		 * MSN_CHILD_PATH constant.
		 * It is used to specify plugin path
		 */
		if ( ! defined( 'MSN_CHILD_PATH' ) ) {
			define( 'MSN_CHILD_PATH', trailingslashit( get_theme_file_path() ) );
		}

		/**
		 * MSN_CHILD_URL constant.
		 * It is used to specify plugin urls
		 */
		if ( ! defined( 'MSN_CHILD_URL' ) ) {
			define( 'MSN_CHILD_URL', trailingslashit( get_theme_file_uri() ) );
		}

		/**
		 * MSN_CHILD_CSS constant.
		 * It is used to specify css urls inside assets directory. It's used in front end and
		 * using to  load related CSS files for front end user.
		 */
		if ( ! defined( 'MSN_CHILD_CSS' ) ) {
			define( 'MSN_CHILD_CSS', trailingslashit( MSN_CHILD_URL ) . 'assets/css/' );
		}

		/**
		 * MSN_CHILD_JS constant.
		 * It is used to specify JavaScript urls inside assets directory. It's used in front end and
		 * using to load related JS files for front end user.
		 */
		if ( ! defined( 'MSN_CHILD_JS' ) ) {
			define( 'MSN_CHILD_JS', trailingslashit( MSN_CHILD_URL ) . 'assets/js/' );
		}

		/**
		 * MSN_CHILD_IMG constant.
		 * It is used to specify image urls inside assets directory. It's used in front end and
		 * using to load related image files for front end user.
		 */
		if ( ! defined( 'MSN_CHILD_IMG' ) ) {
			define( 'MSN_CHILD_IMG', trailingslashit( MSN_CHILD_URL ) . 'assets/images/' );
		}

		/**
		 * MSN_CHILD_TPL constant.
		 * It is used to specify template path inside templates directory.
		 */
		if ( ! defined( 'MSN_CHILD_TPL' ) ) {
			define( 'MSN_CHILD_TPL', trailingslashit( MSN_CHILD_PATH . 'template-parts' ) );
		}

		/**
		 * MSN_CHILD_INC constant.
		 * It is used to specify include path inside includes directory.
		 */
		if ( ! defined( 'MSN_CHILD_INC' ) ) {
			define( 'MSN_CHILD_INC', trailingslashit( MSN_CHILD_PATH . 'inc' ) );
		}

		/**
		 * MSN_CHILD_LANG constant.
		 * It is used to specify language path inside languages directory.
		 */
		if ( ! defined( 'MSN_CHILD_LANG' ) ) {
			define( 'MSN_CHILD_LANG', trailingslashit( MSN_CHILD_PATH . 'languages' ) );
		}

		/**
		 * MSN_CHILD_CSS_VERSION constant.
		 * You can use from this constant to apply on main CSS file when you have changed it.
		 */
		if ( ! defined( 'MSN_CHILD_CSS_VERSION' ) ) {
			define( 'MSN_CHILD_CSS_VERSION', '1.1' );
		}
		/**
		 * MSN_CHILD_JS_VERSION constant.
		 * You can use from this constant to apply on main JS file when you have changed it.
		 */
		if ( ! defined( 'MSN_CHILD_JS_VERSION' ) ) {
			define( 'MSN_CHILD_JS_VERSION', '1.1' );
		}

		/**
		 * MSN_CHILD_VERSION constant.
		 * It is used to specify theme version for development purpose.
		 */
		if ( ! defined( 'MSN_CHILD_VERSION' ) ) {
			define( 'MSN_CHILD_VERSION', '1.1.1' );
		}

		/**
		 * MSN_TEXT_DOMAIN_NAME constant.
		 * It specifies text domain name for theme
		 */
		if ( ! defined( 'MSN_CHILD_TEXT_DOMAIN' ) ) {
			define( 'MSN_CHILD_TEXT_DOMAIN', 'Avada' );
		}

		/*In future maybe I want to add constants for separated upload directory inside plugin directory*/
	}

}