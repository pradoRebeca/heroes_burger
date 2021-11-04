<?php
/*
Obejteivo: Arquivo para inserir uma categoria no banco;
Data: 20/10/2021
Autor: Rebeca Nascimento Prado 
*/


require_once(SRC."dataBase/conexaoMysql.php");

function inserirCategoria($tabela){
	$sql = "insert into tblcategorias (nome) values('". $tabela['nome']."')";
	
	$conexao = conexaoMysql();
	
	if(mysqli_query($conexao, $sql)){
		return true;
	}else{
		return false;
	}
}

?>