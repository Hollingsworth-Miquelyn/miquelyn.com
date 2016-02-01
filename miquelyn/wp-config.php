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
define('DB_NAME', 'miquelyn');

/** MySQL database username */
define('DB_USER', 'miqhol');

/** MySQL database password */
define('DB_PASSWORD', 'zcRATwqQHz9RdX7c');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
 define('AUTH_KEY',         '+K+G[az,)e0|x@TY#Fcg{=_#o/[1H9v7jj6D{(i$;>#4qCr:(:Lad;AQL#+MdDj=');
 define('SECURE_AUTH_KEY',  'W|`*~@kJdtsMn;`/I--2;g@wT8.Pr3(y2=(Y:k~)#;qD5r9!*v$d}qmm.T|dF<:f');
 define('LOGGED_IN_KEY',    'WVteQ/B|UR-Cxzy^d[]<uHYl-mJR<^Z!!L}%t]q8n{U+Ie&,Y`}d:Sma8%P`jc5Y');
 define('NONCE_KEY',        '=#E34I#+R/H29z4g-,MD-Q!qFBhpML2Z[j*^@Or/y8~(oW:;r/|Y*~huiL:wCA1y');
 define('AUTH_SALT',        '&Dc`{dKlQ5,X_k!5T7W-%36^|NPjUP,5FC:6qH*Ko{Vws$*ka{-R =--,,2aT&tS');
 define('SECURE_AUTH_SALT', '{R|D`EM+RT^Km/k]=9M|R-wS*{MB_4ubuEQFjic)1H5z8l^ .=m:Cf(X3uxI<{4G');
 define('LOGGED_IN_SALT',   '&$xOH`(ElpbFF/9FP&T-b++GIvWR-rW|BR9~SNPgifX>=W6;Xm,:7p:j6keT2at}');
 define('NONCE_SALT',       '23AC|0mXHqia&3R>yg+BX~6K@RLUqb?~kuF@vG;7&4CU.4R-mF&*!sqa:7eCMN.p');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbm_';

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
