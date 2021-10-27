<?php
require_once("functions/config.php");
require_once(SRC ."controles/exibeDadosCategoria.php");

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
						<a href="dashboardCategorias.php">
							<img src="../img/admCategorias.png" alt="" title="Categorias">  
							<p>Adm. Categorias</p>
						</a>
					</div>
					<div class="admMenu"> 
						<a href="dashboardUsuarios.php">
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
		<h2> Selecione uma opção </h2>
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

