<?php

/*
Obejteivo: Arquivo inserir contatos no banco
Data: 28/10/2021
Autor: Rebeca Nascimento Prado 
*/

require_once(SRC."dataBase/conexaoMysql.php");

function inserirContatos($array){
	
    $sql = "insert into tblcontatos (nome, 
                                    email, 
                                    telefone) 
                                    values(
                                    '".$array['nome']."',
                                    '".$array['email']."',
                                    '".$array['telefone']."'
                                    )";
        
    $conexao = conexaoMysql();
    
    if(mysqli_query($conexao, $sql)){
        return true;
    } else {
        return false;
    }
}

?>