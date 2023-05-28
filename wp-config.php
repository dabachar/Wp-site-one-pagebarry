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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'dabachar' );

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
define( 'AUTH_KEY',         '8WSM8W;yeo) FfR0]`H!!5Ql=GW1D]S_d#P}ap*WY4omCS [,s_z8+|Zll(,Q!#~' );
define( 'SECURE_AUTH_KEY',  'pxspm}=P@[*Z1s0g53|/N33iq 3,nrcm+;}F9RAL6+fj.zm6`;Xc.Qdd+t7SeVV<' );
define( 'LOGGED_IN_KEY',    'J0[x<y~0,?2Ov}]K&iR0oY3pE:~[az5b,>49pcxUCuaX-*1neCzdyOY/X!=$~5xN' );
define( 'NONCE_KEY',        'ER{^v?vDN~X/Mi|zdst!v0{>Knlggb[Xk9>n;aFaooS;[GxtRS7Pk*WOqYf3^Mb7' );
define( 'AUTH_SALT',        '<p~BIFzQr{5SJ-?SIDFS*}Z^HY7rnq{Gdt,<VVJ9bSEqLrzRx`LTp@NM,v ]5[X?' );
define( 'SECURE_AUTH_SALT', 'O7,}u(JiQfg]chp&dWv8qlQ&I&j1IJ7KrpnkIu7afNfQirS$ulR[5JwC  s<3$h#' );
define( 'LOGGED_IN_SALT',   ';k-}8n@3,/&:+vYNAF>Z/o>[;r!c07~lzAyK=;u-CW*@s6NW4E1?Y8>O-)FJRsCl' );
define( 'NONCE_SALT',       'G8KwD[S_2m8H-v|S5!h~bMq:p@fb?$zES h<fjd5RN!!VS:P;<5vXvErktG[Eiw*' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
