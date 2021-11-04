<?php
require_once("functions/config.php");
require_once(SRC.'controles/controlesCategorias/exibeDadosCategoria.php');

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
			<form id="frmFormulario" name="frmCategorias" action="" method="post"> 
			<div class="organizarSecaoFrm">
				<div class="campoFormulario"> 
                    <label>Nome Produto: </label>
                    <input placeholder="Insira o nome do Usuário" type="text" name="txtNomeProduto" value="" maxlength="50">
				</div>
				
				<div class="campoFormulario"> 
                    <label>Descrição:</label>
                    <input placeholder="Insira o nome de Login" type="text" name="txtDescricao" value="" maxlength="80">
				</div>
				
				<div class="campoFormulario"> 
                    <label>Preço:</label>
                    <input placeholder="Insira uma Senha" type="password" name="txtSenha" value="" maxlength="15">
				</div>
				
                
                <div class="campoFormulario"> 
                    <label>Preço Promoção:</label>
                    <input placeholder="Insira uma Senha" type="password" name="txtSenha" value="" maxlength="5">
				</div>
                
                <div class="campoFormulario"> 
                    <label>Categoria:</label>
                    <select name="sltCategoria"> 
                        <option value=""> Selecione uma categoria</option>
                        <?php
                        
                        $dadosCategoria = listarCategorias();
                        
                        while($returnCategoria=mysqli_fetch_assoc($dadosCategoria)){
            
                        ?>
                            <option value="<?=$returnCategoria['id']?>"> <?=$returnCategoria['nome']?> </option>
                        <?php
                        }
                        ?>
                    </select>
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
		          
				<div class="secaoInformacoes">
					<div class="itemPesquisa1"> 
					  
					</div>
                    
                    <div class="itemPesquisa2"> 
					   
					</div>
					<div class="propriedadePesquisa"> 
						<div>
							<a onclick="return confirm('Tem certeza que deseja excluir?');"
                               href=""> 
								<img src="../img/iconExcluir.png" alt="" title="Excluir">
							</a>
						</div>
						<div>
							<a href="">
								<img src="../img/iconAlterar.png" alt="" title="Alterar">
							</a>
						</div>
					</div>
				</div>
            
			</div>
		</div>
    
    
	<?php require_once("estruturaHtml/footer.php");?>
</body>
</html>
