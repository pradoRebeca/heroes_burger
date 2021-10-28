<?php
/*
Obejteivo: Arquivo para validar os campos do formulario do dashboard Categoria;
Data: 20/10/2021
Autor: Rebeca Nascimento Prado 
*/

require_once("../../functions/config.php");
require_once(SRC . "dataBase/dbCategorias/inserirCategoria.php");
require_once(SRC . "dataBase/dbCategorias/atualizarCategorias.php");
//declaração de variaveis 
$nome = (string) null;

//recebendo o id pela url para usar na função editar
if(isset($_GET['id'])){
	 $id=(int) $_GET['id'];
} else {
	$id = (int) 0;
}


if($_SERVER["REQUEST_METHOD"] == "POST"){
	$nome = $_POST["txtCategoria"];
	if($nome == null){
		 echo(ERRO_CAMPO_VAZIO);
	} else {
        $tblCategorias = array(
            "nome" => $nome,
			"id" => $id
        );
		
		//validação para saber se é para cadastrar uma nova categoria
		if(strtoupper($_GET['modo']) == 'CADASTRAR'){
			if(inserirCategoria($tblCategorias)){
				echo(BD_SUCESSO_INSERIR);
			}else{
			 	echo(BD_ERRO_INSERIR);
		 	}
			
		//validação para saber se é para editar uma categoria existente 
		} elseif(strtoupper($_GET['modo']) == 'ATUALIZAR'){
			if(editarCategoria($tblCategorias)){
				echo(BD_SUCESSO_EDITAR );
			} else{
				echo(BD_ERRO_EDITAR);
			}
		}
		 
	}
}
	
?>