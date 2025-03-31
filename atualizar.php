<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atualizar Amigo - Lista de Amigos</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .bg-custom-primary {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        }

        .text-custom-primary {
            color: #6a11cb;
        }

        .btn-custom {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            border: none;
            color: white;
        }

        .btn-custom:hover {
            opacity: 0.9;
            color: white;
        }

        .form-control:focus {
            border-color: #6a11cb;
            box-shadow: 0 0 0 0.25rem rgba(106, 17, 203, 0.25);
        }

        .edit-card {
            border-left: 5px solid #2575fc;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container py-5">
        <a href="index.php" class="btn btn-light rounded-circle p-3 position-absolute top-0 start-0 m-3">
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

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>