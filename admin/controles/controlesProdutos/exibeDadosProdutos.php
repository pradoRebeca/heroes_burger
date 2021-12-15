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

function criarArray($objeto){
     $cont = (int) 0;
    
    while($rsDados = mysqli_fetch_assoc($objeto)){
        
        $arrayDados[$cont] = array(
            "id" => $rsDados['idprodutos'],
            "nome" => $rsDados["nome"],
            "descricao" => $rsDados['descricao'],
            "preco" => $rsDados['preco'],
            "valorPercentual" => $rsDados['precoPromocao'],
            "valorDesconto" => $rsDados['valorDesconto'],
            "imagens" => $rsDados['imagens'],
            "categoria" => $rsDados['categoria']
        );
        
        $cont+=1;
    }
        
    if(isset($arrayDados)){
        return $arrayDados; 
    } else {
        return false;
    }
}

function criarJson($arrayDados){
    
    header('content-type:application/json');
    
    //converte um array em json 
    $listJson = json_encode($arrayDados);
    
    /*
        json_encode -> converte um array em formato JSON
        json_decode() -> converte um JSON em formqato array
    */
    
    if(isset($listJson)){
        return $listJson;
    } else {
        return false;
    }
    
}

function produtosApi(){
    $dados = listarProdutoApi();
        
    return $dados;
}

function buscarNomeApi($nome){
    $dados = buscarNomeProdutoApi($nome);
        
    return $dados;
}

function buscarProdutoPorCategroiaApi($idcategoria){
    $dados = listarProdutoPorCategoriaApi($idcategoria);
        
    return $dados;
}

?>