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
define('DB_NAME', 'shop');

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
define('AUTH_KEY',         'xU u6MAKj4-OEx^j-&<LE{ z>x`tW+Bo!4lCERdZkC@B2{#JuT8BcDL`y17R)#lo');
define('SECURE_AUTH_KEY',  '({y=uEl<e4C<H|H6~zD:Rv96S@)84JM#T2#~[J=p:;)#&p#5S%-vTWv}N.$*tR94');
define('LOGGED_IN_KEY',    '6(y[HAJd)K5wsCTtHoYSw1htNuAOu3NlTk:v=s>S/!t`sHy|DVwkO^||i+qvYW^&');
define('NONCE_KEY',        '2h G&6zu>G&+?]Q~_=84fP%#w)u&Km5;9y>tuGc*?MI0SdR6dM*%}FDtZ98Zd^<@');
define('AUTH_SALT',        'x!x>JXhnSJ0coSsNA>/1j:&6QO+ZKX0m1cK)Z_bOx3c3bQ!%8uQon,STeuo?(KR_');
define('SECURE_AUTH_SALT', '[d,Cc]{:Fz(DmStR(bn$)ASDi6^@VaS]dAm?%.3ko;,VDyYu1hsE=80/O4X1h=Dw');
define('LOGGED_IN_SALT',   '6cP!posNz2c,7.GpcUmJ7BP1ksitqc2ac=8zGOr}r&~S P-yN+W#!2 Z>6x!AkWX');
define('NONCE_SALT',       'px=DVflFTyHbEQ!D|?dX` X4Y+5sT<l7Z#ebkj 68;`(GTh:3]WZ{pJ5/HY0Ha[I');

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
