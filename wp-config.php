<?php
/**
 * In dieser Datei werden die Grundeinstellungen für WordPress vorgenommen.
 *
 * Zu diesen Einstellungen gehören: MySQL-Zugangsdaten, Tabellenpräfix,
 * Secret-Keys, Sprache und ABSPATH. Mehr Informationen zur wp-config.php gibt es
 * auf der {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Informationen für die MySQL-Datenbank bekommst du von deinem Webhoster.
 *
 * Diese Datei wird von der wp-config.php-Erzeugungsroutine verwendet. Sie wird ausgeführt,
 * wenn noch keine wp-config.php (aber eine wp-config-sample.php) vorhanden ist,
 * und die Installationsroutine (/wp-admin/install.php) aufgerufen wird.
 * Man kann aber auch diese Datei nach "wp-config.php" kopieren, alle fehlenden Werte
 * ergänzen und die Installation anschließend starten.
 *
 * @package WordPress
 */

// ** MySQL Einstellungen - diese Angaben bekommst du von deinem Webhoster. ** //
/** Ersetze database_name_here mit dem Namen der Datenbank, die du verwenden möchtest. */
define('DB_NAME', 'fablab_test');

/** Ersetze username_here mit deinem MySQL-Datenbank-Benutzernamen */
define('DB_USER', 'fablab_test_user');

/** Ersetze password_here mit deinem MySQL-Passwort */
define('DB_PASSWORD', 'HifejOju04');

/** Ersetze localhost mit der MySQL-Serveradresse */
define('DB_HOST', 'localhost');

/** Der Datenbankzeichensatz der beim Erstellen der Datenbanktabellen verwendet werden soll */
define('DB_CHARSET', 'utf8mb4');

/** Der collate type sollte nicht geändert werden */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden KEY in eine beliebige, möglichst einzigartige Phrase.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle KEYS generieren lassen.
 * Bitte trage für jeden KEY eine eigene Phrase ein. Du kannst die Schlüssel jederzeit wieder ändern,
 * alle angemeldeten Benutzer müssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'aJp6/8&;&N_?3?e%X#[p0OI&Kb9E JAYd!P+/_TWPg9p+:[>^G-#P25OmrFM`-%G');
define('SECURE_AUTH_KEY',  'ksl_93kl1MC*q;t+Z~Ve-ZOVcbm2[wU,dXLklp|4=>.?tQ4|dC[J/FfaGE.3.zYu');
define('LOGGED_IN_KEY',    'sN?Y~fHMPTwK9pBXZ-O+7D(_Y1>UDw zV{.|eRC;|+3w~u%$+; g3*h1%YG+pATE');
define('NONCE_KEY',        '@0WL|f}.G}Q5ZVZ}m{KF!v*|uB6]I6k={[hw_|@99ZJ+{$+1#jmE;BXpel+iTROQ');
define('AUTH_SALT',        'XJ{wZer4b=h90_=T*&z(ozD39,u$QkMK#p)d$j#) %&VLej)iV5OD*sJEw=0b8xY');
define('SECURE_AUTH_SALT', 'fy IMorr2BGjLC@Q>MKq*K~?-V]5I^DN)u`0#s/vY7Q/k=b}Y{^HsCB.@Z+:zYAA');
define('LOGGED_IN_SALT',   'yVKa/w3QG-/{)7E7h1o%dEE6F,k<xW*ZCHV-J?_x7`6-8?6Y>HcMH4/!/L>x7s*D');
define('NONCE_SALT',       'fEt:,Vk*U@[Z.xD#gF*Rawe+`IhL>[ts|vICG/=#&7h+_kUNeLbNbyIlsuLGA?(?');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben. Nur Zahlen, Buchstaben und Unterstriche bitte!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('FS_METHOD', 'direct');
