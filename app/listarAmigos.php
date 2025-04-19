<?php require_once('utils/cabecalho.php') ?>
<?php require_once('login/verificarAcesso.php') ?>
<div class="container py-5">
    <a href="http://localhost/etec%20ds/agenda%20%236/app/index.php" class="btn btn-light rounded-circle p-3 position-absolute top-0 start-0 m-3">
        <i class="fas fa-arrow-left text-custom-primary" style="font-size: 1.5rem;"></i>
    </a>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card border-0 shadow-sm rounded-4 mb-4">
                <div class="card-header bg-custom-primary text-white rounded-top-4 py-3">
                    <h2 class="h4 mb-0 text-center">
                        <i class="fas fa-address-book me-2"></i>Lista de Amigos
                    </h2>
                </div>
                <div class="card-body p-0">
                    <?php
                    require_once 'C:\xampp\htdocs\etec ds\agenda #6\app\db\conexaoBD.php';

                    try {


                        echo '
                            <div class="table-responsive">
                                <table class="table table-hover align-middle mb-0">
                                    <thead class="bg-light">
                                        <tr>
                                            <th class="fw-bold text-custom-primary">Código</th>
                                            <th class="fw-bold text-custom-primary">Nome</th>
                                            <th class="fw-bold text-custom-primary">Apelido</th>
                                            <th class="fw-bold text-custom-primary">Email</th>
                                            <th class="fw-bold text-custom-primary text-center">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>';

                        $sql = "SELECT * FROM amigo";
                        $resultado = $conexao->query($sql);

                        if ($resultado && $resultado->num_rows > 0) {
                            foreach ($resultado as $linha) {
                                echo '<tr>';
                                echo '<td class="fw-semibold">' . $linha['idamigo'] . '</td>';
                                echo '<td>' . $linha['nome'] . '</td>';
                                echo '<td>' . ($linha['apelido'] ? $linha['apelido'] : '<span class="text-muted">Nenhum</span>') . '</td>';
                                echo '<td>' . $linha['email'] . '</td>';
                                echo '<td class="text-center">
                                            <div class="d-flex justify-content-center gap-3">
                                                <a href="excluirAmigo/excluir.php?id=' . $linha['idamigo'] . '" class="action-btn text-danger" title="Excluir">
                                                    <i class="fas fa-trash-alt fa-lg btn-click-effect"></i>
                                                </a>
                                               <a href="atualizarCadastro/atualizar.php?id=' . $linha['idamigo'] . '&nome=' . urlencode($linha['nome']) . '&apelido=' . urlencode($linha['apelido']) . '&email=' . urlencode($linha['email']) . '" class="action-btn text-custom-primary" title="Editar">
                                                    <i class="fas fa-edit fa-lg btn-click-effect"></i>
                                                </a>
                                            </div>
                                          </td>';
                                echo '</tr>';
                            }
                        } else {
                            echo '<tr><td colspan="5" class="text-center py-4 text-muted">Nenhum amigo cadastrado ainda</td></tr>';
                        }

                        echo '</tbody></table></div>';

                        $conexao->close();
                    } catch (Exception $e) {
                        echo '<div class="alert alert-danger m-3">Erro: ' . $e->getMessage() . '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('utils/rodape.php') ?>