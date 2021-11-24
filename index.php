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
</head>
<body>
    <a href="#" onclick="cadastrar()">Cadastrar Pessoa</a>
    <form action="request.php" method="post" id="form">
        <input type="hidden" name="action" id="action" value="cadastrar">
        <input type="hidden" name="idpessoa" id="idpessoa" value="">
        <label for="">Nome</label>
        <input type="text" name="nome" id="nome">
        <label for="">Sexo</label>
        <label for="">M</label>
        <input type="radio" name="sexo" id="masc" value="m">
        <label for="">F</label>
        <input type="radio" name="sexo" id="fem" value="f">
        <label for="">Data de Nascimento</label>
        <input type="date" name="dataNasc" id="dataNasc">
        <label for="">Telefone</label>
        <input type="tel" name="tel" id="tel">
        <label for="">E-mail</label>
        <input type="email" name="email" id="email">
        <input type="submit" value="Enviar" id="submit">
    </form>
    <form action="request.php" method="post" id="excluir">
        <input type="hidden" name="action" value="excluir" id="actionDel">
        <input type="hidden" name="idpessoa" value="" id="idpessoaDel">
        <p id="excluirMsg"></p>
        <input type="button" id="cancelar" value="Cancelar">
        <input type="submit" name="enviar" value="Ok">
    </form>
    <table>
        <tr>
            <td>Id</td>
            <td>Nome</td>
            <td>Sexo</td>
            <td>Data de Nascimento</td>
            <td>Telefone</td>
            <td>Email</td>
        </tr>
    <?php
        // busca todas as pessoas registradas no banco de dados junto com os seus atributos e os imprime dentro da tabela
        $listaPessoas = $database->getPessoas(); 
        foreach($listaPessoas as $pessoa){
            $id = $pessoa["ID"];
            echo '<tr id="'."pessoa$id".'">'; // será usado na função editar() (arquivo script.js) para selecionar qual linha da tabela terá seus dados colocados nas caixas de texto do formulário quando o usuário clicar no botão editar
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

            echo "<td class='action'>";
            echo "<a href='#' class='editar' onclick='editar($id)'>Editar</a>";
            echo "<a href='#' class='excluir' onclick='excluir($id)'>Excluir</a>";
            echo "</td>";
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>