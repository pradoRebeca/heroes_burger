<?php
/*
Obejteivo: Arquivo que tem uma função para excluir uma categoria do banco de dados 
Data: 26/10/2021
Autor: Rebeca Nascimento Prado 
*/
require_once("../../functions/config.php");
require_once(SRC."dataBase/dbCategorias/deletarCategorias.php");

$id = $_GET["id"];

echo($id);

if(deletarCategorias($id)){
	echo(BD_SUCESSO_DELETAR);
} else {
	echo(BD_ERRO_DELETAR);
}

?>