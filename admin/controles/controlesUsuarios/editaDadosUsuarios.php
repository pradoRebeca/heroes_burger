<?php
/*******************************************
    Objetivo: Arquivo responsável por receber o id do 
    Cliente e encaminhar para a função que irá buscar 
    os dados
    Data: 04/11/2021
    Autor: Rebeca Nascimento Prado
********************************************/
require_once("../../functions/config.php");
require_once(SRC . "dataBase/dbUsuarios/exibirUsuarios.php");

$idUsuario = (int) $_GET['id'];
echo($idUsuario);
$dadosUsuarios = buscar($idUsuario);

if($returnUsuario = mysqli_fetch_assoc($dadosUsuarios)){
	
	session_start();
	
	$_SESSION['usuario'] = $returnUsuario;
	
	header('location:../../dashboardUsuarios.php');
} else {
	echo('não deu certo');
}
?>