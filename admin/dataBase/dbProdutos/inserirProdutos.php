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

?>