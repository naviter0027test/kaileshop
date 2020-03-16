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
define( 'DB_NAME', 'kailesho_wp' );

/** MySQL database username */
define( 'DB_USER', 'kailesho_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'C0B39em6g9l5' );

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
define( 'AUTH_KEY',          '%qb0V7O*>g8IQO`1#h8bW*BjU*xMKcThM?uuW2{_R~V2|^H|R3Pj%5i5,r<O9_i#' );
define( 'SECURE_AUTH_KEY',   'V,9^PFTyZ4&578,=8_`QO*X6`!h55XMKpQu_&}-+@o6bf8,=C]|KNa:fpiLSlpRI' );
define( 'LOGGED_IN_KEY',     '@k%W}RT<?y|Xj?,)%eu[^zniG}hH~5d1WanyT&(qAaV_.`Qsz*XW^M9;_rITknR}' );
define( 'NONCE_KEY',         '-A9hY>o/)Lb.[k[zuaZogh)?Ov1j(@x-TTctQ02J:qJ+0 M6|r<Xkq-y$}6#Y-m,' );
define( 'AUTH_SALT',         '[shR{q8u/mU|>Gs5Xu|RZLLUB>qu^9i{-Q5]WEt?/6%6Ikx^I4+{EHaTTWlBQM//' );
define( 'SECURE_AUTH_SALT',  'G$rKnS7=VylEfa`8o2Rh+<)Rn#mS]k6`t2ji`ZIcOH2Fk6J6ChX-R>gTq=8/c9*#' );
define( 'LOGGED_IN_SALT',    '))B!>_@y-<)yN+HS2k[J`+XTTG2Y o*:[6dkRoylJrH1DRgbO.._jOKF=qV;P~%}' );
define( 'NONCE_SALT',        '[[yU.K*#l)nbSBj0^t~Ki8-#;gWvFY{rAXO6+n!giv:)R~>l4DsiXH#7f@=fXxB}' );
define( 'WP_CACHE_KEY_SALT', 'hb~46Z.E7DLeq$0I%R`C@U>Pb~eP#:aNMT&Y,kFlpJI)bZIY 5#n2+PlJ|J?*.`/' );

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
