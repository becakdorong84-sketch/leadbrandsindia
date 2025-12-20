<?php
define( 'WP_CACHE', true );

 // Added by WP Rocket





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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u911279368_2oPQn' );

/** Database username */
define( 'DB_USER', 'u911279368_OO1HN' );

/** Database password */
define( 'DB_PASSWORD', 'YaTpz8bAGl' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'NyCZx8K9d/L{v;7^A/:>[&nNTp^TBMc@#s~Gl>!e!. =Z>P`mS#Y+h_n4>r1M,bM' );
define( 'SECURE_AUTH_KEY',   ',m&fL>VrZpLBt&:cCB?)q[+!?oodb^G%NPU6w&glu`[)L+rc~<tlT`qA231|2.gz' );
define( 'LOGGED_IN_KEY',     '](&<-j:T[FF<yjsp_%>u}H:5/MsB@};%uj3mJ2_(Tl#u<rK*:o(gz_758DE$*w ^' );
define( 'NONCE_KEY',         'vc.QU,a ]B!S~L`_cZ#<pC#NM8Ri5w=#QqGxGL0$-hhOC`;eD[[^[=Y3qkr|_-vu' );
define( 'AUTH_SALT',         'oQzY1_[/YLx8EWDHrN(d-JFs-&1u=4}eCDL!t0WAH),8m!BqU2uVtA|SzQV* e.W' );
define( 'SECURE_AUTH_SALT',  'UCYl.@J6[0Tqz@Q+u{{O4:q`ER=av-G1x:k@Fv+( g)1L@0m64BoCm?tjHyLp-i#' );
define( 'LOGGED_IN_SALT',    'p7D~&g%7L$Zh}N;^u4@RBaDJLppY><_lnKY``s+3AKFw1GQ;ly*.c!|F+z4W*S|a' );
define( 'NONCE_SALT',        'c}L|Jy1MKP[SWMCQ:4T]>.|[alXa,#36ZJFpn$?+bJ*_<s9BWXKuv)QDDLub)^ru' );
define( 'WP_CACHE_KEY_SALT', '<[s!v^-CWZ/3i@:-))^2<94X2g4GBc5JE@5OLk3vH2+#Dw{/:,M8LY5*X+Ck?!17' );


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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
