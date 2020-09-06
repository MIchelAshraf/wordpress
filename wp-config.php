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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
define('WP_TEMP_DIR', ABSPATH . 'wp-content/');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'design' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rmTZ$G2wc=nMds4+*@jir?QW?;Q7=]m2|$snkNkwqJsyu%q>t8wzMR!x@fd[91J$' );
define( 'SECURE_AUTH_KEY',  'CwR1|9SW9(Y -i]p!ElFWX<6Y=-Xl4TRSnT;|Ky.Cp.)u h@]}s;l>lx{9[n7M#t' );
define( 'LOGGED_IN_KEY',    '>0aS2r(xBLmmN3HA1d@p!C8NaOaX&jb>]g<-D`_/>W|MTfi0O-k^LODKje77X=IG' );
define( 'NONCE_KEY',        'uH2j8*YcK~I!0Q%=Q_&:x<#;4XnnNQ$4pEa|Ufuk[P##oSaYfca^mGos`]iX~L@5' );
define( 'AUTH_SALT',        'z f@k$)BuOvm0U[X_&]:uOx}Vl0q{`[0x8?5M8l}!Tzmh*B6d0Ktv#`nU%ZLcyOQ' );
define( 'SECURE_AUTH_SALT', 'EY=#nr$]hNV/jyWpyGTiM7hBUY4*f?mW5*brKX/cW{UC9GiMtYnY<(p?/jmPJ@BI' );
define( 'LOGGED_IN_SALT',   '=Ge 2rd<%-;Y[m9_2lva0m75o1P}RKaZUD{uC>~3U7JRCI/c8mnUG3}>AaFV:pDa' );
define( 'NONCE_SALT',       'Hwva9PV=Y^{YHOP`B>3qC.H#CSyq{WWf3NWtW3PvJ^XviQKQyv#Z{y6[ix<OJ03d' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
