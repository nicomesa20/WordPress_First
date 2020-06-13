<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define( 'DB_NAME', 'proyecto-wordpress' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', '~-`hoW6W<I5b1j53ERR/#9ybh24xwI.3I~|>(e9=4C*}M-J8r&L:+}LyT#U~L:`,' );
define( 'SECURE_AUTH_KEY', 'Z$f7QNLHp_9UQ2l^f=tW&K5)x;OC|lPd&?qdArKq@vwW^dC8W;^/i)(P2&3|5+a!' );
define( 'LOGGED_IN_KEY', 'mvSf.3VDj8:qLGx~@nxTpzYk8OCHaC^4Zv+@0}fq GwYV3O{d=}61I<,P`H_.9},' );
define( 'NONCE_KEY', '+uyX:?h)l{_y5U,he:lPq{tq.zNiE[f`68HvIZD2/4ju]<ffSo2y0>EBcOs/%8U:' );
define( 'AUTH_SALT', '3#_g*2Nh,Jf[^oP&gk_+_,+<*b)dMxg#bemxBpmMbAu[)s84yTYQ+xlz6PN>xk(|' );
define( 'SECURE_AUTH_SALT', 'avU/q@13z kFs=xB7!G!(je+aO.UI.%JT]#^p k;}P*-ubQa6|9|O?J;4M,]+-{x' );
define( 'LOGGED_IN_SALT', ',QJI2>5T}-Ic?Jf94^YL*9UptOx//J!TD++#czQ`3zWsuL9#_$FfQ$GuXc jt=2^' );
define( 'NONCE_SALT', '4ciMV*]4:9<0L16d2k#}vy?)R<OclSfKIz(~]J!zq-&*9JA8Wr|/Ud23stnA+!?Z' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

