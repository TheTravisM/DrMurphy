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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Derek_Murphy_DB' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0dK=MZqFl{]gCvFDw9UlsBu]94/zI0TZ!.d6~fEaXdw4^9xZF_&2gCpH&bo95dcF' );
define( 'SECURE_AUTH_KEY',  'IU7U?nrO.6tsyQRVfK9GQo2e8FW?$6huRVAF)#2Nj~3[<=eV3Hptq*RyR}Cx(In%' );
define( 'LOGGED_IN_KEY',    'N;gY~YS,6IDnQ){0Hn3K&hn {Xn>R5U-y-{.vrg78:Ps/ur0?18<9e:tY. tp5!7' );
define( 'NONCE_KEY',        'X>%-}8k=uK?`;^8J*E[V`7u:i#Vf 9Yk/lqE^!4 {}p& uH41RB$UgH64h-K4W6i' );
define( 'AUTH_SALT',        ']]f[r>6Fc@31.gKQ)vA^Ub}D69U,IssW<DDO03d+%YrX`G;NZst6jyt/^9,:ba;3' );
define( 'SECURE_AUTH_SALT', '|/)e~trsC25EZMb=4a-t4W$md:<27)aS&`#,lTxE <$Qxm(#DJ6].mCy,5bW[I|1' );
define( 'LOGGED_IN_SALT',   '21G`Fk4hOzWin#r5}r/({D)7hyLa.[[D{qX6su2}s{Eryo{><)6ixnW/ .N.W_P:' );
define( 'NONCE_SALT',       '@E0]I`4R]Je=_z^r!=K_8<Y)/.UP(inWX:RqfGhX2ck,t_.IVZ3FxY;X9?^%zSuY' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
