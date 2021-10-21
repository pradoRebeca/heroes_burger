<?php
/*
    Objetivo: Inserir dados de cliente no banco de dados 
    Data: 16/09/21
    Autor: Rebeca Nascimento Prado
*/

//import do arquivo de conexão com banco de dados
require_once(SRC . "bd/conexaoMysql.php");

function inserir($tabela){

    //var_dump($tabela);
    
    $sql = "insert into tblcliente
                (
                    nome,
                    rg,
                    cpf,
                    telefone,
                    celular,
                    email,
                    obs
                )
                values
                (
                    '". $tabela['nome'] ."',
                    '". $tabela['rg'] ."',
                    '". $tabela['cpf'] ."',
                    '". $tabela['telefone'] ."',
                    '". $tabela['celular'] ."',
                    '". $tabela['email'] ."',
                    '". $tabela['obs'] ."'
                )
            ";
    
    //chamando a função que estabelece a conexão com o banco de dados  
   $conexao = conexaoMysql();
    
    //envia o script SQL para o BD
    if(mysqli_query($conexao, $sql)){
        return true; //retorna verdadeirO se o registro for inserido no banco de dados
    } else{
        return false; // retorna falso se houver algum problema
    }
}

//Para acessar a tabela: use nomeTabela;
//Para selecionar a tabela: select * from tblcliente;







?>