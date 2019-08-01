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
define('DB_NAME', 'acpgroup');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'dockerpass010819');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'B!&?2u,y<rEkkn$%Utsk(q.`vGvK<D7<h4JMbzpn[1u@xwe/tS;pIKp=]_#Rj2Dn');
define('SECURE_AUTH_KEY',  '0mw[I}t5KvI0AkDz=O8zJ/*N]U tk>tK?E za`!$Bjg>}Pd+l!!kzV-?$:w=OR4+');
define('LOGGED_IN_KEY',    '&Wc`@qMUgM?*U!KW(`G=g IeVss$J|OC/3#_U}xIr=&96nc~/|@[%MHn[4]fxB>v');
define('NONCE_KEY',        '8zlVMM&gaJy h7Vu7@09hL7u$x,d605z/3by!6GwD1.s?G=2Psoqe3`19D!#/wD5');
define('AUTH_SALT',        'EK[B$O@O^=c}2N_NEA[(^z<JZYvi+^#H.UnS#VTS`54R4-X1PkA54?.^Qo~B( FE');
define('SECURE_AUTH_SALT', 'Y7sZtuOyl9(pQY{wu?Cerx,dMA1:.*gZ!4<pdn{W}(QP+g&doaqXfr@^jiqwd|N2');
define('LOGGED_IN_SALT',   'dp_0A5M{3[x0S<v/4ar^I/o.tIL~zHcWf#B?|j]|$eKp)X~s!! VIS&^#h3qLElo');
define('NONCE_SALT',       '1q[Lt+dQFIySqY4E&Zjw;Rnd4iE.2(j^7bv-Q{zTP2mNY=/DE5q2+)R?G[[>|Mq_');

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
