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
define('DB_NAME', 'someeveryday');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'someeveryday');

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
define('AUTH_KEY',         'K9b0[$}<hlBaa(QdSto,V!?]1O4JB>( =o>5F>?,)q-=M-:m)TqH&>jw} IRHb:,');
define('SECURE_AUTH_KEY',  '@YN#*!cyQ|q%~cxCVduJ&lFVV,cL=0gu~b~~nGJawMd7&VX-|LZAut28x|[,(iuo');
define('LOGGED_IN_KEY',    'RCbS3*d:~=mG:rpXPUnVF=#v|H2cm>b!cZ= E%u,*zMh_.U,GX4l}1op9Rdk/71=');
define('NONCE_KEY',        '&,Yz;U3h&2lcRfZ/1 9Mc2OSJF<Z7[9e#T>I|2&XO C[!M.B@Eb:axTcOm$&=e?7');
define('AUTH_SALT',        'Cou/#>w`+pS4w`Ndn}P95^R&C8_`~$u&=!%J`vZ<gIELtUQS6;hWJCPD_u(Xmie;');
define('SECURE_AUTH_SALT', '_Dle%09:aj[su*t>g.C!uU_|l9xH&0P%mak xm6ymN:FvdaQxWDgWr;lvR_V`LBz');
define('LOGGED_IN_SALT',   'LQb0UqUVHH9OF.lck;Rl?W(k8c!y5-W,ICRwtW[0m&tOk!!bS%G]27JCdy__RH:&');
define('NONCE_SALT',       '/G/z.]=hs<s2: _K64ivT.SF,awq_a_rA:&3clL?r{H];c/+AkE?zvd?7h$ZWvmS');

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
