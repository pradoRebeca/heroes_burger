<?php
/*
Obejteivo: Arquivo para validar e receber dados da index.php
Data: 28/10/2021
Autor: Rebeca Nascimento Prado 
*/
require_once("../../functions/config.php");
require_once(SRC . "dataBase/dbContatos/inserirContatos.php");

$nome = (string) null;
$email = (string) null;
$telefone = (string) null;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['txtNome'];
    $email = $_POST['txtEmail'];
    $telefone = $_POST['txtTelefone'];
  
    if($nome == "" || $email == "" || $telefone == ""){
        echo(ERRO_CAMPO_VAZIO);
    }else{
         $tblContatos = array(
             "nome" => $nome,
            "email" => $email,
            "telefone" => $telefone
        );
        
        if(inserirContatos($tblContatos)){
            echo(SUCESSO_INSERIR_CONTATO);
        }else{	
            echo(ERRO_INSERIR_CONTATO);
        }
    }
}


?>