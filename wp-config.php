<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'tvcopacabana_novo' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'L]rBMEeH20o`g>T^Rr$+5NWgS/V]K`_7sA8C:cA89natl8G_)xh,K$w|++p?N$7f' );
define( 'SECURE_AUTH_KEY',  ')I_cv(pQdw^b$aELjpYyOFmyGdq,gz=ys4Yh!?Q2v/@a|-0`;jMqaAXbR;RQCG?T' );
define( 'LOGGED_IN_KEY',    '9Ru0hoBC.tn;zlmj!3i=UKs_T6IBeZAauN:iIw;`!9SX2O.!:ZPH,O1xFx=2@f7F' );
define( 'NONCE_KEY',        '3V-t_[i=L)jF0r6W]lhIpm?]]D>_zlo|/0uO-_DYO7T<n^87YYZ-$Vo-WK|HellE' );
define( 'AUTH_SALT',        '=bB#Bcp<xYn/dCkwliL,%$wx(tqg+JN;y]2BpP;h2|>Fdqv,O% .e_0J,1}#_VKt' );
define( 'SECURE_AUTH_SALT', '@|GES.#8y5.aBDp<v,K+BZ2vS_%v>;7n$`3_S>8r6X5fM xv]Q}Dzx0}wRZL-J+L' );
define( 'LOGGED_IN_SALT',   '#Z&?hGQTqImS9fyy<$I(s7gHs!(X!{*/zY]b4QGjs1=5`@qgkrDb%{*<]D.BB,>y' );
define( 'NONCE_SALT',       '6p}3!o/kk,vo#9pBe9s<jQyMxW01SAb]HdW5&RS.:w2Zhw=9LgDe7NwUNIrSwet(' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
