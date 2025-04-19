<?php require_once('utils/cabecalho.php') ?>
<?php require_once('login/verificarAcesso.php') ?>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <h1 class="display-4 fw-bold text-custom-primary mb-5">
                Minha Lista de Amigos
            </h1>

            <div class="row g-4 justify-content-center">
                <div class="col-md-5">
                    <a href="cadastrarAmigo/cadastro.php" class="text-decoration-none">
                        <div class="card bg-custom-primary text-white rounded-4 p-4 card-hover h-100">
                            <div class="card-body">
                                <i class="fas fa-user-friends mb-4" style="font-size: 5rem;"></i>
                                <h3 class="card-title fw-bold">Novo Amigo</h3>
                                <p class="card-text">Adicione alguém especial à sua lista</p>
                                <div class="mt-3">
                                    <span class="btn btn-light btn-sm rounded-pill px-3">
                                        <i class="fas fa-plus me-2"></i>Adicionar
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-5">
                    <a href="listarAmigos.php" class="text-decoration-none">
                        <div class="card bg-custom-secondary text-white rounded-4 p-4 card-hover h-100">
                            <div class="card-body">
                                <i class="fas fa-list-ul mb-4" style="font-size: 5rem;"></i>
                                <h3 class="card-title fw-bold">Ver Lista</h3>
                                <p class="card-text">Visualize todos os seus amigos</p>
                                <div class="mt-3">
                                    <span class="btn btn-light btn-sm rounded-pill px-3">
                                        <i class="fas fa-arrow-right me-2"></i>Acessar
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('utils/rodape.php') ?>