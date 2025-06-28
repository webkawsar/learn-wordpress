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
define( 'DB_NAME', 'class_17' );

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
define( 'AUTH_KEY',         '$M54X(U$]_|wm$I|#$dc1i#h<b;;EHj/|WT$-;:+]<QL-fQ49R`K]o783TL$]/Hm' );
define( 'SECURE_AUTH_KEY',  'H/}0(-9ob/xPG~Mj2pq;Y9=/{.;?_(D[B3|@_@Mh`!#1D<IZabfK0&ZA0I{scj]?' );
define( 'LOGGED_IN_KEY',    'w[VD6a?e o;Ppo,&[s8FF7%lu(x h<vpayv-LC/U4u+g0mX@~D|i0hbMka(%y[!$' );
define( 'NONCE_KEY',        'fOg:w:<h]_}>BqZ25LNcHE;+dMHV XYs%)H<)f@DP[jA7tuba>3FzzXvt%]!&#ul' );
define( 'AUTH_SALT',        '@AW{n3M-doU+2OZFhq!>|E^Hg>a5ct,15}n@k3!AlAjh$C%tRR*>u!^|<dRr}GtI' );
define( 'SECURE_AUTH_SALT', 'T6kt-ywTuow<tPhSk9#O.Wn:oP52+#(6|{(MLDlowME$;;vSHujh5:9oahc9=&{p' );
define( 'LOGGED_IN_SALT',   'UBMD;-qp`jxam*oD!^Q9o1U:lu]4M_R6Hs?t:$n@||k$=nIMMvc*7 #LZL4H-4im' );
define( 'NONCE_SALT',       '|9ubx<whWx2o5Zqr[fQwEDA-=L+59&_Gc!e`(bvk7(=^x,CnZP6y2i{%50gPNR G' );

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
