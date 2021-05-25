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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'f1xL16yi:_kvM{#:YUgwzD_dY3.S-A9,y@F:t6ud_0!kZO6~1;nLhR$^evqTGa^I' );
define( 'SECURE_AUTH_KEY',  'V}FouBK!*0F/q!F6@vpNcW%NnmOF@ww 84T,D@SLp@bVm3l_-j?n_coqDS^J2u~t' );
define( 'LOGGED_IN_KEY',    'hF(tp,C<SW r%7)&o-^&t5aAHZsvkeIDm5[W>l:G~-qW(DOa4-OSedPF1u)q+[QH' );
define( 'NONCE_KEY',        'Qj& N_N.K<4w&IZUyDz#&k$U8D7SzS-*cQp/M-xTatyF.n[Qc{.w1me:du/z>3=b' );
define( 'AUTH_SALT',        'Z`ySE{Q5q1lLJ6R:x~_LI>^e3_veFuzUlO5Z8Jk-RYrW7s{H &MLqB4Olg1V5IQW' );
define( 'SECURE_AUTH_SALT', 'UUw6MA:ZuZVlso78E*Knvl.3wPMP_ie6,zUwg3tnq>|ewqp(E{G$IQRwv<h>Wl3]' );
define( 'LOGGED_IN_SALT',   '8+RGk&`QSFWv6j&pc%N|djA(oMoF4#<.!(qX<FO|y>[I6WAWrV.`7MS!NW[zFd /' );
define( 'NONCE_SALT',       '*4yIL>vAo~Qs]]Inu g?g~](*FcYn]`$mI0k}uflPk;vIj(Y02-%DLDy[7@9,RhB' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
