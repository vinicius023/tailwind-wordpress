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
define('DB_NAME', 'tailwindcss_theme');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'X<Nc!gg;a@w<y1eHh`p>{|jZbaW?CZPqk`5^<DC]VWdehO|S4cz=*dMUe_v7C? }');
define('SECURE_AUTH_KEY',  'Xos(#:x=DO?rX%/]xs*6U.z%KmZlEB{s1F?!rwrGth,og;5&C<J.oDG|nGk{vZc3');
define('LOGGED_IN_KEY',    'M(-]?Yw`S,({er@h`Mo_|n-us7Zwi6k<Sggv-s$IxO*-=QF),c[:&W?cFqI;%VD=');
define('NONCE_KEY',        'uVhUcK[GLqlHsmPQ3WD#G5k$-0Sg$Wm#N;RdTGY4CE<A}aM%4*Xu 7<*p~;a_V<Q');
define('AUTH_SALT',        '55n2WvZh~uToH4F/c/Ze}JAQU6accQIs[Rm(F>w=ZdI&)F1b}x[uIG~p*M0h[;wJ');
define('SECURE_AUTH_SALT', '~r ?Kqkt7K1dtG/XCf_IW9VjP9#-mY:%2v0v=B{hl0o*Sb9%3FWI22;7eK#%)2Pq');
define('LOGGED_IN_SALT',   'iFKXr0ldzjTcQI%h!paX)hW_9)%r(+:t0,+1*{J,zH6vB7nz<,ZP:6IKIHr?{Yi/');
define('NONCE_SALT',       ']VLK/}Pyttr2BK6:@&10 QJv9/<Ej@RSs8NjXO%CDV9Nn5<KWN]xVK~:/P#3N>;c');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
