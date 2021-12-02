<?php

require_once(SRC."dataBase/conexaoMysql.php");

function inserirProduto($array){

  $sql = "insert into tblprodutos  (nome, 
                                    descricao, 
                                    preco,
                                    precoPromocao,
                                    imagens) 
                                    values(
                                    '".$array['nome']."',
                                    '".$array['descricao']."',
                                    '".$array['preco']."',
                                    '".$array['precoPromocao']."',
                                    '".$array['foto']."'
                                    
                                    )";
        
    $conexao = conexaoMysql();
    
    if(mysqli_query($conexao, $sql)){
        return true;
    } else {
        return false;
    }
}

function pesquisarId(){
	$sql = "select idprodutos from tblprodutos order by idprodutos desc limit 1";
		
	 $conexao = conexaoMysql();
  
    if($select = mysqli_query($conexao, $sql)){
        return $select;
    } else {
        return false;
    }
}

function produtoCategoria($idcategoria){
	
	  $idproduto = mysqli_fetch_assoc(pesquisarId());
	  $sql = "insert into tblCategoriasProdutos(idcategorias, 
                                    idprodutos
                                    ) 
                                    values(
                                    '".$idcategoria."',
                                    '".$idproduto['idprodutos']."'
                                    )";
	
	$conexao = conexaoMysql();
    
    if(mysqli_query($conexao, $sql)){
        return true;
    } else {
        return false;
    }
}

function produtoCategoria2($idcategoria, $idproduto){
	  $sql = "insert into tblCategoriasProdutos(idcategorias, 
                                    idprodutos
                                    ) 
                                    values(
                                    '".$idcategoria."',
                                    '".$idproduto."'
                                    )";
	
	$conexao = conexaoMysql();
    
    if(mysqli_query($conexao, $sql)){
        return true;
    } else {
        return false;
    }
}

?>