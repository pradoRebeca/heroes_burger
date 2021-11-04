<?php

/*  
Objetivo: Atualizar dados de uma categoria existente no Banco de Dados 
Data: 27/10/21
Autor: Rebeca Nascimento Prado 
*/

require_once(SRC."dataBase/conexaoMysql.php");

function editarCategoria($arrayCategorias){
	$sql = "update tblcategorias set 
	nome = '".$arrayCategorias['nome']."' 
	where idcategorias = ".$arrayCategorias['id'];
	
	$conexao = conexaoMysql();
	
	if(mysqli_query($conexao, $sql)){
		return true;
	} else {
		return false;
	}
}

?>