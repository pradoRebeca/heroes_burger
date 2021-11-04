<?php

require_once("../../functions/config.php");
require_once(SRC."dataBase/dbContatos/deletarContatos.php");

$id = $_GET['id'];

if(deletarContatos($id)){
	echo(BD_SUCESSO_DELETAR_CONTATO);
} else {
	echo(BD_ERRO_DELETAR);
}

?>