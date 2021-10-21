<?php
/*  Objetivo: Excluir dados de cliente no banco de dados
    Data: 29/09/21
    Autor: Rebeca Nascimento Prado 
*/

//import do arquivo de conexão com banco de dados
require_once(SRC . "bd/conexaoMysql.php");

function excluir($idCliente){
        
    $sql = "delete from tblcliente where idcliente = ".$idCliente;
    
    //chamando a função que estabelece a conexão com o banco de dados  
   $conexao = conexaoMysql();
    
    if(mysqli_query($conexao, $sql)){
        return true;
    } else {
        return false;
    }
    
}

?>