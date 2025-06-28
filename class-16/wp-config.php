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
define( 'DB_NAME', 'class_16' );

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
define( 'AUTH_KEY',         'gwlWT.Q{hVcHu{>TAF[R%s*7sG5LTLXck~wgly`INK78+-SyB{G&-fp:;T:H!9CK' );
define( 'SECURE_AUTH_KEY',  'otpsy%&,|lxrSC&&8?ps;JJ92$FL2yZ(EPu45c}WGM!Fs.1!7Cq;baYf8(?ufKnf' );
define( 'LOGGED_IN_KEY',    'l^N+HJ.SplX)*6@A+|3(d`7[VdT?Z5Dipdcv|a4OK~z,Uz7+N *Lb}~B3Bb 1unS' );
define( 'NONCE_KEY',        '~7ckb!Hy,Nvo;m1y-..ge#D=fLqTlIrp&+IC]w ;=U|M{KDa?+(;Ob,{xJ^;/-sc' );
define( 'AUTH_SALT',        'm>2aOLtCXrh:|zcRXw^;VFL(1z6c9%TDS4L?c2c,1 )T,82o2#/qQJ({axA:l`wr' );
define( 'SECURE_AUTH_SALT', 'inpxg4#Uu|kE:PHEg1?IFhz8Ido2pXt.`D~)b-zuF4Ejb_!nCrpfr.@XcH;},wz}' );
define( 'LOGGED_IN_SALT',   '2eSaKf[q))4cURj8Rb&QD@F(}dWj:;sVMqmFS5$;f(?{guQ!Q?19UBJw|K;$tJ37' );
define( 'NONCE_SALT',       'poU{jI:%MwL^w.>>GljRWe=30ZuD5|@GYFo><0=,!=.lP&W+9w/Pnb81YiU<BB(5' );

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
