const url = "http://localhost:8000/public/index.php/desenvolvedores/";
let idExcluir = 0;
let idAlterar = 0;


//POST
jQuery(document).ready(function () {
    jQuery('#formCadastro').submit(function () {
        var dados = jQuery(this).serialize();
        jQuery.ajax({
            type: "POST",
            url: url + "post",
            data: dados,
            success: function () {
                $('#formCadastro')[0].reset();
                getAlert("Desenvolvedor(a) cadastrado(a) com Sucesso!", "alert-success");
            },
            error: function (request) {
                setTimeout(function () {
                    getAlert("Erro ao cadastrar desenvolvedor(a): " + request.responseText, "alert-danger");
                }, 210);
            }
        });
        return false;
    });
});

//PUT
function put(arquivo) {
    var nome = document.querySelector("#nomeInput").value;
    var sexo = document.querySelector("#sexoInput").value;
    var idade = document.querySelector("#idadeInput").value;
    var hobby = document.querySelector("#hobbyInput").value;
    var dtNascimento = document.querySelector("#dtNascimentoInput").value;

    jQuery.ajax({
        type: "PUT",
        url: url + "put/" + idAlterar,
        data: {
            nome: nome,
            sexo: sexo,
            idade: idade,
            hobby: hobby,
            dataNascimento: dtNascimento
        },
        success: function () {
            carregarPaginaRefresh(arquivo);
            setTimeout(function () {
                getAlert("Desenvolvedor(a) alterado(a) com sucesso!", "alert-success");
            }, 210);
        },
        error: function (request) {
            setTimeout(function () {
                getAlert("Erro ao alterar desenvolvedor(a): " + request.responseText, "alert-danger");
            }, 210);
        }
    });
}

//DELETE
function excluir(arquivo) {
    $.ajax({
        type: 'DELETE',
        url: url + "delete/" + idExcluir,
        success: function () {
            carregarPaginaRefresh(arquivo);
            setTimeout(function () {
                getAlert("Desenvolvedor(a) excluído(a) com sucesso!", "alert-success");
            }, 210);
        },
        error: function (request) {
            setTimeout(function () {
                getAlert("Erro ao excluir desenvolvedor(a): " + request.responseText, "alert-danger");
            }, 210);
        }
    })
}

//Setar informações do desenvolvedor no modal
function setIinfosDesenvolvedor(id, nome, sexo, idade, hobby, dataNascimento) {
    idAlterar = id;

    document.getElementById('nomeInput').value = nome.toString();
    document.getElementById('idadeInput').value = idade;
    document.getElementById('dtNascimentoInput').value = dataNascimento.toString();
    document.getElementById('hobbyInput').value = hobby.toString();

    var opcao = document.querySelector('#sexoInput');
    if (sexo === "M") {
        opcao.selectedIndex = 0;
    } else if (sexo === "F") {
        opcao.selectedIndex = 1;
    }
}

function carregarPaginaRefresh(arquivo) {
    if (arquivo) {
        $.ajax({
            type: 'POST',
            url: arquivo,
            success: function (data) {
                $("#pagina-header").html(data);
            }
        })
    }
}

function setIdExcluir(id) {
    idExcluir = id;
}

function getAlert(texto, tipoAlert) {
    document.querySelector("#alert").style.display = "block";
    document.querySelector("#alert").innerHTML = texto;
    document.querySelector("#alert").className = "alert " + tipoAlert + " container col col-lg-5 text-center mt-3";
    setTimeout(function () {
        document.querySelector("#alert").style.display = "none";
    }, 2000);
}

//Calcular idade cadastro
jQuery(document).ready(function () {
    jQuery('#dataNascimento').on('keyup focusout', function () {
        var dataSeparada = document.getElementById('dataNascimento').value.split("-");
        document.getElementById('idade').value = calcularIdade(dataSeparada[2], dataSeparada[1], dataSeparada[0]);
    });
});

//Calcular idade alteração
jQuery(document).ready(function () {
    jQuery('#dtNascimentoInput').on('keyup focusout', function () {
        var dataSeparada = document.getElementById('dtNascimentoInput').value.split("-");
        document.getElementById('idadeInput').value = calcularIdade(dataSeparada[2], dataSeparada[1], dataSeparada[0]);
    });
});

function calcularIdade(dia, mes, ano) {
    var diaAtual = new Date().getDate();
    var mesAtual = new Date().getMonth() + 1;
    var anoAtual = new Date().getFullYear();

    var idade = anoAtual - ano;

    if (mesAtual <= mes && diaAtual < dia) {
        idade--;
    }
    return idade;
}