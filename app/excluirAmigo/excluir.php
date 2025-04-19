<?php require_once('C:\xampp\htdocs\etec ds\agenda #6\app\utils\cabecalho.php') ?>
<?php require_once('C:\xampp\htdocs\etec ds\agenda #6\app\login\verificarAcesso.php') ?>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <a href="http://localhost/etec%20ds/agenda%20%236/app/listarAmigos.php" class="btn btn-light rounded-pill px-4 py-3 mb-4 position-absolute top-0 start-0 m-3">
                <i class="fas fa-arrow-left me-2"></i>Cancelar
            </a>

            <div class="card confirmation-card border-0 rounded-4">
                <div class="card-header bg-custom-danger text-white rounded-top-4 py-3">
                    <h2 class="h4 mb-0 text-center">
                        <i class="fas fa-exclamation-triangle me-2"></i>Confirmar Exclusão
                    </h2>
                </div>
                <div class="card-body p-4 text-center">
                    <i class="fas fa-trash-alt text-custom-danger mb-4" style="font-size: 4rem;"></i>
                    <h3 class="mb-3">ID: <?php echo htmlspecialchars($_GET['id']); ?></h3>
                    <p class="text-muted mb-4">Você está prestes a excluir este amigo permanentemente. Esta ação não pode ser desfeita.</p>

                    <form action="excluirAction.php" method="post">
                        <input type="hidden" name="txtID" value="<?php echo htmlspecialchars($_GET['id']); ?>">

                        <div class="d-grid gap-3 d-md-flex justify-content-md-center">
                            <a href="http://localhost/etec%20ds/agenda%20%236/app/listarAmigos.php" class="btn btn-outline-secondary btn-lg rounded-pill px-4">
                                <i class="fas fa-times me-2"></i>Cancelar
                            </a>
                            <button type="submit" class="btn btn-custom-danger btn-lg rounded-pill px-4">
                                <i class="fas fa-check me-2"></i>Confirmar Exclusão
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('C:\xampp\htdocs\etec ds\agenda #6\app\utils\rodape.php') ?>