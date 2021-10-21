<?php

/* 
    Objetivo: Arquivo para configurar a conxão com o banco de dados MySQL
    Data: 15/09/2021
    Autor: Rebeca Nascimento Prado
*/




/* Abre a conexão com a base de Dados */
function conexaoMysql(){
    /* " ../ " -> sair da pasta */
    /* Declaração de variaveis para conexão com BD */
    $server = (string) BD_SERVER;
    $user = (string) BD_USER;
    $senha = (string) BD_SENHA;
    $database = (string) BD_DATABASE;
    
    /* Formas de criar a conexão com o BD
        PDO() -> permite conexão com qualquer banco de dados; biblioteca mais segura; orientado a objeto
        mysql_connect() -> forma antiga de trabalho; deixa a segurança do banco fragil 
        mysqli_connect() -> pode ser usada tanto na programação tradicional quanto na programação orientada a objeto; mais segura 
    */
    
    if($conexao = mysqli_connect($server, $user, $senha, $database)){
        return $conexao;
    } else {
      echo(ERRO_CONEXAO_BD);  
        return false;
    }
    
    
    /*var_dump($conexao);*/
}













?> 