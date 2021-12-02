<?php
require_once("../../functions/config.php");
require_once(SRC."dataBase/dbProdutos/deletarProdutos.php");

$id = $_GET['id'];

$nomeFoto = $_GET['nomeFoto'];

if(deletarProduto($id)){
	unlink(SRC.NOME_DIRETORIO_FILE.$nomeFoto);
	echo(BD_SUCESSO_DELETAR_PRODUTO);
} else {
	echo(BD_ERRO_DELETAR);
}

?>