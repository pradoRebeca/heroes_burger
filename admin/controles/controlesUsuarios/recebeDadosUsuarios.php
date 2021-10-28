<?php
/*
Obejteivo: Arquivo para validar e receber dados da dashboardUsuarios;
Data: 28/10/2021
Autor: Rebeca Nascimento Prado 
*/
require_once("../../functions/config.php");
require_once(SRC . "dataBase/dbUsuarios/inserirUsuarios.php");
$nome = (string) null;
$login = (string) null;
$senha = (string) null;
$imagem = (string) null;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST["txtNome"];
    $login = $_POST["txtLogin"];
    $senha = $_POST["txtSenha"];

    if($nome == null || $login == null || $senha == null){
        echo(ERRO_CAMPO_VAZIO);
    } else {
        $tblusuarios = array(
            'nome' => $nome,
            'login' => $login,
            'senha' => $senha,
            'imagem' => $imagem
        );
        
        if(inserirUsuarios($tblusuarios)){
            echo(BD_SUCESSO_INSERIR_USUARIO);
        } else {
            echo(BD_SUCESSO_INSERIR_USUARIO);
        }
    }
}

?>