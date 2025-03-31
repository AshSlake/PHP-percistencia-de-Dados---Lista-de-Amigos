<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmar Exclusão - Lista de Amigos</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .bg-custom-danger {
            background: linear-gradient(135deg, #ff4b2b 0%, #ff416c 100%);
        }

        .text-custom-danger {
            color: #ff4b2b;
        }

        .btn-custom-danger {
            background: linear-gradient(135deg, #ff4b2b 0%, #ff416c 100%);
            border: none;
            color: white;
        }

        .btn-custom-danger:hover {
            opacity: 0.9;
            color: white;
        }

        .bg-custom-primary {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        }

        .confirmation-card {
            border-left: 5px solid #ff4b2b;
            box-shadow: 0 4px 20px rgba(255, 75, 43, 0.15);
        }
    </style>
</head>

<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <a href="index.php" class="btn btn-light rounded-pill px-4 py-3 mb-4 position-absolute top-0 start-0 m-3">
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
                                <a href="index.php" class="btn btn-outline-secondary btn-lg rounded-pill px-4">
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

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>