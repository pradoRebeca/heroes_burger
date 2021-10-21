<?php

/*
    Objetivo: Arquivo responsável por receber dados, tratar dados e validar os dados de clientes
    Data: 15/09/2021
    Autor: Rebeca Nascimento Prado

*/

/* Import do arquivo de configurações de variaveis */
require_once("../functions/config.php");

//import do arquivo para inserir no banco de dados
require_once(SRC."bd/inserirCliente.php");

//import do arquivo para atualizar no banco de dados
require_once(SRC."bd/atualizarCliente.php");

/* Declaração de variaveis */
$nome = (string) null;
$rg = (string) null;
$cpf = (string) null;
$telefone = (string) null;
$celular = (string) null;
$email = (string) null;
$obs = (string) null;

//validação para saber se o id do registro está chegando pela URL
if(isset($_GET['id'])){
    $id=(int)$_GET['id'];
}else{
//Será utilizado somente para o editar 
  $id = (int) 0;  
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $nome = $_POST["txtNome"];
    $rg = $_POST["txtRg"];
    $cpf = $_POST["txtCpf"];
    $telefone = $_POST["txtTelefone"];
    $celular = $_POST["txtCelular"];
    $email = $_POST["txtEmail"];
    $obs = $_POST["txtObs"];
    
  if($nome == null || $rg == null || $cpf == null){
      echo("<script> 
                alert('".  ERRO_CAIXA_VAZIA ."');
                window.history.back();
            </script>");
      
  }elseif(strlen($nome) > 100 || strlen($rg) > 20 || strlen($cpf) > 20){
        //strlen() -> retorna a quantidade de caracteres de uma variavel
         echo("<script> 
                alert('". ERRO_MAXLENGHT ."');
                window.history.back();
             </script>");
      
    }elseif(is_numeric($nome)){
       echo("<script> 
                alert('". ERRO_DADOS_NUMERICOS  ."');
                window.history.back();
             </script>");
      
    } else {
       //Local para enviar os dados para o banco de dados
      
        //criação de array 
        $tblClientes = array(
                            "nome" => $nome,
                            "rg" => $rg,
                            "cpf" => $cpf,
                            "telefone" => $telefone,
                            "celular" => $celular,
                            "email" => $email,
                            "obs" => $obs,
                            "id" => $id
                            );
      
      //validação para saber se é para inserir um novo registro ou se é para atualizar um registro existente no banco de dados 
      if(strtoupper($_GET["modo"]) == "SALVAR"){
          //chama a função inserir do arquivo inserirCliente.php e encaminha o array com os dados do cliente
        // window.history.back(); voltar para pagina de cadastro e ainda ter valores na input
          // window.location.href = '../nomePagina' -> voltar para a pagina anterior e a input estar vazia
           if(inserir($tblClientes)){
               echo("<script> 
                alert('". BD_MSG_INSERIR ."');
                window.location.href = '../index.php'
             </script>");
            } else {
               echo("<script> 
                alert('". BD_MSG_ERRO ."');
                window.history.back();
             </script>");
           }
      }elseif((strtoupper($_GET["modo"]) == "ATUALIZAR")){
          if(editar($tblClientes)){
                echo("<script> 
                alert('". BD_MSG_INSERIR ."');
                window.location.href = '../index.php'
             </script>");
            } else {
               echo("<script> 
                alert('". BD_MSG_ERRO ."');
                window.history.back();
             </script>");
           }
          }
      }
     
    }  








?>