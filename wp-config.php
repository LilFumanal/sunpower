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
define( 'DB_NAME', 'wordpress_diginamic' );

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
define( 'AUTH_KEY',         'nLC/[UE r.Jg(cX;&<+q9|X&YKZM!CZ6[uj2Q;DXE!N?N1?ZtT^;I^r:RDi}/{2@' );
define( 'SECURE_AUTH_KEY',  '-^_QDTNbMO,B2dk)(Sb;NoO[Qm!W=<t9qzfR0Fz@?=v5P^o0y)2qdG7 7=bv!K|e' );
define( 'LOGGED_IN_KEY',    '=uAg@/m_V{BF/-wSXt8SvIgSr;a|/9<1hNBmG`0>(hH- <n!YSLaM-VRJ};1!W[e' );
define( 'NONCE_KEY',        '}[/$SGh7*N_AvBo^ToJI^1<jABL yW2Vkz@x*AiDmASyg{<NJLgv+Khx$P:d~E6>' );
define( 'AUTH_SALT',        '~]3I)[ mhD$%.|SyVzQzLUlx@EUS,R8Wh7,Z(,_D$@R0%ZDr_aPIqt,eDrvb+yt|' );
define( 'SECURE_AUTH_SALT', 'Efnfty=: RH:BRS1{8:4[XUd?H#we</pN%zpcmsO$2S]#2y|9e& C_nq WrJR[2w' );
define( 'LOGGED_IN_SALT',   'W6XBUO;3Zz#(u|yvYoToLjJnTdQOpTg&5B}A&?]-l)]u|7;uSKe7:X9Hyi6l2 U)' );
define( 'NONCE_SALT',       '<}{aDTofFp_:)Xa[mg-I,]Fg8Q3h6qZi9No+!/3fu?iF6`%nwbw}SdLKM@7&C00O' );
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
