<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'm9NGX8fGZQP/rXDfTPPsK1mL94DnuqudJBdIXhQDThSPXXBLvndGkAqbC08oM8QZnlV5v6qZ1LvF3ex1Rfq88Q==');
define('SECURE_AUTH_KEY',  'mHmAJFPlzty1Velf6xY/hUo65/WQWevO+c7vJdEEdlfnCssay4QwShyquXEl869o9wsBsHCJWcSFHza/tOfh+Q==');
define('LOGGED_IN_KEY',    'dhZRQlYTm2yFLaIPWouhJ/zvekHgg1PDvnw8QsuMXpoubwpC4fwn5BoYxm0zXAS4GhujdJYU9QgrUirvsb31sA==');
define('NONCE_KEY',        'mRZJs+X62P7YcisxTXzvhrhxxw5F0UeNaQKSh8EcCeh+Z3e9mJyG5cka4NCaOq8kZrCYmUFdkkg0VTZrkS+ljQ==');
define('AUTH_SALT',        'qvIoedILZXzlCOms8/N3BqNJ+MUCvqVKtQlZuOL06CflQc5Wk+C/MeA5c9t40x7zQat8jf/Q065lXVitfJsoWg==');
define('SECURE_AUTH_SALT', 'QjnTDQjCR3zMvjTlBKIYmlY0T0D39oO4g0QdUWIAZxUk3FTInX0Tc2Sa2/PjJubh8pSh3MCRaNwlFZlKsFWVyw==');
define('LOGGED_IN_SALT',   'dd41KQ8TxcLoaAAH9MEzDh9pgmFu32MiyDXz0KEdsGi9Nwg9SnLaGss36UlXUnysO2L+HRBaTLakjye/QV4hvQ==');
define('NONCE_SALT',       'i8V2RBxapwKAC32S0D94LAUz9IuAt+5jaxhtByiZdu9Q5YUh1SBBBx/nOTpVI3ChsaDA2Fi1siksqzSPOMvx/g==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
