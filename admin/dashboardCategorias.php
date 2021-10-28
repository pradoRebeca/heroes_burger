<?php
require_once("functions/config.php");
require_once(SRC ."controles/controlesCategorias/exibeDadosCategoria.php");

session_start();

//declarando variaveis 
$nome = (string) null;
$id = (int) 0;
$modo = (string) "Cadastrar";

if(isset($_SESSION['categorias'])){
	$nome = $_SESSION['categorias']['nome'];
	$id = $_SESSION['categorias']['idcategorias'];
	$modo = "Atualizar";
	unset($_SESSION['categorias']);
}

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
		<?php require_once("estruturaHtml/header.php");?>
		<div id="secaoFormulario"> 
			<h2> Cadastrar Catergorias</h2>
			<form id="frmFormulario" name="frmCategorias" action="controles/controlesCategorias/recebeDadosCategorias.php?modo=<?=$modo?>&id=<?=$id?>" method="post"> 
			<div class="organizarSecaoFrm">
				<div class="campoFormulario"> 
				<label> Nome da Categoria: </label>
				<input placeholder="Insira o nome da categoria" type="text" name="txtCategoria" value="<?=$nome?>" maxlength="50">
				</div>

				<div id="buttomFormulario">
					<input type="submit" name="btnCadastrar" value="<?=$modo?>">
				</div>
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
				<?php
					$exibirDados = listarCategorias();
					
					while($categoria = mysqli_fetch_assoc($exibirDados)){
					?>
				<div class="secaoInformacoes">
					<div class="itemPesquisa"> 
						<?=$categoria['nome']?>
					</div>
					<div class="propriedadePesquisa"> 
<!--
						<div>
							<a href="">
								<img src="../img/iconPesquisar.png" alt="" title="Pesquisar">
							</a>
						</div>
-->
						<div>
							<a onclick="return confirm('Tem certeza que deseja excluir?');"
                               href="controles/controlesCategorias/excluiDadosCategoria.php?id=<?=$categoria['idcategorias']?>"> 
								<img src="../img/iconExcluir.png" alt="Excluir" title="Excluir">
							</a>
						</div>
						<div>
							<a href="controles/controlesCategorias/editaDadosCategorias.php?id=<?=$categoria['idcategorias']?>&modo=<?=$modo?>">
								<img src="../img/iconAlterar.png" alt="Alterar" title="Alterar">
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

