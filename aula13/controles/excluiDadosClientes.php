<?php 
    /*
    Objetivo:Arquivo reponsavel por receber o id do cliente e encaminhar para a função que irá excluir o dado
    Data: 29/09/21
    Autor: Rebeca Nascimento Prado 
    */

    /* Import do arquivo de configurações de variaveis */
    require_once("../functions/config.php");

    //import do arquivo para inserir no banco de dados
    require_once(SRC."bd/excluiCliente.php");
    
    /* o id está sendo encaminhado pela index, no link que foi realizado na imagem excluir */
    $idCliente = $_GET["id"];
    
    //chama a função excluir e encaminha o ID que será removido 
    
    if(excluir($idCliente)){
        echo(BD_MSG_EXCLUIR);
    } else {
         echo("<script> 
                alert('". BD_MSG_ERRO ."');
                window.history.back();
             </script>");
    }
?>