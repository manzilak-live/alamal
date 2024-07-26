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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'yj#s|[GY`$63]5yuHwhsH?.&rU^2~<hyosfIN7~#8m*y)yJ!8fKoXt~_>Y4-N}H/' );
define( 'SECURE_AUTH_KEY',  '0+QG<rumY%w]skp4#z5cbDG{4k2l d4KS=+V}*cKqjwmQhcUTUKbM/{rj!>OKvO{' );
define( 'LOGGED_IN_KEY',    ' LEf8+. }|=U~mAZYQCxUhj?avEGNK0TBOOH;?F`,/wSn~&qO9dRy>a>(>y+,[IG' );
define( 'NONCE_KEY',        'xO@@3o:iLi}3S~>e^=j1/!Ij^Yw#(+(Q)g=m{T1T`q}@t9<hOnjW_*_*B3^&.m-O' );
define( 'AUTH_SALT',        'mWP%J*f]LL$zHr0Q-R2}~-b-_Rm~$EQeybcy>`>B?C%+2))PAkX3Ex~0p@)!fo]H' );
define( 'SECURE_AUTH_SALT', 'W?b!NSKe5[*@iJjO<Skn6b2BEJhD#Rc0&T5/<`{4(#B:qqCg$Yj2=15UPZUvkUeQ' );
define( 'LOGGED_IN_SALT',   '|}SmXKE}pvo0`n~B+EuXd6g?#+tz@A;D;|*D%eI&`No8(8{AEje23nB%vrb/X%KP' );
define( 'NONCE_SALT',       'IFjDY@>Xx=__c5GM(;btC#0<XVUmK IvL,?Du3fen!?y/ogs13}c5hLPt1D<d1z ' );

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
