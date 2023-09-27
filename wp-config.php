<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'Dorset65..' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         ':4B0Xbq]IWF3#*wg;a*V,U^Vni^-YspO,yd1D:lH(<R^$#5-H=aC(1Mfci7m9i g' );
define( 'SECURE_AUTH_KEY',  'I)cO )&`Q|DUX4Rvug)/WBhB[b|=M9tR/pQ2&j^yb9)<wdH*~}<X,UKj6Sj/M#QP' );
define( 'LOGGED_IN_KEY',    'g/V)QCh~5qzu<f*;Wp6GBHV82`2;ns.FNBn<[[e$p@dz8sQ-ZgHXCQ0b=9+}Pj@<' );
define( 'NONCE_KEY',        'vU>v=[|6FBMft1Q-?AXtZ4{dl-7,m~0uI1=}ZY^(gIb3;<GdLiB{A(0N7EM*>crD' );
define( 'AUTH_SALT',        'h]Uy#g[[HB/]ZUg7Q*{=nM*N*~#ifWd(v1^g0I^rvPr0ex.f;Bqq~4%A4t+uS%db' );
define( 'SECURE_AUTH_SALT', 'F^THAsq5Z+xF!nx1]#L fhmj)N{xz%.7ni:NnsX!CXRN`;{E=y@}[iC-xl6/:K0p' );
define( 'LOGGED_IN_SALT',   'L@JG#U`h~G5I &eN>idV:R%[@%trmu_D3</pql46=={l* @}eknxk5bw&+=m+gWN' );
define( 'NONCE_SALT',       '!t1<a~~Tu{/-3R?5if&qm.Wrl+Oy5?60G!Nciz^=p:jyr|k7}=6qb#7?k2KkK@#A' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
