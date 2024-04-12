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
define( 'DB_NAME', 'wp-jackie-malley-wordpress' );

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
define( 'AUTH_KEY',         'k .$;N:q5`Um3<V|?la$oUY7+ SeKtIJ[1D=?VSCFQ[b{kbNr@=]qb<^S[MV%{>y' );
define( 'SECURE_AUTH_KEY',  '_}uL8+Sz+KURj(6gvHlN~]Wg*`^t_8GOxF@1~j7a_+TJ&Z.&TC7~dBa&Z,Sf6p8e' );
define( 'LOGGED_IN_KEY',    '+K$@f1t-pMW}kA##-+4Xl<CZ?R1 2Efda+zw*+fUkl-X|%X:mC@;dmscCLegNev@' );
define( 'NONCE_KEY',        'Wx<Z V-Whkq([c:4)3Zpt8HW/>O+:2fD?_6M 2<B2PA 2^lZ]sio](?o>}}q7:kX' );
define( 'AUTH_SALT',        'J#OJxcqXn#NX+0bR:;6t]mtf`Yjomj<Jx3}s{Zywr3(*fdSdwu4T`$$2TNgThxHH' );
define( 'SECURE_AUTH_SALT', 'va.7uE_UUFnayqidxB GC0_}~YR72IP}]`Qh5.s]!W4jr+ptGuw3@+GM(w! =xEG' );
define( 'LOGGED_IN_SALT',   '/0A)@dSKMr|>1ZGl)Q5bnm;i/_5*bS5ehbIj=?NA!e48>DxI~:>a(|m5,~|SNAKD' );
define( 'NONCE_SALT',       'Z[u+mS)ZI-Ih=7j|=hw5lO9.*I)k(s48O/Z>,zO=C5T*msqx/9Wl&E>`#V1h5V&_' );

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
