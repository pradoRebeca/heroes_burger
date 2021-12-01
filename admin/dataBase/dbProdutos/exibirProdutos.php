<?php
/*
Obejteivo: enviar um select para o banco 
Data: 11/11/2021
Autor: Rebeca Nascimento Prado 
*/

require_once(SRC."dataBase/conexaoMysql.php");

function listaProduto(){
    $sql = "select * from tblprodutos order by idprodutos desc";
    
    $conexao = conexaoMysql();
    
    if($select = mysqli_query($conexao, $sql)){
        return $select;
    } else {
        return false; 
    }
}

function buscaProduto($id){
    $sql = "select * from tblprodutos where idprodutos = ".$id;
	
      $conexao = conexaoMysql();
   
    if($select = mysqli_query($conexao, $sql)){
        return $select;
    } else {
        return false;
    }
    
}



?>