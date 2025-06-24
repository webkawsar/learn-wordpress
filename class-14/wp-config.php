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
define( 'DB_NAME', 'class_15' );

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
define( 'AUTH_KEY',         '2=g-qN!{cqC{?EHnmxvL1<EL#kr8Ck-xkq}3,<&YS)1KGX=(brIl+yAgsUA1{o^r' );
define( 'SECURE_AUTH_KEY',  '}(_.Kxm[z%OyMzl8)+ue8;gdYF) ?IL!W`gjnLJ%l .[Xvw~r~gIb]#/to^PwI/,' );
define( 'LOGGED_IN_KEY',    'ws;q3Y-gGnRo(FE?pxy[#D/_bo#Sgj$l$.`/EA)RmXIM^rZludEWQ0FoX4~~GxC.' );
define( 'NONCE_KEY',        'OR}>xp/M)IKl=]FTtw)[Xtl3*rRZt!.&NHk1E_1l=5owW#mu>I l)J-zYf<KSk+/' );
define( 'AUTH_SALT',        '3iT$6fibc/&S&;-+Xz[X4U}11W09dc[r2LNBGs)IgqP1]dy/_Xee4Ax^KpPh7bh(' );
define( 'SECURE_AUTH_SALT', '($!=B)J~4`}YlrK=/w#4ru-tVRJ/*3|;}ANs1J2&4R5,,C.+M&A4DH}(eGo3 e_,' );
define( 'LOGGED_IN_SALT',   '_aL5},6qohO+gPTY/P`@*uA^fd0=+iPX2LR.~s50=M@71i@ ]XoN)ElRL?1rc#w[' );
define( 'NONCE_SALT',       '=#$(g)ba6+^A+lOGV[tWt):lvOYjmeR8y73^v+rDEcWDi:XZ|;4wG*UT@#Ql~|~p' );

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
