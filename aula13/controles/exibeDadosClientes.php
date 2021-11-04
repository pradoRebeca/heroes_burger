<?php
/*  Objetivo: Listar ou buscar os dados dos clientes.
    Data: 23/09/2021
    Autor: Rebeca Nascimento Prado
*/
require_once(SRC.'bd/listarCliente.php');

function exibirClientes(){
    //chama a função que busca os dados no banco e recebe os registros de clientes
    $dados = listar();
    
    return $dados;
}


?>