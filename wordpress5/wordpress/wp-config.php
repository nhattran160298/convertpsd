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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '01' );

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
define( 'AUTH_KEY',         '75mzs/jB@(`!6bKZg5Ruy2;cfnI+*&@. D/p5hFPNw8M 3wV2LFRqTKCQX|bPkO<' );
define( 'SECURE_AUTH_KEY',  '2riaJ~VrFhB<BG@)ySHgL^j6Lj+>Zyt<EM4-Cz.ZP?5+8*9YAn}3S1WXTz;!=uKp' );
define( 'LOGGED_IN_KEY',    'fM92[:S+0hx, Bu3UbGMs`kA)Qy!HtrwBPpH0wumZT.Q/phcP/e~nDLQY:s*?lk`' );
define( 'NONCE_KEY',        't4+{E>8:rsE4y8:9,lGd/~|^|5+v$wOd)@9J@P>aQ?YQ88<j*Rqw3TGdR1?W-y]A' );
define( 'AUTH_SALT',        ')e@dtE7O^1CUe|{V4epZs2b>Cxt#e47asXKPZYlwIC{z>t$AO9$J Ge7yh57>h.?' );
define( 'SECURE_AUTH_SALT', ': b#VrciIK`n8$r,`<sq$S F_TPRC]t.SaTM~=HKwrR,z_PC$;U!da=+StX/s[gf' );
define( 'LOGGED_IN_SALT',   'E%L:aUp%{$<7cJ+vtt.$8YV#J-q/2(0<SuV8N,oZpQcGj@r?8e5yXjHmewp]kyL,' );
define( 'NONCE_SALT',       'tdw@6e,qs?@h2H2)ra}X~qIUpY~Tb7g/g8F~e@$U|(qQ`h11z^qG(0Xuk2oj:2d_' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
