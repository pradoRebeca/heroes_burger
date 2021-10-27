<?php

/*
Obejteivo: Arquivo para deletar uma categoria no banco de dados;
Data: 26/10/2021
Autor: Rebeca Nascimento Prado 
*/

require_once("conexaoMysql.php");
function deletarCategorias($idCategoria){
	$id = (int) $idCategoria;
	$sql = "delete from tblcategorias where idcategorias = ".$id;
	
	$conexao = conexaoMysql();
	$delete = mysqli_query($conexao, $sql);
	
	if($delete){
		return true;
	} else {
		return false;
	}
}

?>