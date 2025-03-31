<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmação de Exclusão - Lista de Amigos</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .bg-custom-danger {
            background: linear-gradient(135deg, #ff4b2b 0%, #ff416c 100%);
        }

        .bg-custom-success {
            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
        }

        .text-custom-danger {
            color: #ff4b2b;
        }

        .confirmation-card {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            border-radius: 1rem;
        }

        .btn-custom {
            padding: 0.75rem 1.5rem;
            font-size: 1.1rem;
            border-radius: 50rem;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "34251141";
                $dbname = "pwii";

                try {
                    $conexao = new mysqli($servername, $username, $password, $dbname);

                    if ($conexao->connect_error) {
                        throw new Exception("Connection failed: " . $conexao->connect_error);
                    }

                    // Prevenção contra SQL Injection
                    $id = $conexao->real_escape_string($_POST['txtID']);
                    $sql = "DELETE FROM amigo WHERE idamigo = '$id'";

                    if ($conexao->query($sql)) {
                        echo '
                        <div class="card confirmation-card border-0">
                            <div class="card-header bg-custom-success text-white rounded-top-4 py-3">
                                <h2 class="h4 mb-0 text-center">
                                    <i class="fas fa-check-circle me-2"></i>Exclusão Confirmada
                                </h2>
                            </div>
                            <div class="card-body text-center p-5">
                                <i class="fas fa-check-circle text-success mb-4" style="font-size: 4rem;"></i>
                                <h3 class="mb-3">Amigo excluído com sucesso!</h3>
                                <p class="text-muted mb-4">O registro foi removido permanentemente do banco de dados.</p>
                                <a href="listar.php" class="btn btn-success btn-custom">
                                    <i class="fas fa-arrow-left me-2"></i>Voltar para a lista
                                </a>
                            </div>
                        </div>
                        ';
                    } else {
                        throw new Exception("Erro ao excluir: " . $conexao->error);
                    }

                    $conexao->close();
                } catch (Exception $e) {
                    echo '
                    <div class="card confirmation-card border-0">
                        <div class="card-header bg-custom-danger text-white rounded-top-4 py-3">
                            <h2 class="h4 mb-0 text-center">
                                <i class="fas fa-exclamation-triangle me-2"></i>Erro na Exclusão
                            </h2>
                        </div>
                        <div class="card-body text-center p-5">
                            <i class="fas fa-times-circle text-danger mb-4" style="font-size: 4rem;"></i>
                            <h3 class="mb-3">Ocorreu um erro!</h3>
                            <p class="text-muted mb-4">' . htmlspecialchars($e->getMessage()) . '</p>
                            <a href="listar.php" class="btn btn-danger btn-custom">
                                <i class="fas fa-arrow-left me-2"></i>Voltar para a lista
                            </a>
                        </div>
                    </div>
                    ';
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>