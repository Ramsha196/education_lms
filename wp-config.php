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
define('DB_NAME', 'webifytoday_wp87');

/** MySQL database username */
define('DB_USER', 'webifytoday_wp87');

/** MySQL database password */
define('DB_PASSWORD', '0Zp[S)35Tp');

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
define('AUTH_KEY',         'uixxnbdtglnybftngngmpm5tbfa8ds7ky2rdpslihpo0x5vzojm700bygduqkbw1');
define('SECURE_AUTH_KEY',  '4ihdn32jr3olpr3nvzocgpaq7fukywscjit69rl96cqdg3y6s5m9yfnhdqyzmiku');
define('LOGGED_IN_KEY',    'z82crvtr50zyxloti2ntowhqqys4amggrlqqianvldc0qsy6rzlfmc2dwoi1x51f');
define('NONCE_KEY',        'dkwi17be8n3nyhf55obzz6axu2jzxai3u3slw33byu1vtexwxvu8b9mrup26xuyo');
define('AUTH_SALT',        '5pqldwpdmgn1mx82z1sambwwoqq4rqxfqq4dmzoate8iczgiuenh1jnxxej95i2f');
define('SECURE_AUTH_SALT', 'ay3pz6iidprs8yv0wlugcppnlnkklgematzymlfsnxzyr16tyhr0so4j6nzg5q89');
define('LOGGED_IN_SALT',   'tdpas2yyvuvvklpgikpbqeyduo25fysqyjrqy5xliunhmopsp9zndbnj95lsruei');
define('NONCE_SALT',       'ablwektvmao1bqghqksjpor4uztyeyv1pzcgbs0ymyjmf4e95bz5i336123xodxd');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpvv_';

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
