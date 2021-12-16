<?php
require_once('admin/functions/config.php');
require_once(SRC . 'controles/controlesCategorias/exibeDadosCategoria.php');

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Heroes Burger</title>
    <link type="text/css"
          rel="stylesheet"
          href="style.css">
	<script src="admin/js/api.js" defer> </script>
</head>

<body>
    <header>
     	<div id="secaoMenu">
			<img id="logoMenu" src="img/logo.png">
			<div id="secaolistaMenu"> 
				<ul id="listaMenu">
					<li>
						<a href="#secaoEmpresa">
							A EMPRESA 
						</a>
					</li>
					<li> 
						<a href="#secaoPromocao">
							PROMOÇÕES 
						</a>
					</li>
					<li> 
						<a href="#secaoDestaques">
							DESTAQUES 
						</a>
					</li>
					<li> 
						<a href="#secaoInformacoes">
							CONTATOS 
						</a>
					</li>
				</ul>
			</div>
		</div>
    </header>
	<div class='carrossel' >
	
	</div>
	<div id="secaoHamburguer">
		<div id="pesquisaMenu">
				<div id="iconeMenu">
					<img class="iconeMenu" src="img/iconeMenu.png">
					<div id="secaoIconeMenu"></div>
                </div>
			
                <div id="barraPesquisa">
				<input type="text" placeholder="Pesquisar" id="pesquisa">
				<input type="image" id="iconePesquisa" src="img/pesquisa.png">
			    </div>
           
		</div>
		<div id="secaoCardapio">

		</div>
	</div>
	<div id="secaoEmpresa">
		<div id="organizarSecao">
			<div id="descricaoEmpresa">
				<h2 id="tituloEmpresa">A HEROES BURGER</h2>
				<p class="textoEmpresa">
					A empresa Heroes Burger surgiu em 2010 quando a empresaria Lara Guerra sem perperctiva do futuro resolveu se aventurar na arte da culinaria.
				</p>
				<p class="textoEmpresa"> 
					Após altos investimentos, vendo sua empresa rumo a estrada da falencia conseguiu se estabelecer e formar uma equipe junto com seu marido, Juliano Menezes. 
				</p>
				<p class="textoEmpresa">
					Os dois conciliaram cuinaria com HQ, e ao longo dos anos, fundaram a HEROES BURGER.
				</p>
			</div>
		</div>
	</div>
	<div id="secaoPromocao"> 
		<h2> NOSSAS PROMOÇÕES </h2>
		<div class="itemCardapio4">
			<div class="imgCardapio">
				<img src="img/hbMega.png" alt="">
			</div>
			<p class="nomeHamburguer"> BURGUER THE CITY </p>
			<p class="descricaoHamburguer"> CARNE, QUEIJO, BACON, PICLES, ALFACE, MAIONESE DA CASA</p>
			<div class="saibaHamburguer"> SAIBA MAIS </div>
			<div class="precoPromocao"> 
				<p class="precoAntigo"> R$ 15,90 </p>
				<p class="precoAtual"> R$ 18,90 </p>
			</div>
		</div>
		
		<div class="itemCardapio5">
			<div class="imgCardapio">
				<img src="img/hbFrango.png" alt="">
			</div>
			<p class="nomeHamburguer"> BURGUER THE CITY </p>
			<p class="descricaoHamburguer"> CARNE, QUEIJO, BACON, PICLES, ALFACE, MAIONESE DA CASA</p>
			<div class="saibaHamburguer"> SAIBA MAIS </div>
			<div class="precoPromocao"> 
				<p class="precoAntigo"> R$ 15,90 </p>
				<p class="precoAtual"> R$ 18,90 </p>
			</div>
		</div>
		
		<div class="itemCardapio6">
			<div class="imgCardapio">
				<img src="img/hbChefe3.png" alt="">
			</div>
			<p class="nomeHamburguer"> BURGUER THE CITY </p>
			<p class="descricaoHamburguer"> CARNE, QUEIJO, BACON, PICLES, ALFACE, MAIONESE DA CASA</p>
			<div class="saibaHamburguer"> SAIBA MAIS </div>
			<div class="precoPromocao"> 
				<p class="precoAntigo"> R$ 15,90 </p>
				<p class="precoAtual"> R$ 18,90 </p>
			</div>
		</div>
	</div>
	<div id="banner2"></div>
	<div id="secaoDestaques"> 
		<h2> DESTAQUES DA HEROES</h2>
		<div id="organizarDestaques">
			<div class="imgDestaque"> <img src="img/hbFrango2.png" alt=""> </div>
			<div class="imgDestaque2"> <img src="img/hb3.png" alt=""> </div>
			<div class="imgDestaque3"> <img src="img/hb2.png" alt=""> </div>
			<div class="imgDestaque4"> <img src="img/hb.png" alt=""> </div>
		</div>
	</div>
    <div id="secaoInformacoes">
        <div id="organizarInfo">
	    <div id="lojasInfo">  
        <h3 class="tituloInfo"> NOSSAS LOJAS </h3>
            <h4> Loja Barueri </h4>
            <div class="lojas"> 
                <img id="imgLoja" src="img/logoLoja.png">
                <div id="iconeLoja">
                    <img src="img/iconeLocalizacao.png">
                     <img src="img/iconeTelefone.png">
                </div>
                
                <div id="textoLoja">
                    <p> Rua Bello Som, 1346</p>
                    <p> 11 4002-8922</p>
                </div>
            </div>
            
            <h4> Loja Jandira </h4>
            <div class="lojas"> 
                <img id="imgLoja" src="img/logoLoja.png">
                <div id="iconeLoja">
                    <img src="img/iconeLocalizacao.png">
                     <img src="img/iconeTelefone.png">
                </div>
                
                <div id="textoLoja">
                    <p> Rua Bello Som, 1346</p>
                    <p> 11 4002-8922</p>
                </div>
            </div>
        </div>
        
        <div id="contatosInfo">
        <form name="frmMensagem" id="frmMensagem" action="admin/controles/controlesContatos/recebeDadosContatos.php" method="POST">
            <H3> ENTRE EM CONTATO </H3>
            <div id="contatosLabel"> 
                <div class="label">
                     <label> Nome: </label>
                </div>
               
                <div class="label">
                    <label> Email: </label>
                </div>
                
                <div class="label">
                    <label> Celular: </label>
                </div>
            </div>
            <div id="contatosInput"> 
                <input type="text" name="txtNome" value="" maxlength="100"> 
                <input type="email" name="txtEmail" value="" maxlength="80"> 
                <input type="telefone" name="txtTelefone" maxlength="10" value=""> 
            </div>
           <input id="btnSalvar" type="submit" name="btnSalvar" value="Enviar"> 
        </form>
        </div>
	</div>
    
    </div>
	
	<footer> <span> Copyright &copy; Rebeca Prado | 2021 </span></footer>
</body>
</html>


<!--Dashboard -> produtos/categorias/contatos/usuarios-->
