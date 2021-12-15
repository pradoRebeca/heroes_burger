<?php
/*
Obejteivo: Arquivo para criar função que ao ser chamada na dashboardCatgoria.php vai retornar uma outra função que lista o nome das categorias no banco
Data: 20/10/2021
Autor: Rebeca Nascimento Prado 
*/

//require_once("../functions/config.php");
require_once(SRC . "dataBase/dbCategorias/exibirCategorias.php");

function listarCategorias(){
	$exibirDados = listar();
	
	return $exibirDados;
};

function criarArrayCategoria($objeto){
     $cont = (int) 0;
    
    while($rsDados = mysqli_fetch_assoc($objeto)){
        
        $arrayDados[$cont] = array(
            "id" => $rsDados['idcategorias'],
            "nome" => $rsDados["nome"]
        );
        
        $cont+=1;
    }
        
    if(isset($arrayDados)){
        return $arrayDados; 
    } else {
        return false;
    }
}

function criarJsonCategoria($arrayDados){
    
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

//function categoriaApi(){
//    $dados = listarCategoriaApi();
//        
//    return $dados;
//}

function buscarNomeCategoriaApi($nome){
    $dados = buscarNomeCategoria($nome);
        
    return $dados;
}


?>