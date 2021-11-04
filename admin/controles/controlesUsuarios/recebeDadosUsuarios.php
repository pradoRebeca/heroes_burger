<?php
/*
Obejteivo: Arquivo para validar e receber dados da dashboardUsuarios;
Data: 28/10/2021
Autor: Rebeca Nascimento Prado 
*/
require_once("../../functions/config.php");
require_once(SRC . "dataBase/dbUsuarios/inserirUsuarios.php");
require_once(SRC . "dataBase/dbUsuarios/atualizarUsuarios.php");
$nome = (string) null;
$login = (string) null;
$senha = (string) null;
$imagem = (string) null;


if(isset($_GET['id'])){
	$id = (int) $_GET['id'];
} else {
	$id = (int) 0;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST["txtNome"];
    $login = $_POST["txtLogin"];
    $senha = $_POST["txtSenha"];

    if($nome == null || $login == null || $senha == null){
        echo(ERRO_CAMPO_VAZIO);
    } else {
        $tblusuarios = array(
			'id' => $id,
            'nome' => $nome,
            'login' => $login,
            'senha' => $senha,
            'imagem' => $imagem
        );
		//validação para chamar a função que cadastra o usuario no banco
		if(strtoupper($_GET['modo']) == 'CADASTRAR'){
			if(inserirUsuarios($tblusuarios)){
				echo(BD_SUCESSO_INSERIR_USUARIO);
			} else {
				echo(BD_ERRO_INSERIR);
			}
		//validação para chamar a função que atualiza os dados do usuairo no bando
		} elseif(strtoupper($_GET['modo']) == 'ATUALIZAR') {
			if(editarUsuarios($tblusuarios)){
				echo( BD_SUCESSO_EDITAR_USUARIOS);
			} else {
				echo(BD_ERRO_EDITAR);
			}
		}
        
    }
}

?>