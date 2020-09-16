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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'Wi<A_[`o4YdK=cBqoRz bj}Y/S7CL<cp?:=1C:%HE0F|B}z McfW$<2iJmaqm;$y' );
define( 'SECURE_AUTH_KEY',  'OX- -d%i_QNk3@S29ESWmb?f+eN9}Aild,vPL;yE4r2{2+SFkN/*q*fQ6HSCBCqb' );
define( 'LOGGED_IN_KEY',    'Dff{G&9/G%K1me2 &6^e.[kIz,u4T I[]G[*[G_8Um#?Gty.NOd@4*Z~<-M}paeB' );
define( 'NONCE_KEY',        'fP<9Gxq$ny.G7w5*7<8$OkJ9.|)w5WEVAx>[ElQ]Cv ZwSYx.V%F:P/-rLv$PtN|' );
define( 'AUTH_SALT',        '=EQuU<Z[u1q|%SrNDsyckh;k.zJ0Ob#D?>%AxOFp*XU2N)TJ<.J78G}<lW;/[VdW' );
define( 'SECURE_AUTH_SALT', 'S%Z3-YJcGxXZ=V#Dz``2?2YUG;g]eG)GeZ!KIRJ{tmVCe_cjo|B7>0f#T%EL&Vf`' );
define( 'LOGGED_IN_SALT',   'U48N}wi`#l<Kbh@PZ-Kik&UQ8s{3LLU_FcR4%}r3Jo{9~G^`- eEqh64ZkQK/tz-' );
define( 'NONCE_SALT',       'QJ[idQWToSVI1l}K;{~9;els+Psh.]mUb:VB}q|q!Y^k!?8}nS7gQKb5z6g9(~{k' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kks_';

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

define('FS_METHOD','direct');
