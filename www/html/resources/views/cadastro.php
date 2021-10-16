<?php include('header.php');

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
        <h4 class="text-center mt-4 text-white">Cadastrar Desenvolvedor</h4>

        <form id="formCadastro" method="post">
            <!-- Nome -->
            <div class="row mt-5 ">
                <div class="col">
                    <label>Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite seu nome" required>
                </div>
            </div>

            <!-- Sexo, dt nascimento e idade -->
            <div class="row mt-2">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Sexo</label>
                        <select name="sexo" class="form-control" id="exampleFormControlSelect1" required>
                            <option value="" disabled selected>Selecione..</option>
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <label>Data Nascimento</label>
                    <input type="date" id="dataNascimento" name="dataNascimento" class="form-control" required>
                </div>
                <div class="col">
                    <label>Idade</label>
                    <input type="number" id="idade" name="idade" class="form-control" value="" readonly required>
                </div>
            </div>

            <!-- Hobby -->
            <div>
                <label class="mt-2">Hobby</label>
                <input type="text" name="hobby" class="form-control" id="dtNascimento" placeholder="Jogar bola, mergulhar..." required>
            </div>

            <div class="gap-2 mt-4">
                <button id="btnCadastrar" type="submit" class="btn btn-success">Cadastrar</button>
            </div>
        </form>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

</body>

</html>