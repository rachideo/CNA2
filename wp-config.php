<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */
 
 

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */

define( 'DB_NAME', 'wp-cna' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' W$O|o(+!+5ZT<7qpTo/5Bu:KRC6m^]X#ddjAoPDvZhw%9ou]:Sn6:N|/; =qH48' );
define( 'SECURE_AUTH_KEY',  'uKq%sT)?GZb EX`kaF#++VfjAh~8Udf)Y5*F^`)ezr~iGsz%^5?,zm, h*Gw4a*d' );
define( 'LOGGED_IN_KEY',    '085=&]OlaY0W.vW:mD-#YM)iFVf5L?%|TNM^?-NXt28Pe.uz<p98%aiQOTIU,X-=' );
define( 'NONCE_KEY',        '$#qeQWW]k3:5`1oY7@-~I;B/aG`_`Kt#KGfRWw.wL4ujSf--R98gc|E:g`vG]G{p' );
define( 'AUTH_SALT',        'fPbeyOP}2Sq 24,W|)Z~eq2paQ[n+;YGl^!l#a1w>L,<RY4o8MTx8{#z:Lsh}OW8' );
define( 'SECURE_AUTH_SALT', 'W7hB@lF;;M1E=EHm{*[j%H=T!Tj1.xI7nI^ml7L1:,t%1v^Z})q?m+8^o2bhQf~N' );
define( 'LOGGED_IN_SALT',   'x6jQ zi76)zns%a)Q6>@@ks06KFg,!de|a,FMY#!>mt+s3xqP#:y$q9a=u[b9lXR' );
define( 'NONCE_SALT',       '$V5{10).Vw,>qERt?yNPWHjd{aPD/4j=,O_>y![FE-0^cf3Rq/-yA=_amPnfMaJ;' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
define( 'WP_DEBUG_DISPLAY', false );

define('WP_HOME', 'http://cnawebsite.fr');
define('WP_SITEURL', 'http://cnawebsite.fr');
define('RELOCATE', true);

 define('WP_POST_REVISIONS', 3);



/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');









