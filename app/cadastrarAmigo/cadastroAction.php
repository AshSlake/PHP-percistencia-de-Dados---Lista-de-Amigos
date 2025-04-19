<?php require_once('C:\xampp\htdocs\etec ds\agenda #6\app\utils\cabecalho.php') ?>
<?php require_once('C:\xampp\htdocs\etec ds\agenda #6\app\login\verificarAcesso.php') ?>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <?php
            require_once 'C:\xampp\htdocs\etec ds\agenda #6\app\db\conexaoBD.php';
            // Prevenção contra SQL Injection
            $nome = $conexao->real_escape_string($_POST['txtNome']);
            $apelido = $conexao->real_escape_string($_POST['txtApelido']);
            $email = $conexao->real_escape_string($_POST['txtEmail']);

            $sql = "INSERT INTO amigo (nome, apelido, email) VALUES ('$nome', '$apelido', '$email')";

            if ($conexao->query($sql) === TRUE) {
                echo '
                    <div class="card success-card shadow-sm rounded-4 border-0">
                        <div class="card-body text-center p-5">
                            <i class="fas fa-check-circle text-success mb-4" style="font-size: 4rem;"></i>
                            <h2 class="mb-3">Amigo cadastrado com sucesso!</h2>
                            <p class="text-muted mb-4">Os dados foram salvos no banco de dados.</p>
                            <a href="http://localhost/etec%20ds/agenda%20%236/app/index.php" class="btn btn-custom btn-lg rounded-pill px-4">
                                <i class="fas fa-arrow-left me-2"></i>Voltar à página inicial
                            </a>
                        </div>
                    </div>
                    ';
            } else {
                echo '
                    <div class="card error-card shadow-sm rounded-4 border-0">
                        <div class="card-body text-center p-5">
                            <i class="fas fa-exclamation-circle text-danger mb-4" style="font-size: 4rem;"></i>
                            <h2 class="mb-3">Erro ao cadastrar amigo!</h2>
                            <p class="text-muted mb-4">' . $conexao->error . '</p>
                            <a href="http://localhost/etec%20ds/agenda%20%236/app/index.php" class="btn btn-custom btn-lg rounded-pill px-4">
                                <i class="fas fa-arrow-left me-2"></i>Voltar à página inicial
                            </a>
                        </div>
                    </div>
                    ';
            }

            $conexao->close();
            ?>
        </div>
    </div>
</div>

<?php require_once('C:\xampp\htdocs\etec ds\agenda #6\app\utils\rodape.php') ?>