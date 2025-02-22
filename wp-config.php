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
define( 'DB_NAME', 'hands_DB' );

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
define( 'AUTH_KEY',         'Os)3>e%xv2-FgKKd1:16}ufhyQ=Dv q0LQ4Ujhj.E.4]9C}P~G@3$VP72Gwj-e,M' );
define( 'SECURE_AUTH_KEY',  ';a6A|Hf-|12 *u~*Z:T8J&[YHl>vcJ|Jgkpeu`2(ZEdvxmu!Y/:cjR=uxpG5Fw y' );
define( 'LOGGED_IN_KEY',    'Mx#.-u<* 8zpZct.+339u8/R_)X@bx&nLiT334%Kg1w(3)` _EZveky+CBW^&3qY' );
define( 'NONCE_KEY',        'Y[@l/Ek0ZGKFY@7v6Afsn~r59FnV!}|Pm&,Ma}hmgP;p&L!4~!5C]6o/ew |+Ewc' );
define( 'AUTH_SALT',        '+%hq@Ag#uq~01kwZpKZn(k)bH2C;~BZVI/ h.fE,=j6v#^h0&<kmu2x|0962M6c`' );
define( 'SECURE_AUTH_SALT', '8K8j?:U|-Sr;$P8Bx9Ca/nj,q8<0_,je6UcA3Xb<h/[V2_=cy.,E`LlfqGNR+?X{' );
define( 'LOGGED_IN_SALT',   '+A$ QWqho$=0u,I=!n]j*~6DWHs>S`}.]coTaK 8`7wlhW-.GZ7VZwfk3/N**`tP' );
define( 'NONCE_SALT',       '@~$I1H1ehf$P~NxH4x@/Mi09OJn8^#VoU[A%^;90FbI$JmDw9U&h?/EVxa6dI-5*' );

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
