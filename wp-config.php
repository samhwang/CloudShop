<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456789');

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
define('AUTH_KEY',         'TkStLh6E$#h,)f{K+)6#Kq z&YYufOS,aZb7*r8Ek$-WBJ6FF9FWaXGy&|UnFj$L');
define('SECURE_AUTH_KEY',  '%AwR~X1C+o2$>0+7d:`ZV&1#]KZqV/o=pmHgcUQ=|t1/xhEUF*T E3fQ>#o#xpCJ');
define('LOGGED_IN_KEY',    'bH/i4EH;p^@sl2o*@|9]GeM@|tzycds-zwJ8b[7C?YPeFAvuOz.P<y1Z-{&~K^q`');
define('NONCE_KEY',        '0t|q20e3pYY%Y-Gb5?Qr_i;N4G9KyE+LN>qrG]bl{t5{fNa7Rj3fx:*VTca+p+=|');
define('AUTH_SALT',        'J2B4Ga33>*M=<*NkC:i;Ua8t<vSP.=1kkFk9~^^>HlD*K}Y]p{[GI`:rz#4hEMU=');
define('SECURE_AUTH_SALT', '`.G(&H-.|P%|)HZzuK,}[zC1y3ZVjHvb-NZvu,mLCQS GvP^CYP+~YGydqN|D-6T');
define('LOGGED_IN_SALT',   'i>bb+uj>lV^z0@+gd28B>~)*swD_~Yeh)LNp87QmaEc+,{`V{*MAPl3c#n67JHHC');
define('NONCE_SALT',       'ooeBy;%I +$R;IC1Wklo-+/05MPGw]v4B>t%B7VIcXa ]K=*8rj`=P U,/LCJ==F');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

