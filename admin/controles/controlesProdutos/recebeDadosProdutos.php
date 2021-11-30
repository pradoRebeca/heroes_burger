<?php
require_once("../../functions/config.php");
require_once(SRC . "dataBase/dbProdutos/inserirProdutos.php");
require_once(SRC.'controles/controlesCategorias/exibeDadosCategoria.php');
require_once(SRC."functions/upload.php");

$nome = (string) null;
$descricao = (string) null;
$preco = (double) 0;
$valorPercentual = (int) 0;
$foto = (string) null;
$nameCheckbox = (string) null;
$marcacao = (string) null;
	
if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['txtNomeProduto'];
        $descricao = $_POST['txtDescricao'];
        $preco  = $_POST['txtPreco'];
        $valorPercentual = $_POST['txtPromocao'];
		
	
	if($_FILES['fleFoto']['name'] != null){
            //chama a função que faz o upload de um arquivo
           $foto = uploadFile($_FILES['fleFoto']);
//           unlink(SRC.NOME_DIRETORIO_FILE.$foto);
       }else{
           $foto = null;
       }
	
    if($nome == null || $descricao == null || $preco == null){
        echo(ERRO_CAMPO_VAZIO);
    } else { //tratamento para o preco e o valorPercentuial serem númericos
		if(!is_numeric($preco)) {//|| ($valorPercentual != null && !is_numeric($valorPercentual))){
			echo(ERRO_DADOS_VALIDOS);
		} else {
//			echo("deu certo");
		$listar = listarCategorias();
		//tratativa para verificar se alguma catergoria foi selecionada 
		while($categoria = mysqli_fetch_assoc($listar)){
					
			$nameCheckbox = 'chk'.$categoria['idcategorias'];
		
			if(isset($_POST[$nameCheckbox])){
				produtoCategoria($categoria['idcategorias']);	
				$marcacao = $marcacao . 'true';
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
            "foto" => $foto
        );
    	
		//mandando o produto e a categoria para o banco 
        if(inserirProduto($tblprodutos)){ 
			while($categoria = mysqli_fetch_assoc($listar)){
					
				$nameCheckbox = 'chk'.$categoria['idcategorias'];
		
				if(isset($_POST[$nameCheckbox])){
					produtoCategoria($categoria['idcategorias']);	
				} 
			}// término do while
			echo(BD_SUCESSO_INSERIR_PRODUTO);
		}//término da função de inserir produto
		
		}
	}	
}
}


//separar a validação da inserção
?>