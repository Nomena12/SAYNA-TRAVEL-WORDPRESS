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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '|P|B<C07%,o].n&7WZ].7q Ul?d{<B}$nNi}|{5~[q~h/EAmbR&7I*UXRUw54=I6' );
define( 'SECURE_AUTH_KEY',   'H|*+I26Q^?bc&C,H;r[vVAKfn;?cOS<P$-B%v=rl}R>@/SfA&HNr|%l1b(s+%%UU' );
define( 'LOGGED_IN_KEY',     'i2^e8F3G-^6gZH4efRA[_a!s|Y?i.Akd`@K//20O[[E%zzjx{.7-p9mKq<F Y|)&' );
define( 'NONCE_KEY',         'z5)/yBGW^AXQQ>TFx*Q;v[D#Nv?3Ii)@hhX?r_&Mk)}qtXri-;v|Qoo96o7oV}Ee' );
define( 'AUTH_SALT',         '#K6*#%K9UldD78J!BZhSA!`4P.kli#M|v?w`(Vb::`o~s]7,+L+VwiVlwtJ~-2GT' );
define( 'SECURE_AUTH_SALT',  'zwjXLfFvIJ8<YvP9<FsZ#(U;h)OWqM /BxgA4xX;l,H&%ZfniS!xf<B;ZiZ:k%E)' );
define( 'LOGGED_IN_SALT',    'Zx?r,l/@XkX3@$%o[bi,AhlJTC;b<RXk-C<(b#BfnTD$U4(^2,.#JqPP596?BLEm' );
define( 'NONCE_SALT',        'wh{_0iB3*e{]f{=,yA91[=7+TCMdnkv|fDa%fp>p/pM PaUKA#N`E1`Ff<%fhf7@' );
define( 'WP_CACHE_KEY_SALT', 'TxK*J&/ITavbW`phFd$7CO)XOu>R&|=%S^>u36,KG6z}FRPhdOL4F)b&AQErFya~' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
