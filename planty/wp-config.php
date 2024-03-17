<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5agAmtRV3w`&V4]Tr8YW:Y8YgK8Ot)*x,b_YY #;e])|Wsk<W]YgVVuIOREfz3}+' );
define( 'SECURE_AUTH_KEY',  '`:pmx?Lfay1WXENgNB%`Qry#*yAx063DysHs;Mx k1C(x!G?!zG?j&iBBxFV)Xw*' );
define( 'LOGGED_IN_KEY',    '04I`8r1/sCfZJ](Q,+@q9vKx(Z([_sHiSHy^Iwh>IhsT|<*CHx-:*P50t(arT1!+' );
define( 'NONCE_KEY',        'pmb4hU+l0K5*NMTbZ9Gx+! sb4D|@^ H*Nas/fQmXG]sb<)pXsyPMc{H4yX|#t X' );
define( 'AUTH_SALT',        'jp08iW.0<sq4;?vKDh}7U!T.B1Xlq<2N$%+)@2J8*_vWC`>H$~}!y>/}@EI7j3ZC' );
define( 'SECURE_AUTH_SALT', 'JIw!#(.sO5ucDrZWn/E*z0r-V[r(/2lU^.H~Q_45}<j}!nX|R=p>TP`}9.3>:+8Z' );
define( 'LOGGED_IN_SALT',   'CKBb[Cz3O*AKLRZv3N7&+dyIZbQ;dxX~9Vc)zU@DC&fbu-]1ba,P@>~b%zM?0?AO' );
define( 'NONCE_SALT',       'KS$[57E7S%%:Rf_PY3cd9<JJrsL&,r4U `hw#r[Yn,.KFGRq@rwN7y2u7R[F?x_ ' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
