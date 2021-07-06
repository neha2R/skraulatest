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
define('FS_METHOD','direct');
define( 'DISALLOW_FILE_EDIT', false );
define('DISALLOW_FILE_MODS',false);
define( 'DB_NAME', 'sku_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'xFile@76s' );

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
define( 'AUTH_KEY',         ';tON&{(GA2j_Ii+Pj!p[R4`jhgI)Di-drd2v8d|jefM._AK/5zMZy[z56eM<G,tu' );
define( 'SECURE_AUTH_KEY',  'vA@3F]}en`sST8C&0Fsl?.QGK&,O2AqI74~[S9Dvo}42kr)2;]v o7PF?APGYEM!' );
define( 'LOGGED_IN_KEY',    '6?{;:j<,M0E$;:]U]i4b8d Zo!>-[G 9]&ysF*L4fD*YeYNyC2ycJjOwxF*`|}PY' );
define( 'NONCE_KEY',        'ALzT@L*81`Il6us+-2UO+MO6q JbYIGpI&6:Dww)`fYgEN-Y$|(wa16mTgo5srG)' );
define( 'AUTH_SALT',        ')]>uMoml0V!m<w^p/`@C$DE-: m0xR=]-7Qm7X-hC5V87U-Nn8$GR%2$eLQrv:lC' );
define( 'SECURE_AUTH_SALT', 'voUQa_elnLEBmPZ54vgGH],JsG/Hi<PSpnXN`o_cV]U]9/K}U|`h8:3d|EPk|> ]' );
define( 'LOGGED_IN_SALT',   'B#8vqXS5a5^l6?Kx`UPZ*naN[VW F-E|Fe#GE8Kdhk-Oe Luu/t8DA}l{smM1]y~' );
define( 'NONCE_SALT',       '8PF}{U:|q9`[?+Ih@S^4 }<[.Ydx{r2mHH%UQu^O*sQ#:T;%DNi3#o#JQL!#G?.R' );

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
define( 'UPLOADS', 'wp-content/uploads' );
require_once( ABSPATH . 'wp-settings.php' );
