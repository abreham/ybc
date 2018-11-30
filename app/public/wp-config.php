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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'JVKeuwrGQj6rIbLLFkdRBQRCYnQuZr6EkFtymJrzkB3BYoNKQDWI9GAKd/4jpZBfsgR69dlRymeMjigxVR3nbQ==');
define('SECURE_AUTH_KEY',  'hSgmnzMnEct9fx2BDXu8f7OodTV3/RuIFCCN4PYCgnkLbCDRQr++KjCPvgQY22jWl9PCOS9pEFfh9IkEKzJ3Mg==');
define('LOGGED_IN_KEY',    'MzLepqiEALGnal0YdKDulnzxb45+cAsF7Rme8YBAG2mspgtE0EXjxzL0Py/fO37V1+9xidyLlUSTLgHwb0Fncg==');
define('NONCE_KEY',        'hLAhyjO/sDduH2qfz6Orltn1/4fKYUgPXJkaiPOpMsvLqg7RBTrjget3zRz89HDErUyF2bI6oxj5y+HteM3bgg==');
define('AUTH_SALT',        'DV3LPZusWRdQ8LxR2ZccAsruci5HfiuVv4CKaUae+6MqvBiTZEMiE0PZLDHia0XunyqPiMohW/3fyx2vsYiR1w==');
define('SECURE_AUTH_SALT', 'PcT4Ia/PuLrx1iI5C6vtebiJ9mn0fPQEGgRB1cHFUslxalzLZWdJpmPWU+dImcCu18mtxA1QdrHeW0TTVBTwVw==');
define('LOGGED_IN_SALT',   'pOshAegfczAApDC1FOatFjyk1BMY3B6DBdsWZtQKBHLS/7GYxEQ4CpRQIEo1glNR3wTyjDrCepdAc13KsSpS0A==');
define('NONCE_SALT',       'GHIQ2xXQOt0n1UBUfiPgeI3+PupcKtTpF4XFQjkm1rnY4XulHWfCq9k8TYfAckCZhD3njc8GwyxkudR7KsQmrg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
