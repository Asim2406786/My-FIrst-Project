<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mySite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Td:qVj*S=yB.|~d79HX6?;ky/LA| Mz~cp9&8Ts_}k,JIANY|MtCSu|A}xCavmTM' );
define( 'SECURE_AUTH_KEY',  'sr+(1W,6z]B4G/FhK0qk{,!`l&O)sqwXTTY}d!QWJe#83[kQD6`f^<HO3Wu$cbo%' );
define( 'LOGGED_IN_KEY',    'YWm1.5-Y|#_Z03v93[%fSRWb&]Z%OgQ:lly0n4-<jGhO-7mh({e=-rs8rl,(Ncxk' );
define( 'NONCE_KEY',        '[KS2#rX{;.y!yJuHS-+~EZ|:{;TZ|NnpPclnL4YF[)ttfRp?/ir:E11D7}7n:qG ' );
define( 'AUTH_SALT',        'TH{Z_60u&=V!c[zz0oA+TeU>[0<fi[)3aq]SQ7I-0nI`qYk:!TaAzh48x(_$y4KT' );
define( 'SECURE_AUTH_SALT', 'usH`L3WG3%o[i$__xrw`FWM>]8Y~D>Pd&m,*,n~ckYPJe69]xaMC*+C9z$iCR%!{' );
define( 'LOGGED_IN_SALT',   'pMiL+D3.ht`G1}=0usOcIZ-ft>1vY>Ip~LVw.iLUGh<||QqVlamgO|/[;KySQcSc' );
define( 'NONCE_SALT',       '5oT>.W8G:<k~=#dBsf4/~tLN(6;bwq.UJ~^RU|]-}IIv4y6Nt4b!]Q>-:SXjK5;g' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
