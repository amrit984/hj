<?php
define( 'WP_CACHE', true );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'amritast_wp58943' );

/** MySQL database username */
define( 'DB_USER', 'amritast_wp58943' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pnS8)9807)' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '8iananxf9tgg1hdkquqxci48m683ytmfwc17fpq2x4gp0vuemff7zyrc6sgykpvj' );
define( 'SECURE_AUTH_KEY',  'zn20ab0e4vf1kmx4l2saox6w5rlfwbdgzykjtfuqw16qniwijq2da86vxegw9tzx' );
define( 'LOGGED_IN_KEY',    'v4z0vklxhf62al0nmobtths2j0u9kin3vs1ggqlw2skelnexys9ododjxmd7b8ix' );
define( 'NONCE_KEY',        'sighqu5eukrx3d92asvmfxqe3scpo1jobkzqwip0eurbbwv0ebw8kd56nfx62hdq' );
define( 'AUTH_SALT',        '0refbo5qzfnr52snrzmepufnfvu1v9lp0ndlpkzfyrw11jxibxgvkzt88ekq31ae' );
define( 'SECURE_AUTH_SALT', 'aivpq98wvtdswv6ieajrspx6ihzbzqtgoioqaqjw8f7ugk21tuhlavmsscbijz98' );
define( 'LOGGED_IN_SALT',   'lkjgxgwk6oqpytqbblbjwsrnqdywvhefn1vrbfyvqhplkbwyv4mhw1sib4ms5adl' );
define( 'NONCE_SALT',       'jr6tauc0wtfnjgzry7arigpbsidijsdpmgsqger7qajxjjyes36qtc0qsed1vsbm' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpyb_';

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

define( 'WP_AUTO_UPDATE_CORE', 'minor' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
