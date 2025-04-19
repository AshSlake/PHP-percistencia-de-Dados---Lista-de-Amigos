<?php

/**
 * Página de Autenticação de Usuário
 * 
 * Processa o formulário de login e autentica usuários no sistema
 */
require_once('C:\xampp\htdocs\etec ds\agenda #6\app\utils\cabecalho.php'); // Inclui o cabeçalho HTML do sistema
?>

<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
    <?php
    // ==============================================
    // TRATAMENTO DOS DADOS DO FORMULÁRIO
    // ==============================================
    session_start();
    /** @var string $nome Nome de usuário digitado no formulário */
    $nome = $_POST['txtUsuario'] ?? ''; // Operador de coalescência para evitar undefined

    /** @var string $senha Senha digitada no formulário (texto puro) */
    $senha = $_POST['txtSenha'] ?? '';

    // ==============================================
    // CONEXÃO COM O BANCO DE DADOS
    // ==============================================
    require_once 'C:\xampp\htdocs\etec ds\agenda #6\app\db\conexaoBD.php'; // Inclui o arquivo de conexão

    /**
     * @var string $sql Consulta SQL (VULNERÁVEL a SQL Injection)
     * @security-risk Deve ser substituído por prepared statements
     */
    $sql = "SELECT * FROM usuario WHERE nome = '" . $conexao->real_escape_string($nome) . "';";

    /** @var mysqli_result $resultado Resultado da consulta SQL */
    $resultado = $conexao->query($sql);

    /** @var array|null $linha Dados do usuário retornados do banco */
    $linha = mysqli_fetch_array($resultado);

    // ==============================================
    // VALIDAÇÃO DO LOGIN
    // ==============================================
    if ($linha && !empty($linha) && $senha == $linha['senha']) {
        // Autenticação bem-sucedida
        /** 
         * @var string $_SESSION['logado'] Armazena o nome do usuário na sessão
         * @todo Recomendado armazenar ID do usuário ao invés do nome
         */
        $_SESSION['logado'] = $nome;

        /**
         * @var string redirecionar para a pagina inicial*/
        header('location:http://localhost/etec%20ds/agenda%20%236/app/index.php');
    } else {
        // Falha na autenticação
        echo '
        <a href="http://localhost/etec%20ds/agenda%20%236/app/login/login.php">
            <h1 class="w3-button w3-teal">Login inválido!</h1>
            <h2 class="w3-button w3-teal">Verifique suas credenciais</h2>
        </a>
        ';
    }

    // Fecha a conexão com o banco de dados
    $conexao->close();
    ?>
</div>

<?php
/**
 * Inclui o rodapé padrão do sistema
 */
require_once('C:\xampp\htdocs\etec ds\agenda #6\app\utils\rodape.php');
?>