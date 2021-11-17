<?php
require_once("functions/config.php");
require_once(SRC.'controles/controlesCategorias/exibeDadosCategoria.php');
require_once(SRC.'controles/controlesProdutos/exibeDadosProdutos.php');
$dadosCategoria = listarCategorias();
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
</head>

<body>
	<?php require_once("estruturaHtml/header.php");?>
    	<div id="secaoFormulario"> 
			<h2> Cadastrar Produtos</h2>
			<form enctype="multipart/form-data"  id="frmFormulario" name="frmCategorias" action="controles/controlesProdutos/recebeDadosProdutos.php" method="post"> 
			<div class="organizarSecaoFrm">
				<div class="campoFormulario"> 
                    <label>Nome Produto: </label>
                    <input placeholder="Insira o nome" type="text" name="txtNomeProduto" value="" maxlength="50">
				</div>
				
				<div class="campoFormulario"> 
                    <label>Descrição:</label>
                    <input placeholder="Insira a descrição dos componentes" type="text" name="txtDescricao" value="" maxlength="100">
				</div>
				
				<div class="campoFormulario"> 
                    <label>Preço:</label>
                    <input placeholder="Insira o valor do produto" type="text" name="txtPreco" value="" maxlength="10">
				</div>
				
                
                <div class="campoFormulario"> 
                    <label>Preço Promoção:</label>
                    <input placeholder="Insira o valor promocional" type="text" name="txtPromocao" value="" maxlength="10">
				</div>
                
                <div class="campoFormularioCheck"> 
                    <p>Categoria:</p>
      					$a
                        <?php

						while($returnCategoria=mysqli_fetch_assoc($dadosCategoria)){
            
                        ?>
						
                        <input value="" type="checkbox" name="chk<?=$returnCategoria['idcategorias']?>">  
						<label><?=$returnCategoria['nome']?> </label>
                        <?php
                        }
                        ?>
                  
				</div>
                <div class="campoFormulario"> 
                   <input type="file" name="fleFoto" accept="image/jpeg, image/jpg, image/png">
				</div>
				<div id="buttomFormulario">
					<input type="submit" name="btnCadastrar" value="Cadastrar">
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
                               href="controles/controlesProdutos/excluiDadosProdutos.php"> 
								<img src="../img/iconExcluir.png" alt="" title="Excluir">
							</a>
						</div>
						<div>
							<a href="controles/controlesProdutos/exibirDadosProdutos.php?id= <?=$returnProdutos['idprodutos']?>">
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
    
    
	<?php require_once("estruturaHtml/footer.php");?>
</body>
</html>
