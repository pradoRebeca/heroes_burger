<?php

require_once("functions/config.php");
require_once(SRC ."controles/controlesContatos/exibeDadosContatos.php");

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> Categorias </title>
	<link type="text/css"
      rel="stylesheet"
      href="css/styleDash.css">
</head>

<body>
	<?php require_once("estruturaHtml/header.php");?>
    	<div id="secaoFormulario"> 
			<h2> Contatos </h2>
			<div id="alterarInformacoes">
				<div id="headerInformacoes">
					<div class="itemPesquisa1"> 
						Nome:
					</div>
                    
                    <div class="itemPesquisa2"> 
						E-mail:
					</div>
                    
					<div class="propriedadePesquisa"> 
						Opções:
					</div>
				</div>
                <?php
                    $exibirDados = listarContatos();
			
                    while($returnContato = mysqli_fetch_assoc($exibirDados)){
			
                ?>
				<div class="secaoInformacoes">
					<div class="itemPesquisa1"> 
                        <?=$returnContato['nome']?>
					</div>
                    
                    <div class="itemPesquisa2"> 
					     <?=$returnContato['email']?>
					</div>
					<div class="propriedadePesquisa"> 
						<div>
							<a onclick="return confirm('Tem certeza que deseja excluir?');"
                               href="controles/controlesContatos/excluiDadosContatos.php?id=<?=$returnContato['idcontatos']?>"> 
								<img src="../img/iconExcluir.png" alt="" title="Excluir">
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
