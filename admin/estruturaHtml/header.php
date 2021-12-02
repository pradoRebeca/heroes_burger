<?php
//require_once("session.php");
//session()
?>
<header>
	<div id="headerTitulo"> 
		<h1> CMS <span id="nomeEmpresa">Heroes Burger</span></h1>
		<h4> Gerenciamento de Conteúdo do Site </h4>
	</div>
	<div id="headerLogo"> 
		<img src="../img/logo2.png"> 
	</div>
</header>

<div id="organizarSecaoAdm">
			<div id="secaoAdm"> 
				<div id="admListaMenu"> 
					<div class="admMenu"> 
						<a href="dashboardProdutos.php">
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
						<a href="dashboardContatos.php">
							<img src="../img/admContatos.png" alt="" title="Contatos">
							<p>Adm. Contatos</p>
						</a>
					</div>
					<div class="admMenu"> 
						<a href="dashboardUsuarios.php">
							<img src="../img/admUsuarios.png" alt="Produtos" title="Usuarios">
							<p>Adm. Usuarios</p>
						</a>
					</div>
				</div>
				<div id="admUsuario"> 
					<p><?=$_SESSION['nomeUsuario']?></p>
					<div id="admUsuarioImg"> 
						<img src="../img/admUsuarios.png" title="Imagem do Usuario">
					</div>
				</div>
				<div id="admSairUsuario">
					<a href="logout.php"> 
						<img src="../img/iconeSair.png" alt="Sair" title="Sair">
						<p> Sair</p> 
					</a>
				</div>
			</div>
		</div>