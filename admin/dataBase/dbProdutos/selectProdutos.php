<?php
/*
Obejteivo: enviar um select para o banco 
Data: 11/11/2021
Autor: Rebeca Nascimento Prado 
*/


function listar(){
    $sql = "select * from tblprodutos";
    
    $conexao = conexaoMysql();
    
    if($select = mysqli_query($conexao, sql)){
        return $select;
    } else {
        return false; 
    }
}

?>