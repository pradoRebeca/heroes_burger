<?php

/*
Obejteivo: Arquivo para exibir registros do banco;
Data: 20/10/2021
Autor: Rebeca Nascimento Prado 
*/

require_once("conexaoMysql.php");

function listar(){
    $sql = "select * from tblcontatos";
    
    $conexao = conexaoMysql();
    
    if($select = mysqli_query($conexao, $sql)){
        return true;
    } else {
        return false;
    }
}


?>