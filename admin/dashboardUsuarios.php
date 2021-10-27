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
<title> Usuarios </title>
</head>

<body>
	<header>
		<div id="headerTitulo"> 
			<h1> CMS <span id="nomeEmpresa">Heroes Burger</span></h1>
			<h4> Gerenciamento de Conteúdo do Site </h4>
		</div>
		<div id="headerLogo"> 
			<img src="../img/logo2.png"> 
		</div>
	</header>
	<main> 
		<div id="organizarSecaoAdm">
			<div id="secaoAdm"> 
				<div id="admListaMenu"> 
					<div class="admMenu"> 
						<a href="">
							<img src="../img/admProdutos.png" alt="" title="Produtos">
							<p>Adm. Produtos</p>
						</a>
					</div>
					<div class="admMenu"> 
						<a href="dashboardCategorias.php">
							<img src="../img/admCategorias.png" alt="" title="Categorias">
							<p>Adm. Categorias</p>
						</a>
					</div>
					<div class="admMenu"> 
						<a href="">
							<img src="../img/admContatos.png" alt="" title="Contatos">
							<p>Adm. Contatos</p>
						</a>
					</div>
					<div class="admMenu"> 
						<a href="">
							<img src="../img/admUsuarios.png" alt="Produtos" title="Usuarios">
							<p>Adm. Usuarios</p>
						</a>
					</div>
				</div>
				<div id="admUsuario"> 
					<p> <?=$usuario?> </p>
					<div id="admUsuarioImg"> 
						<img src="../img/admUsuarios.png" alt="Sua imagem" title="Imagem do(a) <?=$usuario?> ">
					</div>
				</div>
				<div id="admSairUsuario">
					<a href="login.html"> 
						<img src="../img/iconeSair.png" alt="Sair" title="Sair">
						<p> Sair</p> 
					</a>
				</div>
			</div>
		</div>
		
		<div id="secaoFormulario"> 
			<h2> Cadastrar Usuários</h2>
			<form id="frmFormulario" name="frmCategorias" action="controles/controlesCategorias/recebeDadosCategorias.php" method="post"> 
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
	</main>
	<footer> 
		<div id="footerCopyright">
			<p> &copy; Copyright 2021 </p>
			<p> Todos os direitos reservados - Politica de Privacidade</p>
		</div>
		<div id="footerVersao"> 
			<p>Desenvolvido por Rebeca Prado</p>
			<p>Versão 1.0.0</p>
		</div>
	</footer>
</body>
</html>

