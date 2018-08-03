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
define('DB_NAME', 'db_salyluz');

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
define('AUTH_KEY',         'SrpzJGML:5(ky%H:S84CO/O1]ir)93M2h}-zXB=%ZIH|C89H=OP[;1U:*iF4(ux^');
define('SECURE_AUTH_KEY',  'e#q1,n4EY&_[n^R_>7(Vgb=-9JwC}4A_6|NB3%ZQNZqXQ=y#T/WYgVs7oq(oy{}F');
define('LOGGED_IN_KEY',    '(rgR;mg[:[Y2jsJ8I(POY@~c1V7tl^{j6)#kggZWo&=_*/!;Zkva;&,T6*.#]}Al');
define('NONCE_KEY',        '/sKNQ`g(/4RGG8]ZDeUFT^b*LM2Yu%=boh+9;f5p88;afOc0R.2x,x6TDr]^}vW=');
define('AUTH_SALT',        't`U(xq}EFqy@zA!C6{(Z!mlr,Ap^dH^A|!5|4nOa[b::;iDyQr*6cLc,KG)W^/z~');
define('SECURE_AUTH_SALT', '/>(Yi;%Dcz3q.:([)pUH:H)h./WQ(DXD9P/_uJ=3|gMdWI)4L+_jEU[5E*sih*~$');
define('LOGGED_IN_SALT',   'Rhsyts6xlE)!|RarL-OG63?k?nz_?yLfyG;rtK9M.6Xo@N.Z](:i<gfy4WR&I%}!');
define('NONCE_SALT',       'zd#BElf_6@X/EaT2sUmlb8+Wx?UduTMSNXngkaVM5T`FI|)JXXqL_Tm$+b{l(EJI');

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
