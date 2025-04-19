<?php

/**
 * Página de Acesso Negado
 * 
 * Exibe uma mensagem estilizada quando o usuário tenta acessar
 * áreas restritas sem autenticação.
 * 
 * @package SistemaDelogin
 * @subpackage Views
 * @version 1.0
 */
require_once('C:\xampp\htdocs\etec ds\agenda #6\app\utils\cabecalho.php'); // cabeçalho padrão do sistema
?>

<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
    <?php
    /**
     * Bloco de mensagem de acesso negado
     * 
     * Exibe:
     * - Título "Acesso Negado!"
     * - Subtítulo com instrução para login
     * - Link clicável que redireciona para a página inicial
     * 
     * @uses CSS Framework W3.CSS para estilização
     * @link login.php Página de redirecionamento
     */
    echo '
    <a href="http://localhost/etec%20ds/agenda%20%236/app/login/login.php">
       <h1 class="w3-button w3-teal">Acesso Negado!</h1>
       <br>
       <h2 class="w3-button w3-teal">É Necessário a Realização do login</h2>
    </a>';
    ?>
</div>

<?php
/**
 * Rodapé padrão do sistema
 * 
 * @uses utils\rodape.php Contém fechamento de tags HTML e scripts essenciais
 */
require_once('C:\xampp\htdocs\etec ds\agenda #6\app\utils\rodape.php');
?>