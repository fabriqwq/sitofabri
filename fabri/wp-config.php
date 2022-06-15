<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni database
 * * Chiavi Segrete
 * * Prefisso Tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'fabri' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-|>XFh9e9:U^OVXsb`u2==C]6OAW E|4bT{~G ,wv]m5@oC,d3tQ/VYFHhX7IA N' );
define( 'SECURE_AUTH_KEY',  '<*YB9?VGQG&0=]4}X-QEtb`R3MhnRDLt(Dv[z1LUtU09uYyznRL6nEJ7B r]_0~:' );
define( 'LOGGED_IN_KEY',    'xwZ}o&6V8}>w}LHBRM9NA+${K(OLxzyq&1o14ByGtmfJ):3}3+O:oj/5fx7r#aln' );
define( 'NONCE_KEY',        '3hygXCmgZ_{h]t_u^6j;*L/:]kApBl9X%in~Hu{sWF4$73%TPxBJ%3Vdm!07,`#l' );
define( 'AUTH_SALT',        ' 7~fR8_^INQ#x-yz^7l8dR$X!@Oo(B*>iY[hDp$pQz/Dx&xqXCW%@mhV&5M4iRuw' );
define( 'SECURE_AUTH_SALT', 'd @uJd%Lk[e!KF+Qt/9+-O_AeECZoZYR4q<[[+Sv8?QpG5AT|d` 2jx4U_=d!G<9' );
define( 'LOGGED_IN_SALT',   ']DJC@Z]*!u-S_AzcxWQ76XPaf23y1AEA=rA*d>x8aNXj(FMl`)iR|#IQ5,? iX8m' );
define( 'NONCE_SALT',       '+&z)Pa>5yT|]{EqApvjtAt.X>3veK[cr.rESd!U/LgG`:TVrGmz%P&ry>q|Kn]g!' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
