<?php
/*
Obejteivo: Arquivo para excluir os dados do usuario no Banco de dados;
Data: 28/10/2021
Autor: Rebeca Nascimento Prado 
*/
require_once("../../functions/config.php");
require_once(SRC."dataBase/dbUsuarios/deletarUsuarios.php");

$id = $_GET['id'];

if(deletarUsuarios($id)){
    echo(BD_SUCESSO_DELETAR_USUARIO);
} else {
    echo(BD_ERRO_DELETAR);
}



?>