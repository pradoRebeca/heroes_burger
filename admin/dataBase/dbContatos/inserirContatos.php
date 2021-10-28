<?php

/*
Obejteivo: Arquivo inserir contatos no banco
Data: 28/10/2021
Autor: Rebeca Nascimento Prado 
*/

require_once("conexaoMysql.php");

function inserirContatos($tblContatos){
    $sql = "insert into tblcontatos (nome, 
                                    email, 
                                    telefone) 
                                    values(
                                    '".$tblContatos['nome']."',
                                    '".$tblContatos['email']."',
                                    '".$tblContatos['telefone']."'
                                    )";
        
    $conexao = conexaoMysql();
    
    if(mysqli_query($conexao, $sql)){
        return true;
    } else{
        return "erro no banco";
    }
}

?>