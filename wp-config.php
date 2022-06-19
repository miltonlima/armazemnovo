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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'armazemnovo' );

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
define( 'AUTH_KEY',         '{/7WY7bXijNwqL$MFC[9N9 -I;DS`FP9E-jA^t*_[(<4*Kx+Lu[8s5c}(]/>YM#[' );
define( 'SECURE_AUTH_KEY',  'c@FjX,yI,T3J8PXrtj}2%53#/7s:Kf?G!x4B +*_;kJmKUCWBz[Sz+Y;AY@rO?)B' );
define( 'LOGGED_IN_KEY',    '?,9(JtBWEz;_dTDAstp.zTs PD!A-}7 cvABn16?5468WX$uSSU38=DxPqg;Nbpi' );
define( 'NONCE_KEY',        '|S~8;ewd3,^V3GBZr7J^o0fkIYj+3x5Xy.ie#Sc&Mb(pU;;YEwGHKS|lnLb|WTKy' );
define( 'AUTH_SALT',        '_3;QYe|?Y1:oo!nfW92byameMSN1uQr+d@_)ZvT]a@.TK`Tev4RO9_u`(P)5,X^J' );
define( 'SECURE_AUTH_SALT', '%;BP>:I*_m3LZh{GPg@@t5Qw2%uLB82mY87Lo[FnhshZ@l*IqL(+_<U.wlmH*1td' );
define( 'LOGGED_IN_SALT',   'wvZwbC#0It_b}T[1v[?|k1<&n?G{2|Q6Arl{sk8B_:IzPuVzxs;]zsw&;uVNpmxJ' );
define( 'NONCE_SALT',       ' Pj?=Xvcht[tL@#FZ::Y>+FX*V;H-M66`R4~eX6#m[y!DUPf#cyWya4!20mn[bz:' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
