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
define('DB_NAME', 'graden');

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
define('AUTH_KEY',         'a[:l<Th0g7+E3-%cAdvJ 8xDzs5zdM+7:o7hm*NuI&q-Zj@o>wM3T^nMzre#M&@;');
define('SECURE_AUTH_KEY',  '%( KQ0]1WQt7$9->e$0G9:!b[k;)!sq>z9tsy2`p|/>7A!l^QO`%IuqZ|3|C0#S&');
define('LOGGED_IN_KEY',    '6[{.bRG[g~1Wv:?=d Ms-a^_|Qw,-3+P9#+!R?mgeKm|2.!|d?GXl^Wb7)psD:E^');
define('NONCE_KEY',        '}tEcr^O+&UBXw^vqp3^q;h[,HW1ew$>/|=q88:*OCI05+IFlD-I4XIFPmyg&G|yM');
define('AUTH_SALT',        '?<AW{Yd)qSm.Ow`K%F]iye<5+F4c=k!~9|B|RQ$:<S0(xFQ|ia~Z@3uc/wybm(Jx');
define('SECURE_AUTH_SALT', 'C-)mBid5|:AEA:R#ij`LE @XDyCpddj.w!tM_2]$sIYK#t[BvBF+A f0@xTC_xT/');
define('LOGGED_IN_SALT',   'z-J%O6y`bDBtLLC%##1Q+Y=FLH-fG;2{M+v@xEd{F9L+FK6_R|Gt:}E`TPe>-1v&');
define('NONCE_SALT',       '>7$;F5YO3O+Gr)d@]$<GoSwj^K%9#m562HOI*z_.TlgVve?>n,I0[fwKvGJ`z=_)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'lg';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
