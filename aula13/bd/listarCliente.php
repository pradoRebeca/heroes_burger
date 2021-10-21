<?php
/*  Objetivo: Listar todos os dados de clientes do banco de dados.
    Data: 23/09/21
    Autor: Rebeca Nascimento Prado 
 */
require_once(SRC . "bd/conexaoMysql.php");

function listar(){
    //order by desc -> ordenar por 
    $sql = "select * from tblcliente order by idcliente desc";
    //abre conexao com banco de daods
    $conexao = conexaoMysql();
    
    //solicita ao banco de dados a conexão do script sql
    $select = mysqli_query($conexao, $sql);
    
    return $select;
}

//retorna apenas um registro, com base no id
function buscar ($idCliente)
{
    $sql = "select * from tblcliente
            where idcliente = ".$idCliente;
    
    //Abre a conexão com o BD
    $conexao = conexaoMysql();
    
    //Solicita aoBD a execução do script SQL
    $select = mysqli_query($conexao, $sql);
    
    return $select;
}

?>