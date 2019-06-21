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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dev_altyx' );

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
define( 'AUTH_KEY',         '1inubb9;|xc~NB(G9uLQB(pqOI7g1Cs@2+qrx$Jv+ErIrwx/7yh-)wA1gtsDK#7F' );
define( 'SECURE_AUTH_KEY',  'mp;go#v}}2$VY|XDV9|xB8D5]c2Sdu>:tqGqZ{mP{LiWk.)|;B[7Q1 Ib<^lT4P~' );
define( 'LOGGED_IN_KEY',    'O=mJ+Sy}:&G.{qfn@eje2CQkhMM =Tx#Ng(: m~!Y5]~cr9}i1PM;SR49!]+EN?U' );
define( 'NONCE_KEY',        'tIRBx~st;^zF,9Ays-)?tSy,a%`%WR,@2FkyV6Vs$Kcxa1B?>!u|*zAR>1J]ovoM' );
define( 'AUTH_SALT',        'z:M<voD`sV:$!2>A@Xi<?VL$<E%p1/!0PDyCc|;nCp=y&>XCu=0]H}zBx(e$e6QU' );
define( 'SECURE_AUTH_SALT', 'Oll7mtV3v)B.$(Sv!nH>p%Qtontv#h>$#?jeQUupO={5:y9rfMcONZUBf+7u&=Qj' );
define( 'LOGGED_IN_SALT',   'zo}6o>pxv{shR=*L3l33(0oEB^*]tIiv$u|{T8T^AFc#Y|Uo=:Q4SH8),wyMe7pB' );
define( 'NONCE_SALT',       '};+~)onj{_[yQ98Kd5/}~j-i67]*f,FQ-q*unp{$DU@xH~YOo_i6IVA N<7y}uM)' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
