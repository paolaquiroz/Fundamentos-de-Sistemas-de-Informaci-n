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
define('DB_NAME', 'SI');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'l2~^fViIK}pT<xGr/s)T4*S@KH5EP8O[_{2aMNFM%zZ}t-k5mJDZf^_RC`j~I(DE');
define('SECURE_AUTH_KEY',  'L:H u tfr35n+n3oa#ZB4[ik2iY,jF0BDC9V:2*ivmQZ#xClH>2_c^G GowPjQ9B');
define('LOGGED_IN_KEY',    'HRrl)2msL@j]NHSKmfY}w!XrSH_U%Tm-M^ Is}Rx3nEdy`=TT~hpkm&mvh/zUBd(');
define('NONCE_KEY',        '0(9Q;7`ZTn8yXXV8(VB7XI<6m*+*Z5A`E{|]~!.3w/JY V2OP)&vVcH1:@-/_uFK');
define('AUTH_SALT',        'Y#Tnx/0Tc6aDQA1OH`^+:FTUf|/R&XIMm}_L^~w_][8U1+?]n}[Wnu?tn:BI/@n ');
define('SECURE_AUTH_SALT', '>QioT~w0.{snA,=f8L4Ysfq$r{JFAG8&b+F@[#xA0]([Cf}0sV}_Y HbpKlY?53p');
define('LOGGED_IN_SALT',   '!S@9D!->!z&Q9!F8;vdK ,ZdU@I-:BHw2v%&-`Mx0S3?]pi:I,^YT>JEBX_jqg# ');
define('NONCE_SALT',       '8Fw=MKrH?MnI[e%gvqg.lsq8#F3?AQ2;#>[,zwiNs]G|LgZnLt$DT#Kvs[^,0`?,');

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
