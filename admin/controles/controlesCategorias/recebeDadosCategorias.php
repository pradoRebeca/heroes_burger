<?php
/*
Obejteivo: Arquivo para validar os campos do formulario do dashboard Categoria;
Data: 20/10/2021
Autor: Rebeca Nascimento Prado 
*/

require_once("../../functions/config.php");
require_once(SRC . "dataBase/dbCategorias/inserirCategoria.php");


if(isset($_POST["btnCadastrar"])){
	$nome = $_POST["txtCategoria"];
	if($nome == null){
		 echo(ERRO_CAMPO_VAZIO);
	} else {
		 if(inserirCategoria($nome)){
			 echo(BD_SUCESSO_INSERIR);
		 }else{
			 echo(BD_ERRO_INSERIR);
		 }
	}
}
	
?>