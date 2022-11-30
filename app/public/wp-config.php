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
define('AUTH_KEY',         'u3YBtt8m4GzFLCtpvmuMI54BEPqcz3PSf3CqlxyLsh9k1x1swXVG1x8Ze38xFllByQdddHuUlA3g5aLMBbaH5w==');
define('SECURE_AUTH_KEY',  'rEXI1rBuTv/Ru7qI2Rl3qepjbhGi81SG2AhOuRjx7deSm/GlCrU2PGze5t5B7I0F88XwLLMpAsXUqmUiCUlXUg==');
define('LOGGED_IN_KEY',    'OkGYieKL4vyDYYXvZnQ2TnyjUC9XhLZn20F5Fu7zODbW1nwBgzkO9MiTjuDBnGgrs9sl0y3y8G5+09ubwrYKOA==');
define('NONCE_KEY',        'MKy2Fu3UQsSvkfJGfNGzWL/Zoisp7/ls8mhnqS2l90B9MOQS4aWQw+8tGzx/so50k6/lia+EHCVag8iPA7O0nQ==');
define('AUTH_SALT',        'v6i8eQvEyGhvOgVYZtJePeXKFiDIvceruhQ12g1zGZAa2tGjjMaOwqgHlx2odh3dzNEK/ZZjMXNySLmumtKuXA==');
define('SECURE_AUTH_SALT', 'hX5VEnh6J4ns79y2s1IQFhzhddHFCnARNSID2MPCkIxp6KWJ7oJm9h7nEP26tPC6Py9HOgzKv3ZmQMt5u4k11Q==');
define('LOGGED_IN_SALT',   'K9FjNfNKtobqCEZivzh1yDTGIdL6OM1VVP2MqG1HzBj4sb/wpJsLyrBxe5kB6U0MvCenFnZCGkuMPgtUn9Preg==');
define('NONCE_SALT',       'IptGJ9aCNN3/0HIWA89i7F6/xGVoTM+T4OND1tcfKY80UKyDOASaJdYSQuMilVKfRPWZvxnBNo2N4Pb0yORocw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
