<?php

require_once(SRC."dataBase/conexaoMysql.php");
function deletarProduto($id){
	deletarCategoriaProduto($id);
	$sql = "delete from tblprodutos where idprodutos= ".$id;
	
	$conexao = conexaoMysql();
	
	if(mysqli_query($conexao, $sql)){
		return true;
	} else {
		return false;
	}
}

function deletarCategoriaProduto($id){
	$sql = "delete from tblcategoriasprodutos where idprodutos= ".$id;
	
	$conexao = conexaoMysql();
	
	if(mysqli_query($conexao, $sql)){
		return true;
	} else {
		return false;
	}
}

?>