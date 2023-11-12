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
define( 'DB_NAME', 'kreasiputramandiri' );

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
define( 'AUTH_KEY',         '/cy{`60`;<V_`0Ss&q*-!]Wa&tcQXI5KX;BKllnAG.-:F@P/HJr(P^Wj=Ct#4ZTA' );
define( 'SECURE_AUTH_KEY',  '}k?VY7,nR}f}ieK`<~tmV]rEaWi KQ-@j(k(ny?(Oxd! *gypuAea2!std]8CBS(' );
define( 'LOGGED_IN_KEY',    'pX!.ze;[2 #nOjZf4t#>S.F*6TE!RNNqfy4teLW~0nkGQ2 ][4s.W[XO=sLQ&=_o' );
define( 'NONCE_KEY',        'QEU K4G|gkFF:ZUcH+}P `*63UJ/M[}<gu9-q^6AqIPg :y4S1Nq7#fDVZo@,6vr' );
define( 'AUTH_SALT',        '+9bByi&TJ+j!b~r%%i}*A=cf0o.Y6Es_[Jw.]QMP?RrhL|YK$di(L3j-m&ygKE-`' );
define( 'SECURE_AUTH_SALT', 'I}whr*QoRDaH3t#Nbr3Dw{d#6te.H~#|7BUssIM1u~6)CJw5LZw$[BP~|;_3>/YB' );
define( 'LOGGED_IN_SALT',   'ik;}IkAFw_[c]c$=#eue$_/uZG725?PZ&3^nj!$`#vS-1=[9^mSAn*JY+!}-oAkJ' );
define( 'NONCE_SALT',       'RF8;z>wg}9QSLH ~9~BY![uWPelVklkLSPygJtEyM)k]vJCxSoUh3%Xl%#5bgPG@' );

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
