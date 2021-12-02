<?php
require_once("functions/config.php");
require_once(SRC.'controles/controlesCategorias/exibeDadosCategoria.php');
require_once(SRC.'controles/controlesProdutos/exibeDadosProdutos.php');

$dadosCategoria = listarCategorias();

require_once("session.php");

session_start();

//declarando variaveis 
$nome = (string) null;
$descricao = (string) null;
$preco = (double) null;
$valorPercentual = (int) null;
$foto = (string) "sem-foto.jpg";
$marcado = (string) null;
$id = (int) 0;
$modo = (string) "Cadastrar";
$status = (string) "false";

if(isset($_SESSION['produtos'])){
	$nome = $_SESSION['produtos']['nome'];
	$id = $_SESSION['produtos']['idprodutos'];
	$descricao = $_SESSION['produtos']['descricao'];
	$preco = $_SESSION['produtos']['preco'];
	$foto = $_SESSION['produtos']['imagens'];
	$valorPercentual = $_SESSION['produtos']['precoPromocao'];
	
	$modo = "Atualizar";
	unset($_SESSION['produtos']);
}


?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> Produtos  </title>
	<link type="text/css"
      rel="stylesheet"
      href="css/styleDash.css">
	
 <script src="js/jquery.js"> </script>
        <script> 
            $(document).ready(function(){
                /*abre modal*/
                $("#containerModal").css("display", "none")
               $(".pesquisar").click(function(){
                   $("#containerModal").fadeIn(1000);
                   /*recebe o id do cliente que foi adicionado pelo data atributo no html*/
                   let idProduto = $(this).data("id");
                   
                   //Realiza uma requisição para consumir dados de uma outra pagina
                   $.ajax({
                       /*tipo de requisição (GET, POST, PUT, etc*/
                       type: "GET",
                       
                       /*URL da pagina que será consumida ou utilizada*/
                       url: "visualizarDados.php",
                       data:{id:idProduto},
                       /*se a requisição der certo, iremos receber o conteúdo na variavel dados */
                       success: function(dados){
                           /*exibe dento da div modal*/
                           $("#modal").html(dados);
                       }
                   });
               })
                /*fecha modal*/
                $("#fecharModal").click(function(){
                    $("#containerModal").fadeOut();
                })
            });
        </script>
</head>

<body>
	 <div id="containerModal">
            <span id="fecharModal"> X </span>
            <div id="modal">
            
            </div>
        </div>
	<?php require_once("estruturaHtml/header.php");?>
	<div id="secaoPrincipal"> 
    	<div id="secaoFormulario"> 
			<h2> Cadastrar Produtos</h2>
			<form enctype="multipart/form-data"  id="frmFormulario" name="frmProdutos" action="controles/controlesProdutos/recebeDadosProdutos.php?modo=<?=$modo?>&nomeFoto=<?=$foto?>&id=<?=$id?>" method="post"> 
			<div class="organizarSecaoFrm">
				<div class="campoFormulario"> 
                    <label>Nome Produto: </label>
                    <input placeholder="Insira o nome" type="text" name="txtNomeProduto" value="<?=$nome?>" maxlength="50">
				</div>
				
				<div class="campoFormulario"> 
                    <label>Descrição:</label>
                    <input placeholder="Insira a descrição dos componentes" type="text" name="txtDescricao" value="<?=$descricao?>" maxlength="100">
				</div>
				
				<div class="campoFormulario"> 
                    <label>Preço:</label>
                    <input placeholder="Insira o valor do produto" type="text" name="txtPreco" value="<?=$preco?>" maxlength="10">
				</div>
				
                
                <div class="campoFormulario"> 
                    <label>Preço Promoção:</label>
                    <input placeholder="Insira o valor promocional" type="text" name="txtPromocao" value="<?=$valorPercentual?>" maxlength="10">
				</div>
				<!--imagem da foto -->
				<div class="campoFormulario"> 
                   <img src="<?=NOME_DIRETORIO_FILE.$foto?>">
				</div>
                
				 <div class="campoFormulario"> 
                   <input type="file" name="fleFoto" accept="image/jpeg, image/jpg, image/png">
				</div>
                <div class="campoFormularioCheck"> 
					<label>Categorias:</label>
      				
                        <?php

						while($returnCategoria=mysqli_fetch_assoc($dadosCategoria)){
            
                        ?>
						
                        <input value="" type="checkbox" name="chk<?=$returnCategoria['idcategorias']?>">  
						<label><?=$returnCategoria['nome']?> </label>
                        <?php
                        }
                        ?>
                  
				</div>
				
                
				<div id="buttomFormulario">
					<input type="submit" name="btnCadastrar" value="<?=$modo?>">
				</div>
			</div>
			</form>
			<div id="alterarInformacoes">
				<div id="headerInformacoes">
					<div class="itemPesquisa1"> 
						Nome do produto
					</div>
                    
                    <div class="itemPesquisa2"> 
                        Descrição
					</div>
                    
					<div class="propriedadePesquisa"> 
						Opções
					</div>
				</div>
		          
                <?php 
                $exibirDados  = listarProdutos();
                
                while($returnProdutos = mysqli_fetch_assoc($exibirDados)){
                
                ?>
				<div class="secaoInformacoes">
					<div class="itemPesquisa1"> 
					  <?=$returnProdutos['nome']?>
					</div>
                    
                    <div class="itemPesquisa2"> 
					   <?=$returnProdutos['descricao']?>
					</div>
					<div class="propriedadePesquisa"> 
						<div>
							<a onclick="return confirm('Tem certeza que deseja excluir?');"
                               href="controles/controlesProdutos/excluiDadosProdutos.php?id=<?=$returnProdutos['idprodutos']?>&nomeFoto=<?=$foto?>"> 
								<img src="../img/iconExcluir.png" alt="" title="Excluir">
							</a>
						</div>
						<div class="pesquisar">
							<img src="../img/iconPesquisar.png" alt="" title="Excluir" data-id="<?=$returnProdutos['idprodutos']?>">
							
						</div>
						<div>
							<a href="controles/controlesProdutos/editaDadosProdutos.php?id=<?=$returnProdutos['idprodutos']?>&$foto=<?=$foto?>">
								<img src="../img/iconAlterar.png" alt="" title="Alterar">
							</a>
						</div>
					</div>
				</div>
                <?php
                }
                
                ?>
			</div>
		</div>
	</div>
	<?php require_once("estruturaHtml/footer.php");?>
</body>
</html>

