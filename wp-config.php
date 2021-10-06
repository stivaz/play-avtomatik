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
define('DB_NAME', 'bitnews_wp673_es');

/** MySQL database username */
define('DB_USER', 'bitnews_wp673_es');

/** MySQL database password */
define('DB_PASSWORD', 'Geadalvyedmawk');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

// if(!isset($_SERVER['SERVER_NAME']) || $_SERVER['SERVER_NAME'] == 'es.bit.news'){
    define('WP_HOME','http://es.bit.news');
    define('WP_SITEURL','http://es.bit.news');
// } else {
    // define('WP_HOME','https://bit.news/es');
    // define('WP_SITEURL','https://bit.news/es');
// }

define('EMAIL_USER_NAME', 'mailmaks11@gmail.com');
define('EMAIL_PASSWORD', 'google12345678');
define('ADMIN_EMAIL', 'info@bit.news');

define('MAIN_DOMAIN','https://bit.news');
define('TELEGRAM_BOT_TOKEN','653663522:AAG07pWzMbdbDX1JgEwqqvcqQ57V_auSn0I');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'esvljdvivcaotogrtbobv2lrv7toqbd1tvnhprg9qbbe3usccd8cpz7marq6fghf');
define('SECURE_AUTH_KEY',  'rmk8n69nlpvj6galixio5thwvuwthoxdrzzhwuopjtiut4ukwshz6vqbfzcexogi');
define('LOGGED_IN_KEY',    'oipovpw8uae5iyti7jcebna1ogmxbsth3qiymwb6ld64tr0u6iycv3vqkp87gtwg');
define('NONCE_KEY',        'n6vmf0t0hxkmreurkz3mvh6acthjgor04vjdkvpgqawyssc7s1cqqvs053vreiaz');
define('AUTH_SALT',        'akxytdf4uazxnke7vy0umybwejp4j6uum6rlrzdq54bd0hs9fpqun7orsiccydgm');
define('SECURE_AUTH_SALT', 'oifjb9aha95u6jm23hu4mxpxcd2kqjwkg7mbmnsjfntppptdgfe95djwjyiv5mgr');
define('LOGGED_IN_SALT',   'xzwkg035sj0ou0kzgi6mxkti4y4ic5dy4xkf4u02jbk79ec4mlremulgpimmsdw4');
define('NONCE_SALT',       'duduwygjurvrf5qsj8aebskdh0szbltafzsoq6ssamovtbhs9kde66tbhjrsfk4e');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpfg_';

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
