<?php
require_once("functions/config.php");
require_once(SRC ."controles/controlesUsuarios/exibeDadosUsuarios.php");


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
			<form id="frmFormulario" name="frmCategorias" action="controles/controlesUsuarios/recebeDadosUsuarios.php" method="post"> 
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
				<input placeholder="Insira uma Senha" type="password" name="txtSenha" value="" maxlength="15">
				</div>
				
				<div id="buttomFormulario">
					<input type="submit" name="btnCadastrar" value="Cadastrar">
				</div>
			</div>
			</form>
			<div id="alterarInformacoes">
				<div id="headerInformacoes">
					<div class="itemPesquisa1"> 
						Nome do Usuário:
					</div>
                    
                    <div class="itemPesquisa2"> 
						Login: 
					</div>
                    
					<div class="propriedadePesquisa"> 
						Opções
					</div>
				</div>
		          <?php
                        $exibirDados = listarUsuarios();
                        
                        while($usuarios =mysqli_fetch_assoc($exibirDados)){
                
                    ?>
				<div class="secaoInformacoes">
					<div class="itemPesquisa1"> 
					   <?=$usuarios['nome']?>
					</div>
                    
                    <div class="itemPesquisa2"> 
					   <?=$usuarios['login']?>
					</div>
					<div class="propriedadePesquisa"> 
						<div>
							<a onclick="return confirm('Tem certeza que deseja excluir?');"
                               href="controles/controlesUsuarios/excluirDadosUsuarios.php?id=<?=$usuarios['idusuarios']?>"> 
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
                <?php
                        }
                
                ?>
				
			</div>
		</div>
	<?php require_once("estruturaHtml/footer.php");?>
</body>
</html>

