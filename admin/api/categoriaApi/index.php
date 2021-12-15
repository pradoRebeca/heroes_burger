<?php
require_once("vendor/autoload.php");

$app = new \Slim\App();

$app->get('/categorias', function($request, $response, $args){
    require_once("../controles/controlesCategorias/exibeDadosCategoria.php");
    echo("ta aqui");
    if(isset($request->getQueryParams()['nome'])){
        $nome = (string) null;
     
        //recebe o parametro nome 
        $nome = $request->getQueryParams()['nome'];
        
        if($listDados = buscarNomeCategoriaApi($nome)){
            if($listDadosArray = criarArrayCategoria($listDados)){
                $listDadosJson = criarJsonCategoria($listDadosArray);
            }     
        }
    } else { 
  
        if($listDados = listarCategorias()){
            if($listDadosArray = criarArrayCategoria($listDados)){
                $listDadosJson = criarJsonCategoria($listDadosArray);
            }     
        }
    }
    
    //validação para tratar BD sem conteúdo 
    if($listDadosArray){
        return $response    ->withStatus(200)
                            ->withHeader('Content-Type','application/json')
                            ->write($listDadosJson); 
    } else {
       return $response    ->withStatus(204);                        
    }
          
});

$app->run();

?>