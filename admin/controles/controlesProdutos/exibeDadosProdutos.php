<?php

/*
Obejteivo: listar os dados dos produtos
Data: 11/11/2021
Autor: Rebeca Nascimento Prado 
*/
require_once(SRC . "dataBase/dbProdutos/exibirProdutos.php");

function listarProdutos(){
    $dados = listaProduto();
        
    return $dados;
}



?>