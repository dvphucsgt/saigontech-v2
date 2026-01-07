<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * This has been slightly modified (to read environment variables) for use in Docker.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// IMPORTANT: this file needs to stay in-sync with https://github.com/WordPress/WordPress/blob/master/wp-config-sample.php
// (it gets parsed by the upstream wizard in https://github.com/WordPress/WordPress/blob/f27cb65e1ef25d11b535695a660e7282b98eb742/wp-admin/setup-config.php#L356-L392)

// a helper function to lookup "env_FILE", "env", then fallback
if (!function_exists('getenv_docker')) {
	// https://github.com/docker-library/wordpress/issues/588 (WP-CLI will load this file 2x)
	function getenv_docker($env, $default)
	{
		if ($fileEnv = getenv($env . '_FILE')) {
			return rtrim(file_get_contents($fileEnv), "\r\n");
		} else if (($val = getenv($env)) !== false) {
			return $val;
		} else {
			return $default;
		}
	}
}


// Basic Authentication
if (!function_exists('http_authenticate')) {
	function http_authenticate($user, $pass)
	{
		header('WWW-Authenticate: Basic realm="SGTech Homepage"');
		header('HTTP/1.0 401 Unauthorized');
		echo 'You must login to access this site.';
		exit;
	}
}

$auth_user = getenv_docker('BASIC_AUTH_USER', 'sgtech');
$auth_pass = getenv_docker('BASIC_AUTH_PASS', 'sgtech2026');

if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) || $_SERVER['PHP_AUTH_USER'] != $auth_user || $_SERVER['PHP_AUTH_PW'] != $auth_pass) {
	// Only apply authentication if not in CLI mode
	if (php_sapi_name() != 'cli') {
		http_authenticate($auth_user, $auth_pass);
	}
}

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv_docker('WORDPRESS_DB_NAME', 'sgtech_db'));

/** Database username */
define('DB_USER', getenv_docker('WORDPRESS_DB_USER', 'sgtech_user'));

/** Database password */
define('DB_PASSWORD', getenv_docker('WORDPRESS_DB_PASSWORD', 'AxrA6eRhcEY7X6e6eZxMQeMG9'));

/**
 * Docker image fallback values above are sourced from the official WordPress installation wizard:
 * https://github.com/WordPress/WordPress/blob/1356f6537220ffdc32b9dad2a6cdbe2d010b7a88/wp-admin/setup-config.php#L224-L238
 * (However, using "example username" and "example password" in your database is strongly discouraged.  Please use strong, random credentials!)
 */

/** Database hostname */
define('DB_HOST', getenv_docker('WORDPRESS_DB_HOST', '127.0.0.1'));

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', getenv_docker('WORDPRESS_AUTH_KEY', '2ca1c912bf38ca573427990675467bf60df2158a'));
define('SECURE_AUTH_KEY', getenv_docker('WORDPRESS_SECURE_AUTH_KEY', 'd63fccddb4acc2aa672b565a0aa953c4b4ed9ed2'));
define('LOGGED_IN_KEY', getenv_docker('WORDPRESS_LOGGED_IN_KEY', '75c2dcd31ce54c77e10a041b08633d68f306db18'));
define('NONCE_KEY', getenv_docker('WORDPRESS_NONCE_KEY', '73a4a0306812b6d11fbebc3974b5757347516541'));
define('AUTH_SALT', getenv_docker('WORDPRESS_AUTH_SALT', '7712b61a0a852d58699ba2ac83d7be8edbb6e672'));
define('SECURE_AUTH_SALT', getenv_docker('WORDPRESS_SECURE_AUTH_SALT', 'dd796d1fcf67dacc90e48fefb259c7ea88d8ac6e'));
define('LOGGED_IN_SALT', getenv_docker('WORDPRESS_LOGGED_IN_SALT', '0f38343e3f2d508bc24e1b823c92046bc4def829'));
define('NONCE_SALT', getenv_docker('WORDPRESS_NONCE_SALT', '23033cc22f4ad4e36b4833a43fe3f84789b32f37'));
// (See also https://wordpress.stackexchange.com/a/152905/199287)

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */

// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also https://wordpress.org/support/article/administration-over-ssl/#using-a-reverse-proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false) {
	$_SERVER['HTTPS'] = 'on';
}
// (we include this by default because reverse proxying is extremely common in container environments)

// Disable script concatenation to fix broken admin styles in some environments
define('CONCATENATE_SCRIPTS', false);

// Force site and home URLs dynamically to support different hostnames (localhost, ngrok, etc.)
if (isset($_SERVER['HTTP_HOST'])) {
	$http_host = $_SERVER['HTTP_HOST'];
	if (isset($_SERVER['HTTP_X_FORWARDED_HOST'])) {
		$http_host = $_SERVER['HTTP_X_FORWARDED_HOST'];
	}
	$schema = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? 'https://' : 'http://';
	define('WP_HOME', $schema . $http_host);
	define('WP_SITEURL', $schema . $http_host);
} else {
	// Fallback for CLI and other environments where HTTP_HOST is not set
	define('WP_HOME', 'http://localhost:8080');
	define('WP_SITEURL', 'http://localhost:8080');
}

// Debugging for scripts and styles
define('SCRIPT_DEBUG', true);

/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
