<?php

require_once("conexaoMysql.php");


function inserirCategoria($nome){
	$sql = "insert into tblcategorias (nome) value ('".$nome."')";
	
	$conexao = conexaoMysql();
	
	if(mysqli_query($conexao, $sql)){
		return true;
	}else{
		return false;
	}
}

?>