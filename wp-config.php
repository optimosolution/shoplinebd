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
define('DB_NAME', 'shoplinebd');

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
define('AUTH_KEY',         'Q8E<Fs24m,I~f)gZ+}uAjiS::F3O9N_e(g;70=I#/;VGp&{itPG^Q;?|cY[:iE@?');
define('SECURE_AUTH_KEY',  'b]i^oF42F^kIUBhn0[/Y.3a5e0wg|F&|@Bl-z)&9Gz?z!)5@Y(Nxc.5]7v~WhD*+');
define('LOGGED_IN_KEY',    ')Fj0Lz;TUat9HCs20;X)F{#z%e7]qFT;{6g4LWY#vPlUW+PlXR>|*g0X4>~B{~J0');
define('NONCE_KEY',        '@m/@oNoY)V,Aj|8m+8/,!}kig@v,+IUvl=TT|Cx$Mk-:znPcd):8jb-DuXCsnH3v');
define('AUTH_SALT',        'z_$}_e/L*>pn<U6w4.8Dy++i_TljV?i6(KFDdZ@Cg5}=&h0-Y.BmECn-m&^H?I3/');
define('SECURE_AUTH_SALT', '7.AT/f^FzRR-qtLwu!.A3]b<4)+Xz%|FhX/}_>p bY>bRA1{+NFSaTJIOSivX1o[');
define('LOGGED_IN_SALT',   'E@:V9<zhxw;;Hy[R y6Q5*.]Ay#MCoF18Tr%)>=c#2u<DzM]sg}{aGTe#Rdu+ZLc');
define('NONCE_SALT',       'CZe5b)iFd$V-GN/^h8cAjqQ<pTOl&#f|#z5<|q7y wq$${^0QF}azN_Rja2RAKzQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sl_';

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
