<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för databas
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Databasinställningar - åtkomstuppgifter för databasen får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define( 'DB_NAME', 'labb2' );

/** Databasens användarnamn */
define( 'DB_USER', 'medie-admin' );

/** Databasens lösenord */
define( 'DB_PASSWORD', 'medie-admin' );

/** Databasserver */
define( 'DB_HOST', 'localhost' );

/** Teckenkodning för tabellerna i databasen. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'I28G Y -PL<QKD^M`ux H_kg!xa:g6TC?G.Y#otRN,A;.5m$}p*$-5caoHUw{!3@' );
define( 'SECURE_AUTH_KEY',  'j+W{oW:l`N,kyIGiS  &vbV1;}=UYy|;UB)/u:<;IIR:*)r@^s#odVHauMw 7/tN' );
define( 'LOGGED_IN_KEY',    '0o$Pg>x{lypDiHnFLf@5!$>-_6JW:?O*tlBCseY;!u$;(O`rO- |gxqa(>IYmEuD' );
define( 'NONCE_KEY',        'RQa]zD(x3FZE5fumgOfLiFE%h&6Zt6x<[M4Om%3QGMBJ*47PmnBe61l:/;U8}?^0' );
define( 'AUTH_SALT',        '%:.iy.BfT:Ly6k2Gb<jol%7U(f!.0b)HKrK0/{C/S4POCGx|EhDQcNGBU]0Q<xDz' );
define( 'SECURE_AUTH_SALT', 'g8#,65?_<v%9z9qPZ0V0M1Qu!{#Alknt}d8Nz3vdwk7ttoK_AuH^9cI{++%aFk(-' );
define( 'LOGGED_IN_SALT',   'YB?a:ic#>Toij]SchU0JKYc:ZN.3#;USMt$^rh)|r;8t_uOf1uL//cS)XKMA*y6^' );
define( 'NONCE_SALT',       'f%?B+5xjV^$.Ah4-GTBa60cH^7a%:u2^MLeBpC6s9EJo`c$z~2K_ixQk<fgW/{ZI' );

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */ 
define('WP_DEBUG', false);
/* Lägg in eventuella anpassade värden mellan denna rad och raden med "sluta redigera här". */




/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');