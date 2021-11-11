<?php
require_once("../../functions/config.php");
require_once(SRC . "dataBase/dbProdutos/inserirProdutos.php");

$nome = (string) null;
$descricao = (string) null;
$preco = (string) null;
$precoPromocao = (string) null;
$categoria = (int) 0;
$foto = (string) null;


if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['txtNomeProduto'];
        $descricao = $_POST['txtDescricao'];
        $preco = $_POST['txtPreco'];
        $precoPromocao = $_POST['txtPromocao'];
        $categoria = $_POST['sltCategoria'];
    
    if($nome == null || $descricao == null || $preco == null){
        echo(ERRO_CAMPO_VAZIO);
    } else {
    
        $tblprodutos = array (
            "nome" => $nome,
            "descricao" => $descricao,
            "preco" => $preco,
            "precoPromocao" => $preco,
            "foto" => $foto
        );
    
        if(inserirProduto($tblprodutos)){
            echo("deu certo");
        }else{
            echo("erro");
        }
     
    }

}




?>