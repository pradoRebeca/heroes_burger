<?php
/*
Obejteivo: Arquivo inserir dados no Banco de Dados;
Data: 28/10/2021
Autor: Rebeca Nascimento Prado 
*/
require_once("conexaoMysql.php");

function inserirUsuarios($tblusuarios){
    $sql = "insert into tblusuarios (nome,
                                    login,
                                    senha,
                                    imagem)
                                    
                                    values (
                                    '".$tblusuarios['nome']."',
                                    '".$tblusuarios['login']."',
                                    '".$tblusuarios['senha']."',
                                    '".$tblusuarios['imagem']."'
                                    )";
    
    $conexao = conexaoMysql();
    
    if(mysqli_query($conexao, $sql)){
        return true;
    } else {
        return false;
    }
}



?>