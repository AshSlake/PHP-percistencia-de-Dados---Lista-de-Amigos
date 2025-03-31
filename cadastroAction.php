<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmação - Lista de Amigos</title>
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

        .success-card {
            border-left: 5px solid #38ef7d;
        }

        .error-card {
            border-left: 5px solid #ff4b2b;
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

                $conexao = new mysqli($servername, $username, $password, $dbname);
                if ($conexao->connect_error) {
                    die("Connection failed: " . $conexao->connect_error);
                }

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
                            <a href="index.php" class="btn btn-custom btn-lg rounded-pill px-4">
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
                            <a href="index.php" class="btn btn-custom btn-lg rounded-pill px-4">
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

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>