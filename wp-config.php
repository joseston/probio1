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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'dB1M( 5DpX+%wu{V(6x`1-c+ihn(u1B5QPY?!mD^*>#])>f FJ4Mq}|Q6D.pU/mZ' );
define( 'SECURE_AUTH_KEY',  'O:Mf3-c-WBa$hEd_^W1o-/rq95,m3K*_VS}TF*[wRGu?t8ybA`Jse`C6RKU@{T/k' );
define( 'LOGGED_IN_KEY',    'zz:.9d}_|H#@T%Bk4,K~X!dK!HQQj;~p$V9eg#DxN;cqH-Q8`co!&n}qhrO)e<ef' );
define( 'NONCE_KEY',        '(P=Z8|xn+C8pWiuR9xj[.@XdK<l^JqRMj/u({-e/@RMM;ptsYS$=9U::wmi+[Z)s' );
define( 'AUTH_SALT',        '}:V@e&HX]Y%N6uDRLmf;zjX)a6lN7#P-eR<9SQRwokVE1]c<qiYXRpQOOa9g{tYp' );
define( 'SECURE_AUTH_SALT', 'S}f;Eqwvu49L^3>*1`/g!.pY]PyaATH0Z&;2rpb:%;U1yk6DFvw{pNacprm|ym=v' );
define( 'LOGGED_IN_SALT',   '&`uo_^{wl61efovLQ>k^FJn{fHB)0]$2t&N.q]Sc^b9^b06,Vc^x>~VeeQB9 5Dj' );
define( 'NONCE_SALT',       'U}thLP~o65E.O4b^ov`e2<;MaN8R0x#on,|xsVgZHy5WE45dwKNOwk9MyR- @! <' );

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
