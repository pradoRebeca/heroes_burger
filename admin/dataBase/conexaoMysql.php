<?php
/*
Obejteivo: Arquivo para abrir a conexão com o Banco de Dados
Data: 20/10/2021
Autor: Rebeca Nascimento Prado 
*/

//função para abir conexao com o banco
function conexaoMysql(){
	$server = (string) BD_SERVER;
	$user = (string) BD_USER;
	$password = (string) BD_PASSWORD;
	$database = (string) BD_DATABASE;
	
	$conexao = mysqli_connect($server, $user, $password, $database);
	
	if($conexao){
		return $conexao;
	} else{
		return false;
	}
}

?>