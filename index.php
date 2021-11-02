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
</head>
<body>
    <a href="#cadastrar">Cadastrar Pessoa</a>
    <form action="request.php" method="post">
        <label for="">Nome</label>
        <input type="text" name="nome" id="">
        <label for="">Sexo</label>
        <label for="">M</label>
        <input type="radio" name="sexo" id="masc" value="m">
        <label for="">F</label>
        <input type="radio" name="sexo" id="fem" value="f">
        <label for="">Data de Nascimento</label>
        <input type="date" name="dataNasc" id="">
        <label for="">Telefone</label>
        <input type="tel" name="tel" id="">
        <label for="">E-mail</label>
        <input type="email" name="email" id="">
        <input type="submit" value="Enviar">
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