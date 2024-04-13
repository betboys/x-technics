<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'xtechnics');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',          '@2iFz_I-by1 y>`r^ufBD5aSMzI<n(O}KO(95L3mqaYM1U0h4JBNJkXLvdX]cZ)j');
define('SECURE_AUTH_KEY',   'JaqHy+JV!41#Gk+O~^t (MD:+`t#dVHFp5`W[$B-S}q.73qNmZ0kWs&^}]*tqPup');
define('LOGGED_IN_KEY',     'EQ.E#L.C-voSkTc#Btp6E<G)YNVu6Wx-QOKuz-&Ncubd&v}0#NtzG^iL}kJ=jE-_');
define('NONCE_KEY',         ' 7 2S6ECu|Wu%rQ$OEBFD0GG$8s_%_TTx5rEeYi5h0!>p=JJpY)%<)0JRpEkj;`R');
define('AUTH_SALT',         'qqh&}c~GKrKH8ei]9}8_sJgJND)P*2mhZ[#G!m&/7~aJsW[9bRG/3ZQ-m6!|},Lx');
define('SECURE_AUTH_SALT',  '5)|j:[[5vIBqkaL&r4tnRqn(iAHrw7P1dzW[h9kO?bm<zBc6[VQ<ts[;K;uqO/!#');
define('LOGGED_IN_SALT',    'Ou;;@ZyDu&9M!6D.hel54{G1y7tZP?kZic`(h;jFTF]|4O$Y4-repyNhg6~#(Ct~');
define('NONCE_SALT',        ':XiS.*?n{L_}:>d#8JV,M6A26<:PRtC/iw&tUBH(N:@;/R@JOOI`0}oY}}y9@UTL');
define('WP_CACHE_KEY_SALT', '+9ovWiMYkXk]5,Tynj?jYr:Wvm,iV/#^y)}o-{y1EbrorP%Muqxa2Q#!|~#%%~l8');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'asd879541z_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);
define('DISALLOW_FILE_EDIT', TRUE);

/* Add any custom values between this line and the "stop editing" line. */



define('FS_METHOD', 'direct');
define('WP_AUTO_UPDATE_CORE', 'minor');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
