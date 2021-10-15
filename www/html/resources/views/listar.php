<?php

$baseURL = $_SERVER['REMOTE_ADDR'];

include('header.php');

$url = 'http://'. $baseURL . ':8000/public/index.php/desenvolvedores/get';

$response = file_get_contents($url);
$response = json_decode($response, 1);
?>

<!DOCTYPE html>
<html lang="pt-br">

<body>

    <div class="container">
        <div class="row justify-content-md-center">
            <div id="alert" class="alert alert-success container col col-lg-5 text-center mt-3" role="alert" style="display:none;"></div>
        </div>
    </div>

    <div class="container">
        <h4 class="text-center mt-4 text-white">Lista de Desenvolvedores</h4>
        <table id="testeTable" class="table table-hover mt-5">

            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Hobby</th>
                    <th scope="col">Data Nascimento</th>
                    <th scope="col">Funções</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                    if(!empty($response)): 
                    foreach ($response as $retorno) :
                ?>
                    <tr>
                        <th scope="row"><?php echo $retorno['id']; ?></th>
                        <td><?php echo $retorno['nome']; ?></td>

                        <td>
                            <?php
                            if ($retorno['sexo'] === "M") {
                                echo "Masculino";
                            } else if ($retorno['sexo'] === "F") {
                                echo "Feminino";
                            }
                            ?>
                        </td>

                        <td><?php echo $retorno['idade']; ?></td>
                        <td><?php echo $retorno['hobby']; ?></td>
                        <td><?php echo date('d-m-Y', strtotime($retorno['dataNascimento'])); ?></td>

                        <td>
                            <!-- Button trigger modal ALTERAR -->
                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalAlterar" onclick="setIinfosDesenvolvedor(
                                                                                            <?php echo $retorno['id']; ?>,
                                                                                            '<?php echo $retorno['nome']; ?>',
                                                                                            '<?php echo $retorno['sexo']; ?>',
                                                                                            <?php echo $retorno['idade']; ?>,
                                                                                            '<?php echo $retorno['hobby']; ?>',
                                                                                            '<?php echo $retorno['dataNascimento']; ?>'
                                                                                         )">
                                Alterar
                            </button>

                            <!-- Button trigger modal EXCLUIR -->
                            <button type="button" id="btn-modal-excluir" class="btn btn-danger btn-sm" data-bs-toggle="modal" href="#modalExcluir" onclick="setIdExcluir(<?php echo $retorno['id']; ?>);">
                                Excluir
                            </button>
                        </td>
                    </tr>
                <?php 
                    endforeach; 
                    endif;
                ?>
            </tbody>

        </table>
    </div>

    <!-- Modal Excluir -->
    <div class="modal fade" id="modalExcluir" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Confirmar Exclusão</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Deseja realmente excluir o desenvolvedor?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="excluir('http://<?php echo $baseURL ?>/resources/views/listar.php');">Confirmar Exclusão
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Alterar -->
    <div class="modal fade" id="modalAlterar" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Alterar Desenvolvedor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form id="formAlterar" method="POST">
                        <div class="row">
                            <div class="col">
                                <label>Nome</label>
                                <input id="nomeInput" value="" type="text" name="nome" class="form-control" placeholder="Digite seu nome" required>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Sexo</label>
                                    <select id="sexoInput" placehol="Selecione" name="sexoInput" class="form-control" id="exampleFormControlSelect1">
                                        <option value="M">Masculino</option>
                                        <option value="F">Feminimo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label>Data Nascimento</label>
                                <input id="dtNascimentoInput" value="" type="date" name="dataNascimento" class="form-control" required>
                            </div>
                            <div class="col">
                                <label>Idade</label>
                                <input id="idadeInput" type="number" name="idade" class="form-control" placeholder="Digite sua idade" value="" readonly required>
                            </div>
                        </div>
                        <div>
                            <label class="mt-2">Hobby</label>
                            <input id="hobbyInput" value="" type="text" name="hobby" class="form-control" id="dtNascimento" placeholder="Jogar bola, mergulhar..." required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-warning" onclick="put('http://<?php echo $baseURL ?>/resources/views/listar.php');" data-bs-dismiss="modal">Confirmar Alteração</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

</body>

</html>