<?php

/*  
Objetivo: Atualizar dados de um cliente existente no Banco de Dados aravés do id da URL
Data: 27/10/21
Autor: Rebeca Nascimento Prado 
*/

require_once("../../functions/config.php");
require_once(SRC ."dataBase/dbCategorias/exibirCategorias.php");

$idCategoria = $_GET['id'];

$dadosCategoria = buscar($idCategoria);

if($returnCategoria = mysqli_fetch_assoc($dadosCategoria)){
    
    session_start();
    
    $_SESSION['categoria'] = $returnCategoria;
    
    header('location:dashboardCategorias.php');
} else {
    echo(BD_ERRO_EDITAR);
}

?>