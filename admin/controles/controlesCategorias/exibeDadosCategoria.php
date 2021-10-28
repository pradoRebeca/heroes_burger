<?php
/*
Obejteivo: Arquivo para criar função que ao ser chamada na dashboardCatgoria.php vai retornar uma outra função que lista o nome das categorias no banco
Data: 20/10/2021
Autor: Rebeca Nascimento Prado 
*/

//require_once("../functions/config.php");
require_once(SRC . "dataBase/dbCategorias/exibirCategorias.php");

function listarCategorias(){
	$exibirDados = listar();
	
	return $exibirDados;
};

?>