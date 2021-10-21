<?php
/*  Objetivo: Atualizar dados de um cliente existente no Banco de Dados 
    Data: 13/10/21
    Autor: Rebeca Nascimento Prado 
 */
require_once(SRC . "bd/conexaoMysql.php");

function editar($arrayCliente){
    $sql = " update tblcliente set
                nome = '".$arrayCliente['nome']."',
                rg = '".$arrayCliente['rg']."',
                cpf = '".$arrayCliente['cpf']."',
                telefone = '".$arrayCliente['telefone']."',
                celular = '".$arrayCliente['celular']."',
                email = '".$arrayCliente['email']."',
                obs = '".$arrayCliente['obs']."'
                
            where idcliente = ".$arrayCliente['id'];
    
    $conexao = conexaoMysql();
    
    //envia o script SQL para o BD
    if(mysqli_query($conexao, $sql)){
        return true; //retorna verdadeir se o registro for inserido no banco de dados
    } else{
        return false; // retorna falso se houver algum problema
    }
}

?>