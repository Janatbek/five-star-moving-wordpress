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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '4cdebc93a00bac0e84c3966d3881252b4dfaa0aa7be7bebc');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '34Pj1Sd94H@sO{NwEh[XDQvj[[ovWq<15GG?b(d04B+WnM%jP-aDtI3<9?7Mv&=d');
define('SECURE_AUTH_KEY',  'E5okx8LR$~[E{<~dOh:h$qA4/|M}Z2L|AZ6l)`g#$K`N,TW%^K.a7@jH%T,ja+jI');
define('LOGGED_IN_KEY',    'W1t$%1P.jF`795xF,y<<z[B_gX}f!]&9HnfVhKXkt9XG^3/CB0aoJlm.eFjLM:By');
define('NONCE_KEY',        '`M|pU[gaG>A;S!pqHCG.GQqdp&^!=ze[tJko)Qj@(>!GG*-E-/b4_0Xi+`SwqvMx');
define('AUTH_SALT',        '^#? 8Ecogx<IRT!lfDOBxUHgerl#mTrr{5vK|-&9ncr-!IxjS`t#elRE+.CV%1So');
define('SECURE_AUTH_SALT', 'N~M_Mn?ytPy^|Ij@wJnN$[91v!Q-Q^1n#* /J/a12JlJfs X]PBgFDFzjzBfB1<w');
define('LOGGED_IN_SALT',   '&+#sBw-_Bq)qQ&Iwa7X6:>#*-,%qDqU- wWC+`2/Cv)Gl4*A,: |wW7UIui=Zr.+');
define('NONCE_SALT',       '|j<l 3w}&=6%R)Jp<f=$0Bl2OD@aDNJ(]r7Y?;CVRD7|TR-;QauPZ_8rx8_m-UF)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
