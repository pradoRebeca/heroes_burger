<?php   
//import do arquivo de configurações do sistema
require_once("../functions/config.php");

require_once("produtosApi/index.php");


$url = (string) null;

//cria um array com base na url até a palavra API
//guarda no inidce 0 a promeira palavra após a "/"
$url = explode('/', $_GET['url']);

//estrutura condicional para encaminhar a API conforme a escolha [clientes ou estadois]
switch($url[0]){
    case 'produtos': 
        //import do arquivo de API de clientes
        require_once("produtosAPI/index.php");
        break;
        
    case 'categorias': 
        require_once("categoriasAPI/index.php");
        break;
}
?>