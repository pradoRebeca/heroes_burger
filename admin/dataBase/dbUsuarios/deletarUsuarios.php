<?php
/*
Obejteivo: Arquivo para deletar um usuario no banco de dados;
Data: 26/10/2021
Autor: Rebeca Nascimento Prado 
*/

require_once("conexaoMysql.php");

function deletarUsuarios($idUsuarios){
	$id = (int) $idUsuarios;
	$sql = "delete from tblusuarios where idusuarios = ".$id;
	
	$conexao = conexaoMysql();
	
	if(mysqli_query($conexao, $sql)){
		return true;
	} else {
		return false;
	}
}




?>