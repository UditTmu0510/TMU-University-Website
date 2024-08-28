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
define( 'DB_NAME', 'akash_wordpress' );

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
define( 'AUTH_KEY',         '-uCN1q@#!4Dn3KQcUfMY;v#e-w}vGL./rrM&.O&&S6c#2@3msLN60K$QzJ[/q=OD' );
define( 'SECURE_AUTH_KEY',  'so_1UpV*MZ*W$xyS:(zZkFFD10-,b_r0_(Ctq%VoTJ5tZ>a-Nx-|DnlultFxiZ%>' );
define( 'LOGGED_IN_KEY',    'r}!vG>J;>/5cA~]I$,#w=R}~G?VA[Za|9)~G:=$b;k-;]dn=>C=7?_[ ,XnpAK3R' );
define( 'NONCE_KEY',        'JL-{O=G%0tDhfIKgh|DrHMPHAq6KD/8n#@a&N%8Qe@@za0!>z[0>feQcCdr[|~+!' );
define( 'AUTH_SALT',        '~>^(/O^Cyd18.}qZGCY),10kI@-l&Z^QU>8BkMGxTGDFSISEYn%5zut@b&6^$njV' );
define( 'SECURE_AUTH_SALT', 't7L,sDjaO0Goj[c7M5o>SzQqqW3/?ptE)B9W%;COn[o?6.&}DV9q-ER>X:T^4VD5' );
define( 'LOGGED_IN_SALT',   '=h}&)g>XC(3qwX;[dmb+}S/gMZ18<Y0X>|-$(t}5WM)(c/!]H*?+Np_}}J=H-@fI' );
define( 'NONCE_SALT',       '/^8L&ECu`1(D3VKgf;AT*:&^hh*VhyYS}9utxpFZe;XMU<YTnwH]g~MgzI#w.B`g' );

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
