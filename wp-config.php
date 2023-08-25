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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'GQxK`7.A{E&NyFI};{fD*]o_#dESu[Pcu}+_<kA#;I1P:k377`O6b@!?fYE_;[DO' );
define( 'SECURE_AUTH_KEY',  'GybWxoO$V.B`dp2w9E)G${TM$u4W7DWs>5@n6jp0p]il?!b2ruAsGX7,l01tkgz;' );
define( 'LOGGED_IN_KEY',    '&k#Qec#SF;=@S/_HJ[<|&]P>`fkzR IP3>UZ#N9[0$3*dD.ZY$3*ghHM*W>Z-[OO' );
define( 'NONCE_KEY',        'kX-5EIk84kk_S<Gl2/2<kqr+7%*F=@_Sva`X4T$8Ewm3JBaJ8cr9G%if+/AUr9IA' );
define( 'AUTH_SALT',        ':uO]RLDOo4]vJQc6,m*)J-rw;H0liv)}sWm_O;21YSQz=P+iI{+@FU`bTg4UY3Hv' );
define( 'SECURE_AUTH_SALT', 'BetC#~}4Z}rNixe&t<<u+XYD/y3YLEJmkU%;[t4TS)+}qCW.tI=p0*s=v8A9O,HS' );
define( 'LOGGED_IN_SALT',   'D*QqU:L&CxU4^,qNAI^eS:Beo~4eU+6) `$Q`QT)0`o/IMD6H1z7Sioh06{PuYbV' );
define( 'NONCE_SALT',       'X//~gbwe)i%v5un=GIb7j^A{iHfpi)&gc&d{el9,+R}T.$%qj)r?5+:xb]0.[RHE' );

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
