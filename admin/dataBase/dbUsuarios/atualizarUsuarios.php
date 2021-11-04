<?php
/*  
Objetivo: Atualizar dados de um cliente existente no Banco de Dados aravés do id da URL
Data: 04/11/21
Autor: Rebeca Nascimento Prado 
*/
require_once(SRC."dataBase/conexaoMysql.php");

function editarUsuarios($array){
	$sql = "update tblusuarios set
                nome = '".$array['nome']."',
                login = '".$array['login']."',
                senha = '".$array['senha']."',
				imagem = '".$array['imagem']."'
                
            where idusuarios = ".$array['id'];
	
	$conexao = conexaoMysql();
	
	if(mysqli_query($conexao, $sql)){
		return true;
	} else {
		return false;
	}
}

?>