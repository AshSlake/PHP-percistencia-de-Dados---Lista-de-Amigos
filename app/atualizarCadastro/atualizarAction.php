<?php require_once('C:\xampp\htdocs\etec ds\agenda #6\app\utils\cabecalho.php') ?>
<?php require_once('C:\xampp\htdocs\etec ds\agenda #6\app\login\verificarAcesso.php') ?>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <?php
            require_once 'C:\xampp\htdocs\etec ds\agenda #6\app\db\conexaoBD.php';

            try {
                // Prevenção contra SQL Injection
                $id = $conexao->real_escape_string($_POST['txtID']);
                $nome = $conexao->real_escape_string($_POST['txtNome']);
                $apelido = $conexao->real_escape_string($_POST['txtApelido']);
                $email = $conexao->real_escape_string($_POST['txtEmail']);

                $sql = "UPDATE amigo SET nome = '$nome', apelido = '$apelido', email = '$email' 
                            WHERE idamigo = '$id'";

                if ($conexao->query($sql)) {
                    echo '
                        <div class="card confirmation-card border-0">
                            <div class="card-header bg-custom-success text-white rounded-top-4 py-3">
                                <h2 class="h4 mb-0 text-center">
                                    <i class="fas fa-check-circle me-2"></i>Atualização Concluída
                                </h2>
                            </div>
                            <div class="card-body text-center p-5">
                                <i class="fas fa-check-circle text-success mb-4" style="font-size: 4rem;"></i>
                                <h3 class="mb-3">Dados atualizados com sucesso!</h3>
                                <p class="text-muted mb-4">As informações do amigo foram atualizadas no banco de dados.</p>
                                <a href="http://localhost/etec%20ds/agenda%20%236/app/listarAmigos.php" class="btn btn-success btn-custom-actualizing">
                                    <i class="fas fa-list me-2"></i>Ver Lista de Amigos
                                </a>
                            </div>
                        </div>
                        ';
                } else {
                    throw new Exception("Erro ao atualizar: " . $conexao->error);
                }

                $conexao->close();
            } catch (Exception $e) {
                echo '
                    <div class="card confirmation-card border-0">
                        <div class="card-header bg-custom-danger text-white rounded-top-4 py-3">
                            <h2 class="h4 mb-0 text-center">
                                <i class="fas fa-exclamation-triangle me-2"></i>Erro na Atualização
                            </h2>
                        </div>
                        <div class="card-body text-center p-5">
                            <i class="fas fa-times-circle text-danger mb-4" style="font-size: 4rem;"></i>
                            <h3 class="mb-3">Ocorreu um erro!</h3>
                            <p class="text-muted mb-4">' . htmlspecialchars($e->getMessage()) . '</p>
                            <div class="d-flex justify-content-center gap-3">
                                <a href="http://localhost/etec%20ds/agenda%20%236/app/listarAmigos.php" class="btn btn-danger btn-custom">
                                    <i class="fas fa-arrow-left me-2"></i>Voltar
                                </a>
                                <a href="atualizar.php?id=' . htmlspecialchars($_POST['txtID']) .
                    '&nome=' . htmlspecialchars($_POST['txtNome']) .
                    '&apelido=' . htmlspecialchars($_POST['txtApelido']) .
                    '&email=' . htmlspecialchars($_POST['txtEmail']) . '" 
                                   class="btn btn-primary btn-custom">
                                    <i class="fas fa-redo me-2"></i>Tentar Novamente
                                </a>
                            </div>
                        </div>
                    </div>
                    ';
            }
            ?>
        </div>
    </div>
</div>
<?php require_once('C:\xampp\htdocs\etec ds\agenda #6\app\utils\rodape.php') ?>