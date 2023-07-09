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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '40?&?8bus=k>hP#3xxsguE.K?V-(2pvWD..wvAir+^o=6R^P IZ+M%/^VYa%_Q%W' );
define( 'SECURE_AUTH_KEY',  'kZmg7^UoBtE/+]vJJ!aNv`}ZUMc7zHj8mf^:a$lCr}N(srNtOAZCb=Y]GB%YVhrh' );
define( 'LOGGED_IN_KEY',    '1vh?wub9VZG9^ec3.p?I&@/l.p$i:t}Az@D9BISGR%/h^+2-R=ggJi{W0g%uxG$k' );
define( 'NONCE_KEY',        'HH@!$P(xdagfG^VQSBr3}HI)@oJL;*wM/t-a`-#$AN;@vYJomY)fo9.(x@!r8xpJ' );
define( 'AUTH_SALT',        'Yfqd@zCH%FO16EkH}M<z51s5HXe`$+QzX.7.hi*%JaK<6K%%78K/_s>czO*F!L-d' );
define( 'SECURE_AUTH_SALT', '*N)- ^a:S,qQn}r+)o`*5Wn+MJi6gTxpIcVCNI.Hy xlO`R]vrfK,A[U$g]CINn<' );
define( 'LOGGED_IN_SALT',   'Sl_&D`Ed.Mf=j>nnoD4#},}y/Dh^Gwj^d7!/hC?&T~$RF.frSkB`HLxO=XSjt_HI' );
define( 'NONCE_SALT',       '>{Tx%-NVwTgnde)iGXOZ O#.Q-0|eE-pD%310CZ-$q):BtrD~!<(4fAhl[J6#NB:' );

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
