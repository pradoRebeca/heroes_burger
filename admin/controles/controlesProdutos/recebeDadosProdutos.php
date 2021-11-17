<?php
require_once("../../functions/config.php");
require_once(SRC . "dataBase/dbProdutos/inserirProdutos.php");
require_once(SRC.'controles/controlesCategorias/exibeDadosCategoria.php');

$nome = (string) null;
$descricao = (string) null;
$preco = (string) null;
$precoPromocao = (string) null;
$foto = (string) null;
$nameCheckbox = (string) null;
$marcacao = (string) null;
	
if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['txtNomeProduto'];
        $descricao = $_POST['txtDescricao'];
        $preco = $_POST['txtPreco'];
        $precoPromocao = $_POST['txtPromocao'];
		
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
           
			$listar = listarCategorias();
			
			while($categoria = mysqli_fetch_assoc($listar)){
					
				$nameCheckbox = 'chk'.$categoria['idcategorias'];
		
				if(isset($_POST[$nameCheckbox])){
					produtoCategoria($categoria['idcategorias']);	
					$marcacao = $marcacao . 'true';
				} else {
					$marcacao = $marcacao.'false';  
				}
     
			}		
			
			$qtdMarcacao = substr_count($marcacao,"true");
			if($qtdMarcacao = 0){
				echo("insira no minimo uma catetgoria");
			} else {
				echo(BD_SUCESSO_INSERIR_PRODUTO);
			}
		} //término da função de inserir produto
			
		
	}	
}


//separar a validação da inserção
?>