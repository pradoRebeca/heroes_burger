<?php

/*
Obejteivo: listar os dados dos produtos
Data: 11/11/2021
Autor: Rebeca Nascimento Prado 
*/
require_once(SRC . "dataBase/dbProdutos/exibirProdutos.php");
require_once(SRC . "dataBase/dbProdutos/atualizarProdutos.php");

function listarProdutos(){
    $dados = listaProduto();
        
    return $dados;
}


function categoriaChecked($idProduto, $idCategorias){
    $exibirDados = buscarCategoriaProduto($idProduto, $idCategorias);
    
    return $exibirDados;
}
?>