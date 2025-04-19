<?php

/**
 * Página de Login - Formulário de Autenticação
 * 
 * Exibe o formulário para coleta de credenciais de acesso
 * 
 * @package SistemaDeLogin
 * @subpackage Views
 * @version 2.0
 */
require_once('C:\xampp\htdocs\etec ds\agenda #6\app\utils\cabecalho.php');
?>

<!-- Container principal com classes atualizadas -->
<div class="login-container bg-white rounded-4 shadow-lg p-4 mx-auto" style="width: 32%; margin-top: 5%;">

    <!-- Seção do avatar/logo -->
    <div class="text-center mb-4">
        <?php
        $avatarUrl = "https://i.pinimg.com/736x/ac/e8/5b/ace85b5cb35dda3651f8f39c08c8f206.jpg";
        echo '<img src="' . htmlspecialchars($avatarUrl) . '" alt="Ícone de perfil" class="avatar-img rounded-circle">';
        ?>
    </div>

    <!-- Formulário de Login -->
    <form action="loginAction.php" method="post">
        <div class="mb-3">
            <!-- Campo Usuário -->
            <label class="form-label fw-bold">Usuário</label>
            <input type="text"
                class="form-control input-field mb-3"
                placeholder="Digite o usuário"
                name="txtUsuario"
                required>

            <!-- Campo Senha -->
            <label class="form-label fw-bold">Senha</label>
            <input type="password"
                class="form-control input-field mb-4"
                placeholder="Digite a senha"
                name="txtSenha"
                required>

            <!-- Botão de Submit com efeitos -->
            <button class="btn btn-primary btn-login w-100 py-2 btn-click-effect"
                type="submit">
                <i class="fas fa-sign-in-alt me-2"></i>Login
            </button>
        </div>
    </form>
</div>

<?php
require_once('C:\xampp\htdocs\etec ds\agenda #6\app\utils\rodape.php');
?>