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
define( 'DB_NAME', 'Construction_Project_db' );

/** MySQL database username */
define( 'DB_USER', 'const_pro' );

/** MySQL database password */
define( 'DB_PASSWORD', '786638sm$SM' );

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
define( 'AUTH_KEY',         'oy^H*zQ2cf|~z}fyfG;KcfBfnk^~{&<l~*/cGiSQk2vY*v&5wp7~VZY05u2T|dT:' );
define( 'SECURE_AUTH_KEY',  'TEt%H&uR_bFVHI j^5s8k^x/*;3IaeFS(7V.nmgDFBW-G4jV*5s)K Cgq67tK8iU' );
define( 'LOGGED_IN_KEY',    'v9-=@S6UGcnA0x[cYsMvb/|}^kXqm9?7t^[|*l|LBcBtEvO+Tmi+c%948{q!NJe9' );
define( 'NONCE_KEY',        '~^)NGb`.Ja4lePa@YEQhX~E$NL_=:*R-?YM|(HYwJa;Ng+_5-dR[HhnXH+`ubk5 ' );
define( 'AUTH_SALT',        'zt;oM#}a:Dhb/LX-dc{Y+>^6V4L.nHdRSx*TC1?W]~fQesyGZq@l.z}ZP6~|AoI~' );
define( 'SECURE_AUTH_SALT', '2o*]B7DPe8z0`F1+1&XAaL6WB)Okv>Y#Ga98i,Yy?odZnGC,_v>fl@3j 7PYP^Fz' );
define( 'LOGGED_IN_SALT',   'Iomgb2`]<,#SA30_0Zq]+kOf=xgZ(O.RpQd]1 IF&HDI3vHn]s]Kn%Hjwjc;F^Wn' );
define( 'NONCE_SALT',       '?J+`O2eIv_,0n*=hsv3H<^w$(GCmVb,nPn3uI18[E^9Ao=9NtR$5S]hJ;zb`}uM{' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_const';

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
