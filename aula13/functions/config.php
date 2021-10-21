<?php
/*
    Objetivo: Arquivo de configuração de variaveis e constantes que serão utilizadas no sistema 
    Data: 15/09/21
    Autor: Rebeca Nascimento Prado
*/

//constante para indicar a pasta raiz do servidor + a estrutura de diretórios até o projeto
define( 'SRC' , $_SERVER['DOCUMENT_ROOT'] . '/ds2t20212/rebeca/aula13/');

/* variaveis e constantes para conexão com o banco de dados no mysql*/
const BD_SERVER = "localhost";
const BD_USER = "root";
const BD_SENHA = "abc127";
const BD_DATABASE = "dbcontatos20212t";

/* Menssagens de ero do sistema */
const ERRO_CONEXAO_BD = "Não foi possivel realizar a conexão com o banco de dados, entre em contato com o administrador do sistema";

const ERRO_CAIXA_VAZIA = "Não foi possivel realizar a operação pois existem campos obrigatórios a serem preenchidos";

const ERRO_DADOS_NUMERICOS = "Não é possivel inserir dados númericos nesse campo";

const ERRO_MAXLENGHT = "Não foi possivel realizar a operação pois a quantidade de caracteres ultrapassa o permitido no Banco de Dados";

//alerta de aceitação e validação de dados
const BD_MSG_INSERIR = "Registro salvo com sucesso no Banco de Dados";

const BD_MSG_ERRO_ = "ERRO: Não foi possivel manipular o dados no banco de dados";

const BD_MSG_EXCLUIR = "<script> alert('Registro excluido com sucesso do Banco de Dados'); window.history.back(); </script>";
?>