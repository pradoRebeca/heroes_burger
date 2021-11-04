<?php

/*
Obejteivo: listar os contatos na adm contatos 
Data: 28/10/2021
Autor: Rebeca Nascimento Prado 
*/

require_once(SRC . "dataBase/dbContatos/exibirContatos.php");
function listarContatos(){
    $dados = listar();
    
  return $dados;
	
}
?>