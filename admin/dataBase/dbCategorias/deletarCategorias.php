<?php

/*
Obejteivo: Arquivo para deletar uma categoria no banco de dados;
Data: 26/10/2021
Autor: Rebeca Nascimento Prado 
*/

require_once(SRC."dataBase/conexaoMysql.php");
function deletarCategorias($idCategoria){
	$id = (int) $idCategoria;
	$sql = "delete from tblcategorias where idcategorias = ".$id;
	
	$conexao = conexaoMysql();
	
	if(mysqli_query($conexao, $sql);){
		return true;
	} else {
		return false;
	}
}

?>