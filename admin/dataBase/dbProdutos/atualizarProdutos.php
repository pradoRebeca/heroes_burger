<?php
/*  
Objetivo: Atualizar dados de um cliente existente no Banco de Dados 
Data: 01/12/21
Autor: Rebeca Nascimento Prado 
 */

require_once(SRC."dataBase/conexaoMysql.php");

function editarProduto($array){
    $sql = "update tblprodutos set
                			nome = '".$array['nome']."',
                            descricao = '".$array['descricao']."',
                            preco = '".$array['preco']."',
                            precoPromocao = ".$array['precoPromocao'].",
                            imagens = '".$array['foto']."'
                
            where idprodutos = ".$array['id'];
    
    $conexao = conexaoMysql;
    
   
    if(mysqli_query($conexao, $sql)){
        return true; 
    } else{
        return false; 
    }
}

function buscarCategoriaProduto($idProduto, $idCategorias){
	 $sql = " select idcategorias from tblcategoriasprodutos  where idprodutos = '".$idProduto."'and idcategorias ='".$idCategorias."'limit 1";
    
    $conexao = conexaoMysql();
    
    if(mysqli_query($conexao, $sql)){
		if(mysqli_affected_rows($conexao) == 1){
			return true; 
		} else {
			 return false; 
		}
    } else{
        return false; 
    }
}




?>