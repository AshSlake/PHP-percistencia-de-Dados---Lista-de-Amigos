<?php

/**
 * Configuração e estabelecimento de conexão com o banco de dados MySQL
 * 
 * @package Database
 * @subpackage Connection
 * @version 1.0
 */

// Definindo parâmetros de conexão
/** @var string $serverName Endereço do servidor MySQL (host) */
$serverName = 'localhost'; // Para ambientes de produção, usar IP/domínio real

/** @var string $userName Nome de usuário do banco de dados */
$userName = 'root';

/** @var string $password Senha do banco de dados */
$password = '';

/** @var string $dbName Nome do banco de dados a ser acessado */
$dbName = 'pwii'; // Substituir pelo nome do seu banco real

/**
 * Estabelece conexão com o banco de dados usando MySQLi
 * 
 * @var mysqli $conexao Objeto de conexão MySQLi
 * @throws Exception Se a conexão falhar
 */
$conexao = new mysqli($serverName, $userName, $password, $dbName);

// Verificação de erros na conexão
if ($conexao->connect_error) {
    /**
     * Encerra a execução e exibe mensagem de erro detalhada
     * @warning Em produção, substituir por log seguro sem expor detalhes
     */
    die('Conexão com Banco de Dados Falhou: ' . $conexao->connect_error);
}

// AVISOS DE SEGURANÇA ADICIONAIS (para desenvolvimento):
// 1. Nunca deixe credenciais em arquivos versionados (usar .env)
// 2. Implemente conexão com SSL em produção
// 3. Considere usar PDO com prepared statements
