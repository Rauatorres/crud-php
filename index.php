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
</head>
<body>
    <a href="#cadastrar">Cadastrar Pessoa</a>
    <table>
        <tr>
            <td>Id</td>
            <td>Nome</td>
            <td>Sexo</td>
            <td>Data de Nascimento</td>
            <td>Telefone</td>
            <td>Email</td>
        </tr>
    </table>
    <?php
        $listaPessoas = $database->getPessoas();
        foreach($listaPessoas as $pessoa){
            echo "<tr>";
            foreach($pessoa as $attr){
                echo "<td>$attr</td>";
            }
            echo "</tr>";
        }
    ?>
</body>
</html>