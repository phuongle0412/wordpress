<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'u159206630_wp');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'u159206630_epn');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'Phuong20');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=d~Y8El|2*ldNK4}i4@V/hPXq|}-2h2h(=>74}4E9M).a0@pe$%YIX<^XHn!)Isa');
define('SECURE_AUTH_KEY',  'IoAxW|9_j<5+`lERT5!,wCY|6Mgc5K wJjJk|paG$2a?ru)o=K}Nz}5UnwLJ=G~-');
define('LOGGED_IN_KEY',    '&7u 0|%)v~?`?|P9Up}3Au*fijY8BTf+pT:ST(l*7OnDiphRp1C[#%EWgD]iqo-i');
define('NONCE_KEY',        'Fe>T8X*+R-%hxP|+=L54@|0/,Y3gp+!J{o[_3uB+qThP3w_Xo16zzhq!`5f8/rQ ');
define('AUTH_SALT',        '<5-bEqYkF68riBsK|TH;`OG~Tc;+_4?EXqi,ak8tNGRs!VMPN!p7jc{N7{&vKoMj');
define('SECURE_AUTH_SALT', 'nN~~?L^-vpjGf3HSJwD[$E^iJ2sLsV%q3}!GATCo6eg!T:&1(A)e:qg?RUI^sjcr');
define('LOGGED_IN_SALT',   ',.-=Q9pSc0g]|E33%5|G$o|>fh`.V-P}Zx!JTG# _BOvH-e,F<9w>+=LTwR3$?Ad');
define('NONCE_SALT',       ';9}r4ZCoXq=J58D-EH/Ds*{cW3!9qm7d>r*8y_RT`6pe!+rPV$`CtE%Pc)8X0)@W');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');