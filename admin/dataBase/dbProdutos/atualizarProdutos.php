<?php
/*  
Objetivo: Atualizar dados de um cliente existente no Banco de Dados 
Data: 01/12/21
Autor: Rebeca Nascimento Prado 
 */

require_once(SRC."dataBase/conexaoMysql.php");

function editarProduto($array){
    $sql = " update tblprodutos set
                			nome = '".$array['nome']."',
                            descricao = '".$array['descricao']."',
                            preco = '".$array['preco']."',
                            precoPromocao = ".$array['precoPromocao'].",
                            imagens = '".$array['foto']."'
                
            where idprodutos = ".$array['id'];
    
    $conexao = conexaoMysql();
    
   
    if(mysqli_query($conexao, $sql)){
        return true; 
    } else{
        return false; 
    }
}

function buscarCategoriaProduto($idProduto){
	 $sql = " select idcategorias from tblcategoriasprodutos  where idprodutos = ".$idProduto;
    
    $conexao = conexaoMysql();
    
    if($select = mysqli_query($conexao, $sql)){
        return $select; 
    } else{
        return false; 
    }
}




?>