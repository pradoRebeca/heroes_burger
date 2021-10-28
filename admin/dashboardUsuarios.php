<?php
require_once("functions/config.php");
require_once(SRC ."controles/controlesCategorias/exibeDadosCategoria.php");

$usuario = 'rebeca prado';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link type="text/css"
      rel="stylesheet"
      href="css/styleDash.css">
<title> Usuários </title>
</head>

<body>
	<?php require_once("estruturaHtml/header.php");?>
	<div id="secaoFormulario"> 
			<h2> Cadastrar Usuários</h2>
			<form id="frmFormulario" name="frmCategorias" action="" method="post"> 
			<div class="organizarSecaoFrm">
				<div class="campoFormulario"> 
				<label>Nome do Usuário:</label>
				<input placeholder="Insira o nome do Usuário" type="text" name="txtNome" value="" maxlength="50">
				</div>
				
				<div class="campoFormulario"> 
				<label>Login:</label>
				<input placeholder="Insira o nome de Login" type="text" name="txtLogin" value="" maxlength="50">
				</div>
				
				<div class="campoFormulario"> 
				<label>Senha:</label>
				<input placeholder="Insira uma Senha" type="text" name="txtSenha" value="" maxlength="10">
				</div>
				
				<div id="buttomFormulario">
					<input type="submit" name="btnCadastrar" value="Cadastrar">
				</div>
			</div>
			</form>
			<div id="alterarInformacoes">
				<div id="headerInformacoes">
					<div class="itemPesquisa"> 
						Nome do Usuario
					</div>
					<div class="propriedadePesquisa"> 
						Opções
					</div>
				</div>
		
				<div class="secaoInformacoes">
					<div class="itemPesquisa"> 
					
					</div>
					<div class="propriedadePesquisa"> 
						<div>
							<a href="">
								<img src="../img/iconPesquisar.png" alt="" title="Pesquisar">
							</a>
						</div>
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

