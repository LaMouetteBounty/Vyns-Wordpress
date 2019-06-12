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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'online@2017' );

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
define( 'AUTH_KEY',         'UIvgg0tGXLQF;$V4+atz+9.)v2`jj!QT YIEV=.By/Y3~&.Dex1r?qTj9O.yH|{5' );
define( 'SECURE_AUTH_KEY',  'W>)..U|Xi dx^s5ud]<$%Us#4R0,&@_j;bc+QSz%V7@kI#_CsP7~Neud.w3l-w a' );
define( 'LOGGED_IN_KEY',    'NR<dtIycQ9bmVTP79|oj&&LFbVq5 K9V=k?nDyja95@Rey([]penF+O:R|TWWmMi' );
define( 'NONCE_KEY',        '1dR.opnajJ6+G2/;1 p-Mfx`oCdbGZ+FD/FoqmeH P<Op)Vvd86K42@p/HPl:``+' );
define( 'AUTH_SALT',        'C1LKXG2;,RF@]P_k}b1zo9##AFLK&CtHqidPD=|z@[k0A^}I=-Exwxl9xU_*Q]5j' );
define( 'SECURE_AUTH_SALT', '9Q6kJg%XI`J,:oRZ8Yl6IhTE{r>} :27gP.LFwL)sq,[0xKRLB!=s+dA]OuTu|TT' );
define( 'LOGGED_IN_SALT',   'dOR):1sc>:,NSz1a[l| ^*3p4`T#;*oc&V,al_k2^`S}QojUCs*nT8%29*< UH{x' );
define( 'NONCE_SALT',       ']0hr)G/-9$[A]{L}xpecn9%~jp]tYshPGe4<-8zBng0ep;+)BOW[-oA8mOn7Y/}b' );
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
define('WP_DEBUG', true);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
