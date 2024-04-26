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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
/* define( 'DB_NAME', 'six4aabfqe7m5fte' );*/ 
define( 'DB_NAME', 'six4aabfqe7m5fte' );

/** Database username */
// define( 'DB_USER', 'root' );
define( 'DB_USER', 'r0b5vcfwlz2co0nc' );

/** Database password */
// define( 'DB_PASSWORD', '' );
define( 'DB_PASSWORD', 'nhjdorjlpitsgi7u' );

/** Database hostname */
// define( 'DB_HOST', 'localhost' );
define( 'DB_HOST', 'zj2x67aktl2o6q2n.cbetxkdyhwsb.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         '<tB-F*z-:sw]Sp=.&nECKq*_#O`D} !}y(7<vYA`{m}=#OGZ~?3#F47T5%TOG[(]' );
define( 'SECURE_AUTH_KEY',  'lr^ac5[/[2f48Z{pX`*I!$w/IN3N6ZUrS%K-eHiVzdCOn/pb?FmB(!0q@{6|c3fy' );
define( 'LOGGED_IN_KEY',    'FlWhcb-Aea4=][c` ,ow3aDwx.qd`LhX;l+VFM&x!zWc82*`WW}59%(F26hA7Vp#' );
define( 'NONCE_KEY',        '2I>S@%lQ]a-1:hNE3B%wP<-gv%yOG#^:gZ[MOKOkc*#)oND`c_aKzQ:rV3}Un}jA' );
define( 'AUTH_SALT',        '2>2[*B)TcW6FaDk#WZSG:v{R-dGGh?9=-m`^{)m+Hvk |0F1VzxK@s}/ZL(saXWG' );
define( 'SECURE_AUTH_SALT', '+Wpg&`j/ZJ=f-lc0w>RmnY{y<R=>6@*2~B?e!^Lam$L-Waqn5n@9WRMhaE-c&bhO' );
define( 'LOGGED_IN_SALT',   '^@T.<6m)En+0EffINSkIRSQ/ubnm@eAg={6kB:*jKS[y90nY<Z<Xl<6{&cH{*jgH' );
define( 'NONCE_SALT',       'G845/Q.Mz>t:V0sfj/aChrn2OeVXuml+UC,/g01%+-wp23f#Cn1*_VxLBYom*}$]' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
