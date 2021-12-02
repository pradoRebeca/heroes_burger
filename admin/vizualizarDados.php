<?php
    /*Import do arquivo que visualiza os dados*/
    require_once("controles/controlesProdutos/exibeDadosProdutos.php");
    $id = $_GET["id"];
    
    $dadosProduto = mysqli_fetch_assoc(produtoModal($id));
    
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> Visualizar </title>
</head>

<body>
    <table>
        <tr>
            <td>Nome: </td>
            <td><?=najnsaj?></td>
        </tr>
        <tr>
            <td>Rg:</td>
            <td><?=$dadosCliente["rg"]?></td>
        </tr>
         <tr>
            <td>CPF: </td>
            <td><?=$dadosCliente["cpf"]?></td>
        </tr>
         <tr>
            <td>Telefone: </td>
            <td><?=$dadosCliente["telefone"]?></td>
        </tr>
         <tr>
            <td>Celular: </td>
            <td><?=$dadosCliente["celular"]?></td>
        </tr>
         <tr>
            <td>Email: </td>
            <td><?=$dadosCliente["email"]?></td>
        </tr>
         <tr>
            <td>Obs: </td>
            <td><?=$dadosCliente["obs"]?></td>
        </tr>
    </table>
</body>
</html>