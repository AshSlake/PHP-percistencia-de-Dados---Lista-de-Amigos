<?php

/**
 * Este script exibe uma lista de alunos concluintes e calcula a média final de suas notas.
 * 
 * Ele se conecta a um banco de dados para recuperar os dados dos alunos, calcula a média de quatro notas 
 * para cada aluno e exibe os resultados em formato de tabela. Apenas alunos com média final igual ou superior a 7 são exibidos.
 * 
 * Dependências:
 * - utils/cabecalho.php: Contém o layout do cabeçalho da página.
 * - db/conexaoBD.php: Estabelece a conexão com o banco de dados.
 * - utils/rodape.php: Contém o layout do rodapé da página.
 * 
 * Colunas da Tabela:
 * - ID: O identificador único do aluno.
 * - Nome: O nome do aluno.
 * - nota1, nota2, nota3, nota4: As quatro notas do aluno.
 * - Média Final: A média calculada das quatro notas.
 * 
 * Tratamento de Erros:
 * - Caso ocorra um erro durante a consulta ao banco de dados, uma mensagem de alerta é exibida com os detalhes do erro.
 * 
 * Observações:
 * - Se nenhum aluno for encontrado no banco de dados, uma mensagem é exibida indicando que não há alunos cadastrados.
 * - A média final é formatada com duas casas decimais, utilizando uma vírgula como separador decimal.
 */
?>
<?php require_once('utils/cabecalho.php') ?>
<?php require_once('db/conexaoBD.php') ?>
<div class="container">

    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">

            <h1 class="display-3 fw-bold bg-dark text-white mb-5">Alunos Concluintes</h1>
        </div>


        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">nota1</th>
                    <th scope="col">nota2</th>
                    <th scope="col">nota3</th>
                    <th scope="col">nota4</th>
                    <th scope="col">Media Final</th>
                </tr>
            </thead>
            <tbody>
                <?php
                try {
                    $sql = "SELECT * FROM alunoconcluente";
                    $resultado = $conexao->query($sql);
                    $conexao->close();
                } catch (Exception $e) {
                    echo "<div class='alert alert-danger m-3'>Erro: {$e->getMessage()}</div>";
                }
                foreach ($resultado as $linha) {
                    $media = ($linha['nota1'] + $linha['nota2'] + $linha['nota3'] + $linha['nota4']) / 4;
                    if ($media >= 7) {
                        $alunos[] = [
                            'id' => $linha['idAlunoConcluente'],
                            'nome' => $linha['nome'],
                            'nota1' => $linha['nota1'],
                            'nota2' => $linha['nota2'],
                            'nota3' => $linha['nota3'],
                            'nota4' => $linha['nota4'],
                            'media' => number_format($media, 2, ',', '.')
                        ];
                    }
                }
                if (empty($alunos)) {
                    echo "<tr><td colspan='4' class='text-center'>Nenhum aluno cadastrado ainda</td></tr>";
                }

                foreach ($alunos as $aluno) {
                    echo "<tr>";
                    echo "<th scope='row'>{$aluno['id']}</th>";
                    echo "<td>{$aluno['nome']}</td>";
                    echo "<td>{$aluno['nota1']}</td>";
                    echo "<td>{$aluno['nota2']}</td>";
                    echo "<td>{$aluno['nota3']}</td>";
                    echo "<td>{$aluno['nota4']}</td>";
                    echo "<td>{$aluno['media']}</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>


<?php require_once('utils/rodape.php') ?>