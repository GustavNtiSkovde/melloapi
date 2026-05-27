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
define( 'DB_NAME', 'mello' );

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
define( 'AUTH_KEY',         '+mb(|.H&1[c8]PGyB)|9}$ocBbLM -U{|/-Q noi{>wi}<4+e>k>9:05n&e;F+>n' );
define( 'SECURE_AUTH_KEY',  '-&*qQkQIn@|,&utckH8rpe%$Vi[v<{%!EKlq?m$2+[6)NZt|[*4piX^SeF[8>.zs' );
define( 'LOGGED_IN_KEY',    '$XlV)T-ay(au GGD0,[/f<pq$f+s9#i,}O#0N;m|a?tin`$0ml}#~ hm;G_H3 y9' );
define( 'NONCE_KEY',        'EvFL$}xq8np%rl:BLBhdp<x3tYx+;Ohqh94XN=/m&@X6;&Cm2KYk&!m!CJN7x-|B' );
define( 'AUTH_SALT',        '4[bI1zsgZ@z`Von)6Gn9vyYg,bK?P#3ta&V2fOg)Bvnl3o(`Zcn?Kh0A<9!/hXUv' );
define( 'SECURE_AUTH_SALT', 'nGBAq-J0sftkc&0XGk.5fcY!t2WA{4~_}(sD}Mp`=!bFT>7CFc.|I<2E2>M%_47W' );
define( 'LOGGED_IN_SALT',   '^Ne|i;0x eHAzxkP%Xvig9qa4?;]QE{HludxXyN/px/B0wJ;qt*jLgKWCi%O4|>u' );
define( 'NONCE_SALT',       '@~1^?qg=i&I-Wp`1;x#<@k))Rlu>Rx,Mqvnv{z7_!=TGx07E{ )05!}4NQgWO%ws' );

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
