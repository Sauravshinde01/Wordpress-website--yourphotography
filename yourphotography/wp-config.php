<?php

/** WP 2FA plugin data encryption key. For more information please visit melapress.com */
define( 'WP2FA_ENCRYPT_KEY', 'RTfGsJYu4VpEsSK2lyfe4w==' );

/** WP 2FA plugin data encryption key. For more information please visit melapress.com */

/** WP 2FA plugin data encryption key. For more information please visit melapress.com */

/** WP 2FA plugin data encryption key. For more information please visit melapress.com */

/** WP 2FA plugin data encryption key. For more information please visit melapress.com */

/** WP 2FA plugin data encryption key. For more information please visit melapress.com */

/** WP 2FA plugin data encryption key. For more information please visit melapress.com */

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'offixser_wp519' );

/** Database username */
define( 'DB_USER', 'offixser_wp519' );

/** Database password */
define( 'DB_PASSWORD', '1)i66hS[p4' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'mc0bozibnztt1la9vmdjjdwb4af3lfkub8qn3abtzaue0rmvuqvx0alqbuzw0bep' );
define( 'SECURE_AUTH_KEY',  'lpqhrod8agigggiaf9j4umvpxskydlp24zqvtbck1t2flovtxdh90xvcetpjz48n' );
define( 'LOGGED_IN_KEY',    'yqhu0zsowhqwzmdzfyjsotr8ezzqohx0vut5oohslrx8oqqqonua0qryuqumoddm' );
define( 'NONCE_KEY',        'fcuxcxmzn4y7xhwhvozkw5f3yaru5pmes2w7fjcgwllxwqoldfj0pvsk8h5vinpm' );
define( 'AUTH_SALT',        'wtkzl069skzgjcx3gg0v8aq2kvzotdpwuxkiwn2wkldwnel3yn2t9ehqbpzdzhcz' );
define( 'SECURE_AUTH_SALT', 'z5h01v2rsc7it36pxtx6swuigzcf4fcrikfkxolzichhdjahkvda8i0evaw7z8sk' );
define( 'LOGGED_IN_SALT',   '2n6jo82cuoc7gg2cnlwfj7sv39xdykowkdi5trm8rixbhcbrbqn32fdisxfq1wjl' );
define( 'NONCE_SALT',       'lycib4dqhuw2lgnsusv6mzr0pjol5qq7srtqq6dat40yv7sh6pm2m9cxr8tzhqs0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpf3_';

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
