<?php

/*
Obejteivo:  Arquivo para listar as categorias do formulario dashboardUsuarios na tabela ;
Data: 28/10/2021
Autor: Rebeca Nascimento Prado 
*/
require_once(SRC."dataBase/conexaoMysql.php");

function listar(){
    $sql = "select * from tblusuarios";
    
    $conexao = conexaoMysql();
    
    if($select = mysqli_query($conexao, $sql)){
        return $select;
    } else {
        return false;
    }
}

function buscar($id){
	$sql = "select * from tblusuarios where idusuarios = ".$id;
	
	$conexao = conexaoMysql();
	
	if($select = mysqli_query($conexao, $sql)){
		return $select;
	} else {
		return false;
	}
}
?>