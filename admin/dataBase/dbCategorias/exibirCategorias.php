<?php
/*
Obejteivo: Arquivo para listar as categorias do formulario dashboardCategoria na tabela ;
Data: 26/10/2021
Autor: Rebeca Nascimento Prado 
*/
require_once("conexaoMysql.php");

function listar(){
	$sql = "select * from tblcategorias order by idcategorias desc";
	$conexao = conexaoMysql();
	$select = mysqli_query($conexao, $sql);

	if($select){
		return $select;
	} else {
		return false;
	}
}

?>