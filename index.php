<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto - Lista de Amigos</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .bg-custom-primary {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        }

        .bg-custom-secondary {
            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
        }

        .text-custom-primary {
            color: #6a11cb;
        }

        .btn-custom {
            border: none;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
        }

        body {
            background-color: #f8f9fa;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h1 class="display-4 fw-bold text-custom-primary mb-5">
                    Minha Lista de Amigos
                </h1>

                <div class="row g-4 justify-content-center">
                    <div class="col-md-5">
                        <a href="cadastro.php" class="text-decoration-none">
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
                        <a href="listar.php" class="text-decoration-none">
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

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>