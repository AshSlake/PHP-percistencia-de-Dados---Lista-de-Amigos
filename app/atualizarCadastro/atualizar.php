<?php require_once('C:\xampp\htdocs\etec ds\agenda #6\app\utils\cabecalho.php') ?>
<?php require_once('C:\xampp\htdocs\etec ds\agenda #6\app\login\verificarAcesso.php') ?>
<div class="container py-5">
    <a href="http://localhost/etec%20ds/agenda%20%236/app/listarAmigos.php" class="btn btn-light rounded-circle p-3 position-absolute top-0 start-0 m-3">
        <i class="fas fa-arrow-left text-custom-primary" style="font-size: 1.5rem;"></i>
    </a>

    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card edit-card shadow-sm rounded-4 border-0">
                <div class="card-header bg-custom-primary text-white rounded-top-4 py-3">
                    <h2 class="h4 mb-0 text-center">
                        <i class="fas fa-user-edit me-2"></i>Atualizar Amigo - ID: <?php echo htmlspecialchars($_GET['id']); ?>
                    </h2>
                </div>
                <div class="card-body p-4">
                    <form action="atualizarAction.php" method="post">
                        <input type="hidden" name="txtID" value="<?php echo htmlspecialchars($_GET['id']); ?>">

                        <div class="mb-3">
                            <label for="txtNome" class="form-label fw-bold text-custom-primary">Nome</label>
                            <input type="text" id="txtNome" name="txtNome" class="form-control"
                                value="<?php echo htmlspecialchars($_GET['nome']); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="txtApelido" class="form-label fw-bold text-custom-primary">Apelido</label>
                            <input type="text" id="txtApelido" name="txtApelido" class="form-control"
                                value="<?php echo htmlspecialchars($_GET['apelido']); ?>">
                        </div>

                        <div class="mb-4">
                            <label for="txtEmail" class="form-label fw-bold text-custom-primary">Email</label>
                            <input type="email" id="txtEmail" name="txtEmail" class="form-control"
                                value="<?php echo htmlspecialchars($_GET['email']); ?>">
                        </div>

                        <div class="d-grid">
                            <button type="submit" name="btnAtualizar" class="btn btn-custom btn-lg rounded-pill py-3">
                                <i class="fas fa-sync-alt me-2"></i>Atualizar Dados
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('C:\xampp\htdocs\etec ds\agenda #6\app\utils\rodape.php') ?>