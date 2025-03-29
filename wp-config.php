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
define( 'DB_NAME', 'shop' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '-QJu~x(r_&K!htu(jVy9HRe15CBDAFdocqtslupr?(w(JDFe9K~jfIX!!+f8iUHX' );
define( 'SECURE_AUTH_KEY',  '$Zb+1c*|nOk/Wk%a{Nt@6~~})Dc(-1W|b@|YL)}F4*K>i++-<wAtXilp2Dp5msc2' );
define( 'LOGGED_IN_KEY',    'zDi9<8.OEuc($4{_p{(?DAvM:wSJhm&Hd;E|4k23C^@.B.r?CX@{L9%>!r?r1qd;' );
define( 'NONCE_KEY',        'P165x4 ]hXp#lYb~pRUL2gSC|40JWciJ5f{i<m H,Ei&Z_2b]S-&ly.=og0m*sEB' );
define( 'AUTH_SALT',        'b4PH?.Q3L}fx.Vc]e:Q_o|r!P8m8IqFgPCp=*mf[*1Q3WT#Z=oL0Mr<0N%OElf#)' );
define( 'SECURE_AUTH_SALT', '}81tn=]Z>5FFfeP#A0@;%_bX_f$PG*vqKWMm[3j0$>gwI=f7Lh.*vMU<cAu-R+[g' );
define( 'LOGGED_IN_SALT',   '8+bfnmbg+Xi^}kILDVLvin7lwL!.x5Q1={dB}:o5e}a_%xd2~2>@fBUC>lenuC? ' );
define( 'NONCE_SALT',       'TA~yQ}[S_d{o2>is*FXX#Gkspa;prX^,S8(kennVg*;QgYq+5/qKxy5oZ-|sAYZ+' );

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
