<?php
/*
Obejteivo: Arquivo para guaradar valores constantes;
Data: 20/10/2021
Autor: Rebeca Nascimento Prado 
*/

/* conexão de casa*/
const BD_SERVER = "localhost";
const BD_USER = "root";
const BD_PASSWORD = "abc127";
const BD_DATABASE = "dbheroesburger";

/* conexão do senai */
//const BD_SERVER = "localhost";
//const BD_USER = "root";
//const BD_PASSWORD = "bcd127";
//const BD_DATABASE = "dbheroesburger";

define( 'SRC' , $_SERVER['DOCUMENT_ROOT'] . '/senai/marcel/heroes_burger/admin/');

const ERRO_CAMPO_VAZIO = "<script> alert('Preencha todos os campos'); window.history.back(); </script>";

const BD_ERRO_INSERIR = "<script> alert('Não foi possivel inserir registro no Banco de Dados'); window.history.back(); </script>";

const BD_SUCESSO_INSERIR = "<script> alert('Registro salvo com sucesso no Banco de Dados'); window.history.back(); </script>";

const BD_SUCESSO_DELETAR = "<script> alert('Registro deletado com sucesso no Banco de Dados'); window.history.back(); </script>";
 
const BD_ERRO_DELETAR = "<script> alert('Não foi possivel deletar o registro do Banco de Dados'); window.history.back(); </script>";
?>