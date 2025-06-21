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
define( 'DB_NAME', 'mj_wordpress' );

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
define( 'AUTH_KEY',         '3x:Op^389oX>28Y;r<yvmeSCvzo?RYzeyx,|LxPbtA##_.~prX`KPh9ByuVS,v9z' );
define( 'SECURE_AUTH_KEY',  '6_<Gt@FRBTq]5hw>c=Ii,!mn$ae[X|3>[V=++ob@>u~$>vm(3LEpRde>7z%J}+&i' );
define( 'LOGGED_IN_KEY',    ' OrC?npKPslOlsvf]nC+Tb7xKjH#T<TQT(#B3xxC5+o0C7+FAf*nh~ne`&]UaY}!' );
define( 'NONCE_KEY',        'idc.)rg}ka@3Af%`Knb}m<R_c<,j?PmD0Aq`ZC?KYnm5Wa[Hnt]I6Y*q7-u2!G/_' );
define( 'AUTH_SALT',        ' 7iS7luYW[Jdz!W8hGK3zV0_VEQXD^>[CW&mJ_R]hQ6jA.X}UuQe84QA#WuWL#K@' );
define( 'SECURE_AUTH_SALT', 'd-MFAft2-$I&LcQLZvSR1k6))}+]o&Bg@`@65LAC)1hhKA{vp6P~tWZ^V!=qrm9i' );
define( 'LOGGED_IN_SALT',   'nnKZkx/[e!M8p3{f{*d#E5/4gmBQ4ryj;{!<mu;A&pJ{rL,sjqH1@kZT1RD4&^wA' );
define( 'NONCE_SALT',       '[oDn3`/$f)G45]W:jqw0Xf]p.)}{hu{44zF|~+1K9U7g}xz>%sCK49,$uDyEAs|i' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
