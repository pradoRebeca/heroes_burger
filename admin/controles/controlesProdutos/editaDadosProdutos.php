<?php

require_once("../../functions/config.php");
require_once(SRC ."dataBase/dbProdutos/exibirProdutos.php");



$idProduto = $_GET['id'];

$dadosProduto = buscaProduto($idProduto);

if($returnProduto=mysqli_fetch_assoc($dadosProduto)){

    session_start();

    $_SESSION['produtos']= $returnProduto;
	$_SESSION['status'] = "true";
	
 header('location:../../dashboardProdutos.php');
} else {
    echo(BD_ERRO_EDITAR);
}


?>