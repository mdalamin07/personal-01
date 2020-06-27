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
define( 'DB_NAME', 'mdalamin' );

/** MySQL database username */
define( 'DB_USER', 'mdalamin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'w.VnNigxi/xQa2V' );

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
define( 'AUTH_KEY',         'AG-Bw38m{yw,qYV9jH^*9RGfsYrX-:&{kvmfqQlI5i[3{b.#WwCvfX&PxjM+6_O&' );
define( 'SECURE_AUTH_KEY',  'G0LZNi$:B/v[*TYF:{#eqfmH4L/5rBvF!g,+^A4Z_~f~_DzdVCX+R5Ap;b1,*Y=a' );
define( 'LOGGED_IN_KEY',    '&W]@Jcs[0bl|?*6/}.,DK)AI~dk`t9U$?e_ D[:|k[;^iSGEDo(92Eg`EQ+I^Thz' );
define( 'NONCE_KEY',        'ml=e~^RlFJ<tZ3oX>OvI]Kt%9AVH[48jTd^Q(/R5.]^|i#A|?=kPK@WdnGqoos@E' );
define( 'AUTH_SALT',        '!pXC!cNo?J+zXF1%x)m9]b{y>H m9oegk)Duh5=i}W/l3{uur>F!._<FlkvDf/g ' );
define( 'SECURE_AUTH_SALT', '(<<Rmyu40[R%-iaG[xe^UABVctbqU=RN9X:hqlNB+{Ff1f5k(x2FuR,kzY)a16|3' );
define( 'LOGGED_IN_SALT',   'rS3-^.+c3^$qzSC}kAb+V:m)Vuc7AIChFS{tF^vM$psQD(sC*MO:=,)g#Ur[4Rkq' );
define( 'NONCE_SALT',       'cw9Kf(pz=PBs[QFS?p,)xNa?wAHUS9)&AA$H:.2*:_M)rXNcI|,5a5S~OCS1@=f<' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'md_';

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
