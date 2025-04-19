<?php

/**
 * Verifica e inicia a sessão PHP caso não esteja ativa
 * 
 * Esta verificação previne erros ao tentar acessar $_SESSION antes de session_start()
 */
if (!isset($_SESSION)) {
    session_start();
}

/**
 * Verifica se o usuário está autenticado
 * 
 * Redireciona para a página de acesso negado caso:
 * - A chave 'logado' não exista na sessão OU
 * - Seu valor não seja verdadeiro
 * 
 * @uses $_SESSION['logado'] Deve ser true quando o usuário estiver autenticado
 * @location AcessoNegado.php Página para redirecionamento quando não autorizado
 */
if (!isset($_SESSION['logado']) || $_SESSION['logado'] != true) {
    header('location:http://localhost/etec%20ds/agenda%20%236/app/login/login.php');
    exit;
}
