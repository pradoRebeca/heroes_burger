<?php


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
<title> Categorias </title>
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
						<a href="">
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
					<p> Rebeca Prado </p>
					<div id="admUsuarioImg"> 
						<img src="../img/" title="Imagem do Usuario">
					</div>
				</div>
			</div>
		</div>
		
		<div id="secaoFormulario"> 
			<h2> Administração de Catergorias</h2>
			<form id="frmFormulario" name="frmCategorias" action="controles/recebeDadosCategorias.php" method="post"> 
			<div class="organizarSecaoFrm">
				<div class="campoFormulario"> 
				<label> Nome: </label>
				<input placeholder="Insira o nome da categoria" type="text" name="txtCategoria" value="" maxlength="50">
				</div>
			</div>
			<div id="buttomFormulario">
				<input type="submit" name="btnCadastrar" value="Cadastrar">
			</div>
			</form>
			<div id="alterarInformacoes">
				<div id="headerInformacoes">
					<div class="itemPesquisa"> 
						Nome da Categoria
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
							<a href=""> 
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

