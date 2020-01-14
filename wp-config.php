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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'toppeq' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '<+rreoZ8K96B^YZO8`E,kS36fQ|Vg*)%(0DnPnB5(.YYN3m1Clr-vB %LC.es|D]' );
define( 'SECURE_AUTH_KEY',  '!O~@(+z!#uXVzF8n*}e](9r/r*-Pt?[ix8iXp}<i|ae^[9#+I.,X2nCi@p8&IXfX' );
define( 'LOGGED_IN_KEY',    'W1YAqOOdqEJ]k+6qJshv- ;7^,wt)c9ZPdq!?n68M<k@1|1Wdjn&Qsp;0V(@lja ' );
define( 'NONCE_KEY',        '8TmjmUVrf-hv+,hA2#kz.}/iH9-~G5;bDlks%W)QX_`%7h.Pm+6vnU}(F7zp`HRF' );
define( 'AUTH_SALT',        ')`4P+kv~HYlY_x$BV-pJK-.#v*HsNoCy~Q.PI59G^K59>{R|MMzNb^[QQstaGAu`' );
define( 'SECURE_AUTH_SALT', '%[vxR[P97<>-.xkrFYsbYJ:6jK NKdCdsCw4,OmFPI}@mZXq5W[:BmaoDYD,Z*vO' );
define( 'LOGGED_IN_SALT',   '{74%GxB@WjnO;XnLy)lbz2{b=F2X!G@nwX@cH?D={-wOpN.[-JKwwBY2T&_X`xeh' );
define( 'NONCE_SALT',       'J,v|^KX5hr-`?aiC/;Z+S|`wB[IRN@^A$j~%M?&O;W0M,2JKU^.R. }TVd7uLln^' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
