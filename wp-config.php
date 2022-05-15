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
define( 'DB_NAME', 'fitnessweb' );

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
define( 'AUTH_KEY',         'Xf-t&y0w>XFz$kZgA;}y5W 1U@(*0}8HZ-wJ3{spv%Er(lcRzVX?xT-nil0W`7f7' );
define( 'SECURE_AUTH_KEY',  'v;!5q HFzvF&(</V.I9HJ%(YQNge)f64h&X]b[U)Dme}cFs708[oQePxXd)/XL T' );
define( 'LOGGED_IN_KEY',    '+vAF50KH&-EcayH[YE$S:3+2@?ih8PnrG`6B+b^oP:RX.lwM3Q{zxMj>h*]xkF^=' );
define( 'NONCE_KEY',        'u}h!~CnY?a2F.rY)1/F(g=-3/@u^7yW/~,*Y7Jb--aYQzA4w,bBd$(JGh-zW%l<%' );
define( 'AUTH_SALT',        '7_f,}4fnyML<coMKhPNyt;UK<NmQ&0, ~h}*vN`|!Jw:JFw80+a9,l)rB*0$?R0.' );
define( 'SECURE_AUTH_SALT', 'as[%,Qo=J$77kX%}P*2(H@=R#&1$^+}QrR/3oTiKrRcw,yca#+{1Y.HSdiq4+zRw' );
define( 'LOGGED_IN_SALT',   '0qKb7|x e6fc.Qgu-Xr yAd.It}i%*?a72mIujq%,XLYwU#2~2;sg!Me,+5n@Bm}' );
define( 'NONCE_SALT',       'v(%w+YM~ksyWGzeW(/3SHN~a_azqP/W8KV$`D{<.[vo(<DX(yQ>Tiqg%o^l7ei(_' );

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
