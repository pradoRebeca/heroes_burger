<?php 
require_once("vendor/autoload.php");



$app = new \Slim\App();

$app->get('/produtos', function($request, $response, $args){
    require_once("../controles/controlesProdutos/exibeDadosProdutos.php");
    
    if(isset($request->getQueryParams()['nome'])){
        $nome = (string) null;
     
        //recebe o parametro nome 
        $nome = $request->getQueryParams()['nome'];
        
        if($listDados = buscarNomeApi($nome)){
            if($listDadosArray = criarArray($listDados)){
                $listDadosJson = criarJson($listDadosArray);
            }     
        }
        
    } else { 
  
        if($listDados = produtosApi()){
            if($listDadosArray = criarArray($listDados)){
                $listDadosJson = criarJson($listDadosArray);
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
