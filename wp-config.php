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
define( 'DB_NAME', 'newlakshmikanth2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '9s_dM-t#}&:WdgZ-<:Hw!f9h/gGsX/6xA8y(_4aVus3a-IXg`aO?.p@Xnn**j>]z' );
define( 'SECURE_AUTH_KEY',  'j7(ZeE.VnBYgq:,d.PU-pxVwC12VYzk)b$[jt|Z2Yno2#?z2arn/uRJ#;r>L1[{p' );
define( 'LOGGED_IN_KEY',    '!Gs9ha)^vmK:59H|MB;VVr`PY1[TdK,},96+s<bwg(VjQ:)/C]M*.S#Uiql.M5*~' );
define( 'NONCE_KEY',        'OjhbgTUg>Xarl0-hV}>vkOTm3TQvNhuPD]r7]$cg^dug_BF;Rmr2=bI$xO1PB1,7' );
define( 'AUTH_SALT',        'g_o-m/@z4`A^|wGpi+,gu7|D;J{+bL}&|})o,:lR$VDIh8cM_?HpXGnD&ONp@NB`' );
define( 'SECURE_AUTH_SALT', 'e#R|J^$:B!B;3-8Bs^?--nYF=BYdlIYD.rTr5 t=2KnVq7gU<-^L z$zr<y/iV!M' );
define( 'LOGGED_IN_SALT',   'EM] D)2`}T/wj6i|=AJ5<tZVdx,z:hqbcnp4!+=S@#QTF$44A?]k&v55oXoYi_Mc' );
define( 'NONCE_SALT',       '[apty,#d^O:6Us>!QD!iE3na3X*vvv(|&[.EEF VSIcaOhC*53D/<c*mc;ii>>Cs' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_new3';

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
