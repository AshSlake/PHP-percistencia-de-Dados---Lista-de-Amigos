<?php

/**
 * Página de Login - Formulário de Autenticação
 * 
 * Exibe o formulário para coleta de credenciais de acesso
 * 
 * @package SistemaDeLogin
 * @subpackage Views
 * @version 1.0
 */
require_once('C:\xampp\htdocs\etec ds\agenda #6\app\utils\cabecalho.php'); // Inclui o cabeçalho padrão do sistema
?>

<!-- Container index do formulário -->
<div class="w3-container w3-round-xxlarge w3-display-middle w3-card-4 w3-third">

    <!-- Seção do avatar/logo -->
    <div class="w3-center">
        <br>
        <?php
        /**
         * Exibe o avatar do usuário
         * @var string $avatarUrl URL da imagem de perfil
         * @todo Substituir por imagem local (melhor performance e segurança)
         */
        $avatarUrl = "https://e7.pngegg.com/pngimages/122/453/png-clipart-computer-icons-user-profile-avatar-female-profile-heroes-head.png";
        echo '<img src="' . htmlspecialchars($avatarUrl) . '" alt="Ícone de perfil" style="width:40%" class="w3-circle w3-margin-top">';
        ?>
    </div>

    <!-- Formulário de Login -->
    <form action="loginAction.php" method="post" class="w3-container">
        <div class="w3-section">

            <!-- Campo Usuário -->
            <label style="font-weight:bold;">Usuário</label>
            <input type="text"
                class="w3-input w3-border w3-margin-bottom"
                placeholder="Digite o usuário"
                name="txtUsuario"
                required>
            <!-- Campo Senha -->
            <label style="font-weight:bold;">Senha</label>
            <input type="password"
                class="w3-input w3-border w3-margin-bottom"
                placeholder="Digite a senha"
                name="txtSenha"
                required>

            <!-- Botão de Submit -->
            <button class="w3-button w3-block w3-teal w3-section w3-padding"
                type="submit">Login</button>
        </div>
    </form>
    <br>
</div>

<?php
/**
 * Inclui o rodapé padrão do sistema
 */
require_once('C:\xampp\htdocs\etec ds\agenda #6\app\utils\rodape.php');
?>