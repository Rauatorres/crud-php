<?php
    include "database.php";
    include "pessoa.php";
    $database = new Database();
    // $database->addPessoa($testePessoa);
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
    <a href="#">Cadastrar Pessoa</a>
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
        $listaPessoas = $database->getPessoas();
        foreach($listaPessoas as $pessoa){
            $id = $pessoa["ID"];
            echo '<tr id="'."pessoa$id".'">';
            foreach($pessoa as $attr){
                $attrname = null;
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