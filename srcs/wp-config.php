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
define('DB_NAME', 'database_esobchak');

/** MySQL database username */
define('DB_USER', 'esobchak');

/** MySQL database password */
define('DB_PASSWORD', '21');

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
define('AUTH_KEY',         '3}x{CXAdtL~vj!8CN5!h-Fl[?&E7sE4a*@*H8B2NZ@O=H*wJA57Wu132#*t|j.K(');
define('SECURE_AUTH_KEY',  ')usr}[u.dx-GM=i5.mJ,uR@C|28{=;A|/Q$+<v1UMvK-z-Es+G<gLsD1+<tL5+|V');
define('LOGGED_IN_KEY',    '2a%vM,xQK+([oyF+e)$&DCR#H-O+|[IaL/%G0P^ExC].Q$allPN}ktY5M=L&qhq#');
define('NONCE_KEY',        '`n*L%rb:j![/o.Ucn8>-Y H99-)uW_E:-?zV8+34$i``)!oQqZc$@|OD1>{y=1sj');
define('AUTH_SALT',        '23^g5V3${*bvev,L3L~PH}N{OjEH}zM}|@%}UTyQ^o&7!/|K[D9p7(|^^4_m_[[s');
define('SECURE_AUTH_SALT', '+gb5sK{arFH]s1E[Yx=lN(^y+ZyA<+LcJi=v_~Mqq%.R*j-07A1I^d$Khm-!LYtf');
define('LOGGED_IN_SALT',   '4BQsr.[#sSAbH|v5l<D{]w3^POe5&npY,jfh`-3E0=Cxp/g|wWWOy9ac +sL53nQ');
define('NONCE_SALT',       'qJCE/k|sI7+9j5dy=~Tw}A92{#>5|O0[cV^d:LQmCKi,Fu~jf0JV@]!i7ET#3Mo6');

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
	define('ABSPATH', dirname(__DIR__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
