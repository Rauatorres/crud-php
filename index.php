<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <div id="divCliqueFora" onclick="fecharJanelas()"></div>
    <a href="#" id="botaoCadastrar" onclick="abrirJanela('formPrincipal', 'block')">Cadastrar Pessoa</a>
    <form action="#" method="post" id="formPrincipal">

        <a href="#" id="fecharCadastrar" onclick="fecharJanelas()"><span class="material-icons">arrow_forward</span></a>
        <label for="nome">Nome</label>
        <input type="text" name="" id="nome">
        <fieldset id="areaSexo">
            <legend><label for="">Sexo</label></legend>
            <label for="masc" class="radioLabel" id="teste" style="color: black">M
            <input type="radio" name="sexo" id="masc"></label>
            <label for="fem" class="radioLabel" style="color: black">F <input type="radio" name="sexo" id="fem"></label>
        </fieldset>
        <label for="dataNasc">Data de Nascimento</label>
        <input type="date" name="" id="dataNasc">
        <label for="tel">Telefone</label>
        <input type="tel" name="" id="tel">
        <label for="email">E-mail</label>
        <input type="email" name="" id="email">
        <input type="submit" value="Enviar">
    </form>
    <form id="formExcluir">
        <p>Deseja mesmo excluir pessoa?</p>
        <input type="button" name="" value="Cancelar" onclick="fecharJanelas()">
        <input type="button" id="excluirOkButton" name="" value="Ok" onclick="fecharJanelas()">
    </form>
    <table>
        <tr id="linhaAtributosTabela">
            <th>Id</th>
            <th>Nome</th>
            <th>Sexo</th>
            <th>Data de Nascimento</th>
            <th>Telefone</th>
            <th>Email</th>
            <th id="vazioTabela"></th>
        </tr>
        <tr class="linhaInstanciasTabela">
            <td>1</td>
            <td>Teste</td>
            <td>M</td>
            <td>1990-06-18</td>
            <td>124187362</td>
            <td>teste@teste.com</td>
            <td class="tabelaEditarExcluir"><a href="#" class="botaoEditar" onclick="abrirJanela('formPrincipal', 'block')">Editar</a><a href="#" onclick="abrirJanela('formExcluir', 'flex')" class="botaoExcluir">Excluir</a></td>
        </tr>
        <tr class="linhaInstanciasTabela">
            <td>1</td>
            <td>Teste</td>
            <td>M</td>
            <td>1990-06-18</td>
            <td>124187362</td>
            <td>teste@teste.com</td>
            <td class="tabelaEditarExcluir"><a href="#" class="botaoEditar" onclick="abrirJanela('formPrincipal', 'block')">Editar</a><a href="#" onclick="abrirJanela('formExcluir', 'flex')" class="botaoExcluir">Excluir</a></td>
        </tr>
        <tr class="linhaInstanciasTabela">
            <td>1</td>
            <td>Teste</td>
            <td>M</td>
            <td>1990-06-18</td>
            <td>124187362</td>
            <td>teste@teste.com</td>
            <td class="tabelaEditarExcluir"><a href="#" class="botaoEditar" onclick="abrirJanela('formPrincipal', 'block')">Editar</a><a href="#" onclick="abrirJanela('formExcluir', 'flex')" class="botaoExcluir">Excluir</a></td>
        </tr>
        <tr class="linhaInstanciasTabela">
            <td>1</td>
            <td>Teste</td>
            <td>M</td>
            <td>1990-06-18</td>
            <td>124187362</td>
            <td>teste@teste.com</td>
            <td class="tabelaEditarExcluir"><a href="#" class="botaoEditar" onclick="abrirJanela('formPrincipal', 'block')">Editar</a><a href="#" onclick="abrirJanela('formExcluir', 'flex')" class="botaoExcluir">Excluir</a></td>
        </tr>
        <tr class="linhaInstanciasTabela">
            <td>1</td>
            <td>Teste</td>
            <td>M</td>
            <td>1990-06-18</td>
            <td>124187362</td>
            <td>teste@teste.com</td>
            <td class="tabelaEditarExcluir"><a href="#" class="botaoEditar" onclick="abrirJanela('formPrincipal', 'block')">Editar</a><a href="#" onclick="abrirJanela('formExcluir', 'flex')" class="botaoExcluir">Excluir</a></td>
        </tr>
        <script type="text/javascript">
            var cor = "gainsboro"
            var linha = document.getElementsByClassName('linhaInstanciasTabela')
            for(let numLinha = 0; numLinha < linha.length; numLinha++){
                linha[numLinha].style.backgroundColor = cor
                if (cor == "gainsboro") {
                    cor = "#A4A4A4"
                }else{
                    cor = "gainsboro"
                }
            }
        </script>
    </table>
</body>
</html>