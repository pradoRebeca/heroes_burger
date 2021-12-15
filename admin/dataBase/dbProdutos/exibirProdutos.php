<?php
/*
Obejteivo: enviar um select para o banco 
Data: 11/11/2021
Autor: Rebeca Nascimento Prado 
*/

require_once(SRC."dataBase/conexaoMysql.php");

function listaProduto(){
    $sql = "select * from tblprodutos order by idprodutos desc";
    
    $conexao = conexaoMysql();
    
    if($select = mysqli_query($conexao, $sql)){
        return $select;
    } else {
        return false; 
    }
}

function buscaProduto($id){
    $sql = "select * from tblprodutos where idprodutos = ".$id;
	
      $conexao = conexaoMysql();
   
    if($select = mysqli_query($conexao, $sql)){
        return $select;
    } else {
        return false;
    }
    
}

function listarProdutoApi(){
	  $sql = "select tblprodutos.*, tblcategorias.nome as categoria,  round((tblprodutos.preco*(tblprodutos.precoPromocao/100)), 2) as valorDesconto from tblprodutos 
      inner join tblcategoriasprodutos on tblcategoriasprodutos.idprodutos = tblprodutos.idprodutos
	  inner join tblcategorias on tblcategoriasprodutos.idcategorias = tblcategorias.idcategorias";
	
      $conexao = conexaoMysql();
   
    if($select = mysqli_query($conexao, $sql)){
        return $select;
    } else {
        return false;
    }
}

function buscarNomeProdutoApi($nome){
    $sql = "select tblprodutos.*, tblcategorias.nome as categoria, round((tblprodutos.preco*(tblprodutos.precoPromocao/100)), 2) as valorDesconto from tblprodutos 
	  inner join tblcategoriasprodutos on tblcategoriasprodutos.idprodutos = tblprodutos.idprodutos
	  inner join tblcategorias on tblcategoriasprodutos.idcategorias = tblcategorias.idcategorias where tblprodutos.nome like '%".$nome."%'";
	
      $conexao = conexaoMysql();
   
    if($select = mysqli_query($conexao, $sql)){
        return $select;
    } else {
        return false;
    }  
}

//função para buscar pelo nome da categoria
//function buscarNomeCategoriaApi($nome){
//     $sql = "select tblprodutos.*, tblcategorias.nome as categoria,  round((tblprodutos.preco*(tblprodutos.precoPromocao/100)), 2) as valorDesconto from tblprodutos 
//	  inner join tblcategoriasprodutos on tblcategoriasprodutos.idprodutos = tblprodutos.idprodutos
//	  inner join tblcategorias on tblcategoriasprodutos.idcategorias = tblcategorias.idcategorias where tblcategorias.nome '%".$nome."%'";
//	
//      $conexao = conexaoMysql();
//   
//    if($select = mysqli_query($conexao, $sql)){
//        return $select;
//    } else {
//        return false;
//    }  
//}

function listarProdutoPorCategoria($idcategoria){
    $sql = "select tblprodutos.*, tblcategorias.nome as categoria, round((tblprodutos.preco*(tblprodutos.precoPromocao/100)), 2) as valorDesconto from tblprodutos 
	  inner join tblcategoriasprodutos on tblcategoriasprodutos.idprodutos = tblprodutos.idprodutos
	  inner join tblcategorias on tblcategoriasprodutos.idcategorias = tblcategorias.idcategorias where tblcategorias.idcategorias = " .$idcategoria;
	
      $conexao = conexaoMysql();
   
    if($select = mysqli_query($conexao, $sql)){
        return $select;
    } else {
        return false;
    } 
}


?>