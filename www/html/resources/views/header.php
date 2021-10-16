<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Gazin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="../../public/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="header" id="pagina-header">
        <div class="stars"></div>
        <div class="container mt-5 border border-2 rounded-1">
            <div class="row mt-3 mb-3">
                <a href="javascript:" onclick="carregarPaginaRefresh('../../resources/views/index.php')" class="col text-center fs-5 text-white">Início</a>

                <a href="javascript:" onclick="carregarPaginaRefresh('../../resources/views/cadastro.php')" class="col text-center fs-5 text-white">Cadastrar</a>

                <a href="javascript:" onclick="carregarPaginaRefresh('../../resources/views/listar.php')" class="col text-center fs-5 text-white">Listar/Alterar</a>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
        <script src="../../public/js/functions.js"></script>

</body>


</html>