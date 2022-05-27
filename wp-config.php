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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         'd2H?PsG1psP?Gm.HB(SU*A;1CwLoi`RBYTBV$iP8M@0hMNzJ60MvS^*qaKOakik-' );
define( 'SECURE_AUTH_KEY',  'q/_^n(=Z@${*;SWBi<a]!E9A$-9%A]0T2*YU9o5.iJoq4_nemHLR~%!$ml!+n0Q.' );
define( 'LOGGED_IN_KEY',    'tKZ7:RC:j7Hd}i1By}G1xVA4pgWy$n:TN mIUynIvPHgGp?A@~?jo8fH_M/_oMB!' );
define( 'NONCE_KEY',        'Wx@$O@4e#c:MaLsQGeP)?o,}vpAG0#Cvmnili shzT6ucl@_jQ_>ZW-=_ {v~{hI' );
define( 'AUTH_SALT',        'B~E#.KsB8`UYst+B@[d9+N28VZL|e4nC3:k/[xMF=Gst?r7@TxxL:ZC?24=i.TB&' );
define( 'SECURE_AUTH_SALT', 'vCOb4v>WmF{@h904_}& 8j ,u4SJ8KdG&:}>iv]0mZlKi+rpJ#k8)(+f6%1[c5QO' );
define( 'LOGGED_IN_SALT',   '!YY1tZ-B<U?3_iYLk@$S-x;oa<:KnzyGn8ingMJ0$U?2a1*/.ryaDd :xgtY?btm' );
define( 'NONCE_SALT',       'b)|-{V`J1{v%:?sxzp,2*+!jVeWWF.Dhn-t:;nNE8^c3^!2+U88=XjT>[wKzMS-f' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
