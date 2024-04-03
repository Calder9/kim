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
define( 'DB_NAME', 'GitHub' );

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
define( 'AUTH_KEY',         'O%x6mHo%qnx{~w`*IxhQ!ddO2;90:QP<p{+>Gq]UU)1Cn/8aZ[a$Bf[m2Y@k..Id' );
define( 'SECURE_AUTH_KEY',  'CxpHJJww!o (iWlSd8A+Jhl/&zjU}!PW3OScCJuh?Mjb?7yko1`Fc9v0k CcHKVi' );
define( 'LOGGED_IN_KEY',    'kB}BJe16}x@tGRmt/JAQ<Up11<8+;d^[1Tttx)qu$=JaV]<Yiog^gtS?<^7W:FO2' );
define( 'NONCE_KEY',        'zb}vfWui587SMW*8{smK^j76<i]:-gwH&*+|7q]cF?svai 7[&<JfQyf@NhD=XYA' );
define( 'AUTH_SALT',        'P+z]GJAr@Bh]&K&`!b}1PRX!wT$6Ct4Npo/o55B08&gr%u8EC,,VaavRH?Q]hBk$' );
define( 'SECURE_AUTH_SALT', 'k#7o#+N!yChlMl)HoC6O-eCp+js!H9/n[&k5Wr6hm2?<yf++l^?NRoZ)EO-nj7]C' );
define( 'LOGGED_IN_SALT',   '?y%j$1of~-6SC08}PWu7fqMy,mYY=xp1Lzq/2u7{aH&!=0ey@B*=qj2SpdgANcZ*' );
define( 'NONCE_SALT',       'Zd-a:vxN{7ot*(:/0T2y8$!?ZO:1Sks7ZzP!J[<VErd4fP)$N=mTYG3A<>Fwd/3R' );

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
