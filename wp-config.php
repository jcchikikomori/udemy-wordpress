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
define('DB_NAME', 'udemy');

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
define('AUTH_KEY',         'RN>OH0%s4.%2S<J&Xvc`+/$nA7|*`QBl.EjUAzmn~RR=7i%Z^q%3?1etM|8|A$sa');
define('SECURE_AUTH_KEY',  '9!0Ll]{R!k*7@$XfeQj?#%.3OC<qZ5]n~h%A}c_I:d`ypIISMNeBxU$#IWnf6#[n');
define('LOGGED_IN_KEY',    'k(E bxId7VML@ov};6nrp/WF=Mig-gGAB@|5v+2vqsl*3K`jY8GPedC|z`-6AQF[');
define('NONCE_KEY',        'A||}rZmr)7N~.?]2P(>)v54jz<eglMoxr#]/,oe:C1{n?h$/j5/ZYFBx3}2(|Ikh');
define('AUTH_SALT',        'r{%:E-]bY,84*2=vKB-tD98c*?d4V>VP&=bK.I4LNx>nQ,k9J]^_VBtI+`{(qiA^');
define('SECURE_AUTH_SALT', '/$y:}yQH1`-: q?:|t.}fGA9Kcb{n Hd8KZ5V#@Y}g;d^jBp E^G3W~9${^R$=s|');
define('LOGGED_IN_SALT',   'fDGUur;.Bg&VTn[:[V[V8|sda%l+H, Cf]DO]UxhcH`EY[0pM*9z{K!9-)>+_{Ry');
define('NONCE_SALT',       '00Ru_RJ6:NF/s&W-?6q.+;scY&@?96O=ce;F`gmv=V}d,]IY-`=rSit3mE NisH-');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');