<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link type="text/css"
      rel="stylesheet"
      href="css/style.css">
<title> Autenticar </title>
</head>

<body>
	<main> 
		<form name="frmLogin" id="frmlogin" action="autenticar.php" method="post"> 
			<h2> Autenticação para o CMS</h2>
			<h3> Heroes Burger</h3>
			<div class="campoTexto"> 
				<label> Usuario: </label>
				<input type="text" name="txtLogin" value="" placeholder="Digite seu usuario" maxlength="15"> 
			</div>
			<div class="campoTexto"> 
					<label> Senha: </label>
				<input type="password" name="txtSenha" value="" placeholder="Digite sua senha"> 
			</div>
			<div id="btnEntrar"> 
				<input type="submit" value="Autenticar" name="btnEntrar">
			</div>
		</form>
	</main>
</body>
</html>