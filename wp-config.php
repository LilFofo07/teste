<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
define('DB_NAME', 'nortesi1_loja');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'nortesi1_loja');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'Sucesso_2023');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY', 'dhE9KzczH/s/85cA2d2JdwqIieWjGDOOBXE43D4yKOkIQMpyuP5QhxRRMCkHpP1G');
define('SECURE_AUTH_KEY', 'COhZ23HLuGk0hx5WFjii/hLJaxz3ZZfYeUs9fPTiWPipGxu8dZRUio8rFn3PkSLo');
define('LOGGED_IN_KEY', 'uQKd0jDG4TO2SqNuZDovG0VKv5gKQ2lKf7lfLoi1zulTLLwvRn6zzBVuWXvszGik');
define('NONCE_KEY', 'yo9U41k/9BEObQL7PB4QKvOYQbLJQSbXNpXf1PrxSVC6f4/iGE+rGV6jdTwDZbq7');
define('AUTH_SALT', 'jYk1KJmvonqn6wEZDgy7rzjgp+xbPYoIo3F5q8ekijR5Ji6xmXswVudGXde22RrI');
define('SECURE_AUTH_SALT', 'EZ2gAhGWGia+S6zYhgtPTH2n9J39r1+qiPCch2x69ieHeaT4ngtJptUSGw+4nVRE');
define('LOGGED_IN_SALT', 'd/GSaiMaODYji8OvR5WPjCnZZ4uinLMF5YhKi7ND3B12QDopmHJPiqHyItTyjA5b');
define('NONCE_SALT', 'Pa3toi8Y53bq+SPPDIdz9687Q8dS0tTob7fWJIZfJjK5qvu7YcWrzDliF0Qo5WIP');

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
