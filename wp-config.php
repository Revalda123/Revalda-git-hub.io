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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'surat-undangan' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'mdV34BT680jCvU4CcT5QrfAKa93wjKEkR9PUFti2PgUzYlObqKNKz4uaIiEc93wj' );
define( 'SECURE_AUTH_KEY',  '17kWAMCHriAVOizUJ8neuvodx6wgqJ04p42juCdDl2lGkuzAcPisRVthKXZJFjrw' );
define( 'LOGGED_IN_KEY',    'MLaTXPLph4RxxzyIEYagshHIfcaOQ3XuonvgfsJQNLbNZdMEI8CSDDbtTwZ8Ykx8' );
define( 'NONCE_KEY',        'vLkGwAcI1vlYJp4hFZRz8jQvC4fcmWqsyJzcdqRPfNYLQqfsnIEkzDvXzdKWTURt' );
define( 'AUTH_SALT',        '8gshTp8nzZECCARYkOTKkJdJuuYQveTgtC3zZyprGKd2qk6UcKJmMxLouCDnLk3V' );
define( 'SECURE_AUTH_SALT', 'R7X0ROpTl7wEzDCaNf0p0DWn2tPNtk3X3sj1lsJx99xyGiqPMbpiDTMepJ1ZoCKU' );
define( 'LOGGED_IN_SALT',   '3xf1phulRpU1kLC6yn9f1MT1TmCRMgvOo7rFfvLkCw07MX3rvwaTfkq2KV4EC3RG' );
define( 'NONCE_SALT',       'YlNjMzQ8Ys9CU8L2JfH9GV0Mqa0itAESrQWdY4e064A5xvD6I4KFzRzZ9D01lGTq' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
