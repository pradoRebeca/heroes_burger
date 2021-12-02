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
//caminho url casa
define( 'SRC' , $_SERVER['DOCUMENT_ROOT'] . '/senai/marcel/heroes_burger/admin/');

//conexão casa
//const BD_SERVER = "localhost";
//const BD_USER = "root";
//const BD_PASSWORD = "abc127";
//const BD_DATABASE = "dbheroesburger";

//url senai
//define( 'SRC' , $_SERVER['DOCUMENT_ROOT'] . '/ds2t20212/heroes_burger/admin/');

//caminho url casa
//define( 'SRC' , $_SERVER['DOCUMENT_ROOT'] . '/senai/marcel/heroes_burger/admin/');

//conexão senai
//const BD_SERVER = "localhost";
//const BD_USER = "root";
//const BD_PASSWORD = "bcd127";
//const BD_DATABASE = "dbheroesburger";
//url senai
//define( 'SRC' , $_SERVER['DOCUMENT_ROOT'] . '/ds2t20212/heroes_burger/admin/');


const ERRO_CAMPO_VAZIO = "<script> alert('Preencha todos os campos'); window.history.back(); </script>";

const ERRO_DADOS_VALIDOS = "<script> alert('Preencha os campos com valores validos'); window.history.back(); </script>";

const ERRO_SEM_CATEGORIA = "<script> alert('O produto deverá percenter a no minino uma categoria'); window.history.back(); </script>";

const ERRO_USUARIO = "<script> alert('Usuario ou Senha incorretos');window.location.href = 'index.php'</script>";

//erros inserir 
const BD_ERRO_INSERIR = "<script> alert('Não foi possivel inserir registro'); window.history.back(); </script>";
	
const ERRO_INSERIR_CONTATO = "<script> alert('Não foi possivel enviar os seus dados, por favor tente novamente'); window.history.back(); </script>";


//sucesso inserir 
const BD_SUCESSO_INSERIR_CATEGORIA = "<script> alert('Registro salvo com sucesso');window.location.href = '../../dashboardCategorias.php'</script>";

const BD_SUCESSO_INSERIR_USUARIO = "<script> alert('Registro salvo com sucesso');window.location.href = '../../dashboardUsuarios.php'</script>";

const SUCESSO_INSERIR_CONTATO = "<script> alert('Contato enviado com sucesso');window.location.href = '../../../index.php'</script>";

const BD_SUCESSO_INSERIR_PRODUTO = "<script> alert('Registro salvo com sucesso');window.location.href = '../../dashboardProdutos.php'</script>";

//sucesso deletar
const BD_SUCESSO_DELETAR_CATEGORIA = "<script> alert('Registro deletado com sucesso');window.location.href = '../../dashboardCategorias.php'</script>";

const BD_SUCESSO_DELETAR_USUARIO = "<script> alert('Registro deletado com sucesso');window.location.href = '../../dashboardUsuarios.php'</script>";
 
const BD_SUCESSO_DELETAR_CONTATO = "<script> alert('Registro deletado com sucesso');window.location.href = '../../dashboardContatos.php'</script>";

const BD_SUCESSO_DELETAR_PRODUTO = "<script> alert('Registro de produto deletado com sucesso');window.location.href = '../../dashboardProdutos.php'</script>";

//erro deletar
const BD_ERRO_DELETAR = "<script> alert('Não foi possivel deletar o registro. Tente novamente.'); window.history.back(); </script>";

const BD_ERRO_EDITAR = "<script> alert('Não foi possivel editar o registro'); window.history.back(); </script>";

//sucaesso editar
const BD_SUCESSO_EDITAR = "<script> alert('Registro atualizado com sucesso');window.location.href = '../../dashboardCategorias.php';</script>";

const BD_SUCESSO_EDITAR_USUARIOS = "<script> alert('Registro atualizado com sucesso');window.location.href = '../../dashboardUsuarios.php';</script>";



//upload de arquivos 
define('NOME_DIRETORIO_FILE' , 'arquivos/');

$extensoes_permitidas_file = array("image/png", "image/jpg", "image/jpeg");

define('EXTENSOES_PERMITIDAS_FILE', $extensoes_permitidas_file);
const TAMANHO_FILE = '5120';
?>