<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ultetriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'shop_windows');

/** Nome utente del database MySQL */
define('DB_USER', 'homestead');

/** Password del database MySQL */
define('DB_PASSWORD', 'secret');

/** Hostname MySQL  */
define('DB_HOST', 'localhost');

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'd2T{JOOm@,W{pr1$Q|ouyf{!z+vAeRK]r,lof5Rn_fZX@s_!oh? {t0iPSPBBSz+');
define('SECURE_AUTH_KEY',  'b6G1ONXFgC)5f8tM4;cnO/t>C1tMoW>J9qS10;AO^*p`t<EE<*L>*iv%^X$75joK');
define('LOGGED_IN_KEY',    '&^H  pK:^B;km+:9~H<NK?yD1EU9)n)a~5o2zaxC/9g!6..Q^?UKS^Ui~2g(<CKZ');
define('NONCE_KEY',        'k:~]8d3R7:> _j$f,@!qz!09b9Vzn(e<_f3UIgY<}pWno4Xi^]-nvu*&B+trxuYU');
define('AUTH_SALT',        'Ms8@|@aZxo[-xb9%2*0TKqm=nZ1T0ukSPX9lrbw~Z0wb,*&A>:7T9QWV p|dNu*M');
define('SECURE_AUTH_SALT', '-23W*LJ+O63IDG2m:a~Et+rI;pGb)R1*7-+{+%#]Ib(MY5kRMYV`ow-KbU[.U3L4');
define('LOGGED_IN_SALT',   'W#aFrP3q qPCooSp:PMvmb%<2wnI2N!1eJj773?`mkjZk3TOpMLQaEBk/OLZ2|yf');
define('NONCE_SALT',       'F!&fOtk&(gcPm~aSb`Jig0;-=W/0;4.SOL:Aic%O;94LKfPfA|Up~j!ok@x^(Ot-');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');