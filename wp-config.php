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
define('DB_NAME', 'emf_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define( 'WPCF7_AUTOP', false );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '~BOD}Ez1BU!oJM(T;e:CR&spf%pjc9NxPXE_VjC+Tv=bDdJVC|5M/z7/B>bS^N8R');
define('SECURE_AUTH_KEY',  'gd(Ip#{ssWx5&~]J>.xeV3Bj>f{@mv?<38oSJ?d6V%#{#SVu^0$rK$:v-QkQ:hu?');
define('LOGGED_IN_KEY',    '|:9M^MhKWNG`5A,A((@=|?iu<*jbne$Z3-,KHjuwnTb2{&:z{gBsNF%9Td_}x,3O');
define('NONCE_KEY',        '!B=s&R]chjsgbu)YH]J?%S3{bIE8x=AUD?Og;*sM|p]6f*;v*E^CobLW8V5ddMP.');
define('AUTH_SALT',        '=$G{8D IOm&7n3 H6G4QiHJn({YsPv9%{~TU.zBftwJ?#_t%.|,RgMj?s|C[6=`~');
define('SECURE_AUTH_SALT', ')rqj4/(56AZfA!vsKtRkr`{<`me4}z)0@Y6a-6!>9YMvxXGc/O+X:35Gga8:K+<B');
define('LOGGED_IN_SALT',   'h-n,BHu4;Y5!*E5K7Q0.lFy?)Gs3eo;XJI6lSR{SY q6=rZgN>sr)YLm<c+j!ty{');
define('NONCE_SALT',       'b!$;ZPJYm{m@,PbFy<p-XXX.(Xz:Tdi9Lu,8Rc;j2 fGU7+5eBba#H(x0&EJ,Y0<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'em_';

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
