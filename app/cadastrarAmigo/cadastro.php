<?php require_once('C:\xampp\htdocs\etec ds\agenda #6\app\utils\cabecalho.php') ?>
<?php require_once('C:\xampp\htdocs\etec ds\agenda #6\app\login\verificarAcesso.php') ?>
<div class="container py-5">
    <a href="http://localhost/etec%20ds/agenda%20%236/app/index.php" class="btn btn-light rounded-circle p-3 position-absolute top-0 start-0 m-3">
        <i class="fas fa-arrow-left text-custom-primary" style="font-size: 1.5rem;"></i>
    </a>

    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-header bg-custom-primary text-white rounded-top-4 py-3">
                    <h2 class="h4 mb-0 text-center">
                        <i class="fas fa-user-plus me-2"></i>Cadastro de Amigos
                    </h2>
                </div>
                <div class="card-body p-4">
                    <form action="http://localhost/etec%20ds/agenda%20%236/app/cadastrarAmigo/cadastroAction.php" method="post">
                        <div class="mb-3">
                            <label for="txtID" class="form-label fw-bold text-custom-primary">Código</label>
                            <input type="text" id="txtID" name="txtID" class="form-control bg-light" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="txtNome" class="form-label fw-bold text-custom-primary">Nome</label>
                            <input type="text" id="txtNome" name="txtNome" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="txtApelido" class="form-label fw-bold text-custom-primary">Apelido</label>
                            <input type="text" id="txtApelido" name="txtApelido" class="form-control">
                        </div>

                        <div class="mb-4">
                            <label for="txtEmail" class="form-label fw-bold text-custom-primary">Email</label>
                            <input type="email" id="txtEmail" name="txtEmail" class="form-control">
                        </div>

                        <div class="d-grid">
                            <button type="submit" name="btnAdicionar" class="btn btn-custom btn-lg rounded-pill py-3">
                                <i class="fas fa-user-plus me-2"></i>Adicionar Amigo
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('C:\xampp\htdocs\etec ds\agenda #6\app\utils\rodape.php') ?>