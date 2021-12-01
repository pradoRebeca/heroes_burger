<?php
require_once("../../functions/config.php");
require_once(SRC . "dataBase/dbProdutos/inserirProdutos.php");
require_once(SRC . "dataBase/dbProdutos/atualizarProdutos.php");
require_once(SRC.'controles/controlesCategorias/exibeDadosCategoria.php');
require_once(SRC."functions/upload.php");

$nome = (string) null;
$descricao = (string) null;
$preco = (double) 0;
$valorPercentual = (int) 0;
$foto = (string) null;
$nameCheckbox = (string) null;
$marcacao = (string) null;

if(isset($_GET['id'])){
  $idProduto=(int)$_GET['id'];
}else{
  $idProduto = (int) 0;  
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['txtNomeProduto'];
        $descricao = $_POST['txtDescricao'];
        $preco  = $_POST['txtPreco'];
        $valorPercentual = $_POST['txtPromocao'];
		$nomeFoto = $_GET['nomeFoto'];
	
    if($nome == null || $descricao == null || $preco == 0){
        echo(ERRO_CAMPO_VAZIO);
    } else { //tratamento para o preco e o valorPercentuial serem númericos
		if(!is_numeric($preco)|| ($valorPercentual != null && !is_numeric($valorPercentual))){
			echo(ERRO_DADOS_VALIDOS);
		} else {
		$listar = listarCategorias();
			
		//tratativa para verificar se alguma catergoria foi selecionada 
		while($categoria = mysqli_fetch_assoc($listar)){
					
				$nameCheckbox = 'chk'.$categoria['idcategorias'];
		
				if(isset($_POST[$nameCheckbox])){	
					$marcacao = $marcacao.'true'; 
				} else {
					$marcacao = $marcacao.'false';  
				}
     
			}
			
			
		//verificando as categorias que foram marcadas com verdadeiro ou falso	
		$qtdMarcacao = substr_count($marcacao,"true");
	
		if($qtdMarcacao == 0){
			echo(ERRO_SEM_CATEGORIA);
		} else {
				$tblprodutos = array (
            	"nome" => $nome,
            	"descricao" => $descricao,
				"preco" => $preco,
            	"precoPromocao" => $valorPercentual,
            	"foto" => $foto,
				"id" => $idProduto
        		);
			
			if(strtoupper($_GET['modo']) == 'CADASTRAR'){
				$foto = uploadFile($_FILES['fleFoto']);
				
				//mandando o produto e a categoria para o banco 
				if(inserirProduto($tblprodutos)){ 
				
					$listarCategoria = listarCategorias();
					while($categoria = mysqli_fetch_assoc($listarCategoria)){
		
						$nameCheckbox = 'chk'.$categoria['idcategorias'];

						if(isset($_POST[$nameCheckbox])){
							produtoCategoria($categoria['idcategorias']);
							
							}
						} // término do while
					
					echo(BD_SUCESSO_INSERIR_PRODUTO);
					}//término da função de inserir produto
			}elseif(strtoupper($_GET['modo']) == 'ATUALIZAR'){
				 if($_FILES['fleFoto']['name'] != null){
            	
           			$foto = uploadFile($_FILES['fleFoto']);
           			unlink(SRC.NOME_DIRETORIO_FILE.$nomeFoto);
					 
       			} else {
           			$foto = $nomeFoto;
       			}//termino do file
				
				$exibirDadosCategoria = buscarCategoriaProduto($idProduto);
				while($categoria = mysqli_fetch_assoc($exibirDadosCategoria)){

				$nameCheckbox = 'chk'.$categoria['idcategorias'];
					
				session_start();

    			$_SESSION['checked'] = "checked";
				} // término do while
				
				 editarProduto($tblprodutos);
				unset($_SESSION['checked']);
			}//TERMINO DA VALIDAÇÃO ATUALIZAR
 
		}//TÉRMINO DA VALIDAÇÃO CATEGORIA
		
		}
	}	
}



//separar a validação da inserção
?>