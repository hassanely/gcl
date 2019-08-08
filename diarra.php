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
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         '_K,0MyT9Ev Q%<6P`r@RZq[N!((UtHrJk5=eCvc7BD3b)3KkPtl)J,zI74}*?JMa' );
define( 'SECURE_AUTH_KEY',  'H=1SRMxw1Ad@wB5@e/~M/V`)(.N^^H>6NTBnYy]1*vHqkT9cy9cQVdsYfpPlO0Hp' );
define( 'LOGGED_IN_KEY',    'Y&s-M*;zAL5J- /YISEMta5SNW*CNxGMyy~At}(}`)6)`TeTRyv!zOb:$i1K;us~' );
define( 'NONCE_KEY',        'J^Z]!fI_cy.^bXdK2S(t8W-A,)({njw1>KfFIVq^>B3C1YpA.NTyW]8`-it6.pmZ' );
define( 'AUTH_SALT',        'iAC^(sITVr=F1)h%v+4*HJv9tIIcutZwi7%f8f+DG#G8L4>~P<o!6<XRQZ}is&:W' );
define( 'SECURE_AUTH_SALT', 't;PKzj6$%D+J!]QVC>atH[^z3OD;BwWfEdE)uDyHHd7Xww92Oa4!qM?AM!P]0{(B' );
define( 'LOGGED_IN_SALT',   'hbEDT55LK<6[L{K<wm[8*9m036,G:rEo1|EY.uWe>8F4)2Ec5 dC!{LIkR4=E4 4' );
define( 'NONCE_SALT',       'cxjn3!I>7ySm]}i^VGsXH;C`MSs(tA_B]aldNueJTdK*5Km,K]bA?_yG<zR$}S,@' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
