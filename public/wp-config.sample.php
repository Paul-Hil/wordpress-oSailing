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
// IMPORTANT CONFIGURE DATABASE
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'BDD_NAME' );

/** MySQL database username */
define( 'DB_USER', 'USER_NAME' );

/** MySQL database password */
define( 'DB_PASSWORD', 'BDD_PASSWORD' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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

 // IMPORTANT CHANGE ENCRYPTION KEYS
define( 'AUTH_KEY',         '$2y$10$O3m4po9I5schUHdTkjNAwecouD1vcomtdxHXAePtUzJghB7b3E04G' );
define( 'SECURE_AUTH_KEY',  '$2y$10$ON/c.f/gJO3pknkYjWNSDeHTPW/UqMQT4tJrZ8uzC3B.Fe.MzoCNm' );
define( 'LOGGED_IN_KEY',    '$2y$10$FMF1S5FGw7OYyIbXiGko0uSdLM24Uu2ORBCEIfZkWT2aLLfDp1lfW' );
define( 'NONCE_KEY',        '$2y$10$QgakktJSSqKzdeqVOfz2VeYQLKh72b4En3ImIjR8n07RCIemyTMZ2' );
define( 'AUTH_SALT',        '$2y$10$ctRG8rCB7I2G2TV.oIz4o.8lXZftWW1NF7TE3YvVF8Qjzo27.uvuu' );
define( 'SECURE_AUTH_SALT', '$2y$10$ISsFuBPSK.0NQ.L3aHiZdu2wBIhE3jN.6JxC2JUXNE3KfJl//1eli' );
define( 'LOGGED_IN_SALT',   '$2y$10$eSrEnKhgSmspn3MU9c.TxOM2A03HcVtNlP1dLoR1My5xJw8aCJHa.' );
define( 'NONCE_SALT',       '$2y$10$rAsXAuQs24.EikR9ZAIWoOAW1OEJ/OszkaJlbb5MMWBVn46OI8Edy' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */

 // IMPORTANT CONFIGURE DATABASE TABLE PREFIX
$table_prefix = 'wpsh_';

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


// IMPORTANT ENABLE DEBUG
 define( 'WP_DEBUG', true );


 // IMPORTANT AUTHORIZE PLUGINS/THEME INSTALLATION FROM BACKOFFICE
 define('FS_METHOD','direct');


// IMPORTANT CHANGE URL HERE
define('WP_HOME', rtrim ( 'http://localhost/cours/sheherazade/wp-custom-install/public', '/' ));


define('WP_SITEURL', WP_HOME . '/wp');
define('WP_CONTENT_URL', WP_HOME . '/content');
define('WP_CONTENT_DIR', __DIR__ . '/content');

/* That\'s all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
