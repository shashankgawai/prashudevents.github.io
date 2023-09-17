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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mydatabase' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '|G%8fe-YIJ,J-u;?Rzu&78+5.%jC;2LbU2_5D,cxgCBa}B*BOk_~i&0N`G$AYk=_' );
define( 'SECURE_AUTH_KEY',  '4J@w@upK8.CW.z*`EZ;:a0HH/&.V2J14AoFU@4]{@oJ]x$^A$U%y993+zW67/&22' );
define( 'LOGGED_IN_KEY',    'rD/,$k_ex$==vWbsWHAS9!^=@kpQCA6GBCJ4Kko]gqHJF.28S1;R[.COko~i3s/U' );
define( 'NONCE_KEY',        '.[)i@L!?_Zq]J4K?uGf8N:I.rM+nk*H!^/5`)CV-XK=7XZ.gTQ34nbIS.]68xsH~' );
define( 'AUTH_SALT',        'P<LrG&2F/Q%VqkxcctqZ!5f#P#h-cgLMneyYP=0<(TBVV?b~4I`;FynrsdjeD^hx' );
define( 'SECURE_AUTH_SALT', 'CJzW)eCDhD5tN0x1t!m.XoBS-;r6?&VNtI-bH+~&vk*=bcnGG=JNF==YDP/:OAYY' );
define( 'LOGGED_IN_SALT',   'q!X<!1Dn!UG*myRl_tO{OW6G>oSzqq%;&@oN!vTQr0WxxHTqjZ#v<[?4,DZgGq<4' );
define( 'NONCE_SALT',       'kH>jD2F~}}M7*j3hN0R8;E 1.(K#+nn0;q;nfSNO}~U}^,C/1,}Ik0(p.R<22<!e' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
