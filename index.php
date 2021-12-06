<?php
    include "database.php";
    include "pessoa.php";
    $database = new Database();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>
    <div id="divCliqueFora" onclick="fecharJanelas()"></div>
    <a href="#" id="botaoCadastrar" onclick="cadastrar()">Cadastrar Pessoa</a>
    <form action="request.php" method="post" id="form">
        <a href="#" id="fecharCadastrar" onclick="fecharJanelas()"><span class="material-icons">arrow_forward</span></a>
        <input type="hidden" name="action" id="action" value="cadastrar">
        <input type="hidden" name="idpessoa" id="idpessoa" value="">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        <fieldset id="areaSexo">
            <legend><label for="">Sexo</label></legend>
            <label for="masc" class="radioLabel" id="teste" style="color: black">M
            <input type="radio" name="sexo" id="masc" value="m"></label>
            <label for="fem" class="radioLabel" style="color: black">F <input type="radio" name="sexo" id="fem" value="f"></label>
        </fieldset>
        <label for="dataNasc">Data de Nascimento</label>
        <input type="date" name="dataNasc" id="dataNasc">
        <label for="tel">Telefone</label>
        <input type="tel" name="tel" id="tel">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email">
        <input type="submit" value="Enviar" id="submit">
    </form>
    <form action="request.php" method="post" id="excluir">
        <input type="hidden" name="action" value="excluir" id="actionDel">
        <input type="hidden" name="idpessoa" value="" id="idpessoaDel">
        <p id="excluirMsg"></p>
        <input type="button" value="Cancelar" onclick="fecharJanelas()">
        <input type="submit" name="enviar" value="Ok" onclick="fecharJanelas()">
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
    <?php
        // busca todas as pessoas registradas no banco de dados junto com os seus atributos e os imprime dentro da tabela
        $listaPessoas = $database->getPessoas(); 
        foreach($listaPessoas as $pessoa){
            $id = $pessoa["ID"];
            echo '<tr id="'."pessoa$id".'" class="linhaInstanciasTabela">'; // será usado na função editar() (arquivo script.js) para selecionar qual linha da tabela terá seus dados colocados nas caixas de texto do formulário quando o usuário clicar no botão editar
            foreach($pessoa as $attr){
                $attrname = null;
                //  este switch pega o nome do atributo (nome, sexo, datanasc, etc...) e coloca ele como classe do atributo para que a função editar() use-a para pegar o dado e jogar no campo do formulário
                switch(array_search($attr, $pessoa)){
                    case 'NOME':
                        $attrname = 'nome'; 
                        break;
                    case 'SEXO':
                        $attrname = 'sexo'; 
                        break;
                    case 'DATA_NASC':
                        $attrname = 'dataNasc'; 
                        break;
                    case 'TEL':
                        $attrname = 'tel'; 
                        break;
                    case 'EMAIL':
                        $attrname = 'email'; 
                        break;
                }
                echo "<td class='$attrname'>$attr</td>";
            }

            echo "<td class='tabelaEditarExcluir'>";
            echo "<a href='#' class='botaoEditar' onclick='editar($id)'>Editar</a>";
            echo "<a href='#' class='botaoExcluir' onclick='excluir($id)'>Excluir</a>";
            echo "</td>";
            echo "</tr>";
        }
    ?>
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
        <script type="text/javascript">
            //  campos de input do formulário
            var idpessoa = document.getElementById('idpessoa') 
            var action = document.getElementById('action')
            var submit = document.getElementById('submit')
            var formnome = document.getElementById('nome')
            var formdataNasc = document.getElementById('dataNasc')
            var formtel = document.getElementById('tel')
            var formemail = document.getElementById('email')
        </script>
    </table>
</body>
</html>