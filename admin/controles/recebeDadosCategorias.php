<?php

require_once("../dataBase/inserirCategoria.php");

if(isset($_POST["btnCadastrar"])){
	$nome = $_POST["txtCategoria"];
	if($nome == null){
		 echo("<script> 
                alert('tudo errado')
            </script>");
	} else {
		 if(inserirCategoria($nome)){
			 echo("banco recebeu");
		 }else{
			 echo("banco ta recebendo não");
		 }
	}
}
	

?>