<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <a href="#" id="botaoCadastrar" onclick="cadastrar()">Cadastrar Pessoa</a>
    <form action="#" method="post" id="formPrincipal">
        <label for="nome">Nome</label>
        <input type="text" name="" id="nome">
        <label for="">Sexo</label>
        <div id="areaSexo">
            <label for="masc">M</label>
            <input type="radio" name="sexo" id="masc">
            <label for="fem">F</label>
            <input type="radio" name="sexo" id="fem">
        </div>
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
        <input type="button" name="" value="Cancelar" onclick="fecharExcluir()">
        <input type="button" id="excluirOkButton" name="" value="Ok" onclick="fecharExcluir()">
    </form>
    <table>
        <tr id="linhaAtributosTabela">
            <td>Id</td>
            <td>Nome</td>
            <td>Sexo</td>
            <td>Data de Nascimento</td>
            <td>Telefone</td>
            <td>Email</td>
            <td id="vazioTabela"></td>
        </tr>
        <tr class="linhaInstanciasTabela">
            <td>1</td>
            <td>Teste</td>
            <td>M</td>
            <td>1990-06-18</td>
            <td>124187362</td>
            <td>teste@teste.com</td>
            <td class="tabelaEditarExcluir"><a href="#" id="botaoEditar" onclick="cadastrar()">Editar</a><a href="#" onclick="excluir()">Excluir</a></td>
        </tr>
    </table>
</body>
</html>