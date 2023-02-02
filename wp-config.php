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
define( 'DB_NAME', 'max_2023_bd_gr1' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '<nn$HN6*Ws,_Y$-/Hb+t_+E>g2Sa2g2E1]&-CHzZJM3~x<8<Z99v9B61*x0n8&5V' );
define( 'SECURE_AUTH_KEY',  'Dm[sr}MjOZ|qav.lI8QTKgMVIU]c@[?sg!,pX>`]ORZo2t{x&8E<&B_d57_2 h{g' );
define( 'LOGGED_IN_KEY',    'ay>WRZ(x-+kA,U{Cn<#D,M.?g*3o)S`SN!(.SbsmHZ:]Y?jm2zo>cg[w&]Ht_`IR' );
define( 'NONCE_KEY',        '4-Y4pE#ig8/kHQ=5twvasromX*u!KB@A_g`E*c$5^= KhZQLyV*{c`}TS.z9`we7' );
define( 'AUTH_SALT',        'bB3~.tFt_|ZW1jqTs/CNG GF>X~1ao$[S02yuW0!XY?-d}d)V(Dd.2E:8grsGDt[' );
define( 'SECURE_AUTH_SALT', 'CNz_1+e/`/o/R#VhH)QV($[F!n3U6&KIL}WMVgEG;06ioT(:NN?ERppSYchRw^`q' );
define( 'LOGGED_IN_SALT',   '(}S!Z1JS_s@e#n!gcLxcWNDwi9v8<3uT! oIlM)*{f+qb!?yC#V^}iY<hiF;6{.Q' );
define( 'NONCE_SALT',       '(CyrdPcBX,!UdUx}1A6(tg6~<)^S<3vi~hqxh[{7Y]XZH5nX@ye>EK<6e_Pv0~b8' );
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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
