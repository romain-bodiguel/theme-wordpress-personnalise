<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'word_groot' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'word_groot' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'groot' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'T:~c#W9>1o@JAIsUMbyDmE1x7m/k``C$n!U&~#C>0Ieb;D9gWFsTB(r5-ZY,oBe5' );
define( 'SECURE_AUTH_KEY',  'jna-R$M1,3(hNW,QIj<QDdG87yd|@(2`>=m=K&@#@.bDYaV8B(6D&q]n0r^*1m3!' );
define( 'LOGGED_IN_KEY',    'gMP${c)Bp4F&R#u?Y,*jRA_5sC7e>Qt_^^vr4e[G&I_+DNi&L.k;@,OC,6.^e7*_' );
define( 'NONCE_KEY',        'x}jlefmBQ/P8d{JQm~jZ^m~rhkIoYy^E/w8w%*v=Lb(#{|[5O{y#YapM}_K/dlKV' );
define( 'AUTH_SALT',        'd]rE&m|Ymb-FYPP>Y16tU:P^l4C[A`za!z}[1.>7G7rmCbRm/wIv{a/1AX#.l:#R' );
define( 'SECURE_AUTH_SALT', '2M]1Qa:4V{Tn)22*u.3POJBa:ke<q{C5vS*>M<K^)t[8RA1tc?DKY94<ZI<`,9Qv' );
define( 'LOGGED_IN_SALT',   '2s1P`jI8OBvNhc{m[Z!99439zU;[QT3?gUQlq,n8X5_:o`0]1qW<xkN5RmNGt+Rz' );
define( 'NONCE_SALT',       '+$3i,ly`*p1OR- 7dU|#W#B%C8WC:xB:q8U,6ph%X>V+ngM@!GpCY)s[NzRVhd;;' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

// On autorise le téléchargement de fichiers directs
define('FS_METHOD', 'direct');

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
