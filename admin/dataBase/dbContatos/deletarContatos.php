<?php

require_once(SRC."dataBase/conexaoMysql.php");
function deletarContatos($id){
	$sql = "delete from tblcontatos where idcontatos= ".$id;
	
	$conexao = conexaoMysql();
	
	if(mysqli_query($conexao, $sql)){
		return true;
	} else {
		return false;
	}
}


?>