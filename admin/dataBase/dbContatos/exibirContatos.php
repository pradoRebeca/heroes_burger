<?php

/*
Obejteivo: Arquivo para exibir registros do banco;
Data: 20/10/2021
Autor: Rebeca Nascimento Prado 
*/

require_once(SRC."dataBase/conexaoMysql.php");

function listar(){
    $sql = "select * from tblcontatos order by idcontatos desc";
    
    $conexao = conexaoMysql();
    
    if($select = mysqli_query($conexao, $sql)){
        return $select;
    } else {
        return false;
    }
}


?>