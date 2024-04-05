<?php
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
define( 'DB_NAME', 'AWD-web' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'F3lZZQSYF1EhFjqr1FtlMbA8NuxszZSgBbhWHe0kyvJAEDskCoRFeyu0RgEP7PFB' );
define( 'SECURE_AUTH_KEY',  'FBrVFPSDhnOc68ZyUoyD91HoljB7aG5bUYexwLm8bCygUFSTIZeNJ16vrwCk0acO' );
define( 'LOGGED_IN_KEY',    '1KmoYe0SNXIClkEzmz10ptrGofgAf8fRxzTi4zxnKerWqDUV8KZX6RdpRHAeLlCP' );
define( 'NONCE_KEY',        'nICVFiiklc2CmLxcfa24QPMQCkIFNL6hAELzYjTLkcQbmmN6smoBl53GxjbV6fqt' );
define( 'AUTH_SALT',        'Bya7n8cJD0mEw7gITIh6xNaIZJgQ5oA4zjChVmixTnDzchkE7JyR4tqaYLFFXwiZ' );
define( 'SECURE_AUTH_SALT', 'Qc4luzXlZL6hsFdRZG6vnE0sxgAANeLzXsGuglSqsVXxsXIkHWmBFeu2FEMcwwz8' );
define( 'LOGGED_IN_SALT',   '3cgsNK3xd53HRMHLbPMbVKXtKxlbBEBDwCkFOs561KflT7mLpsSosgb0RFEaI64Z' );
define( 'NONCE_SALT',       'zjelu3n33AjHIjLwksyU5teUOiH0pjMFD9dwHUp5BufsTEExrjwpiirbLrlOsAMM' );

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
