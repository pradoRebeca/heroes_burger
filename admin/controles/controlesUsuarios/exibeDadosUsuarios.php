<?php
/*
Obejteivo: Arquivo para exibir os dados do formulario dashboardUsuarios;
Data: 28/10/2021
Autor: Rebeca Nascimento Prado 
*/

require_once(SRC . "dataBase/dbUsuarios/exibirUsuarios.php");

function listarUsuarios(){
    $dados = listar();
    
    return $dados;
}


?>