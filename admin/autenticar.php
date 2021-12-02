<?php

    require_once('functions/config.php');
    require_once('dataBase/conexaoMysql.php');

// Declaração de Variaveis
    $login = (string) null;
    $senha = (string) null;

    // Recebe os dados via POST do form de login
    $login = $_POST['txtLogin'];
    $senha = $_POST['txtSenha'];

    if($login != "" && $senha != "")
    {
        $sql = "select * from tblusuarios 
        where login = '".$login."' and 
              senha = '".$senha."'";
              
        $conexao = conexaoMysql();

        $select = mysqli_query($conexao, $sql);

        if($rsUsuario = mysqli_fetch_assoc($select))
        {
            // Ativa o uso de variavel de sessão 
            session_start();
            $_SESSION['nomeUsuario'] = $rsUsuario['nome'];
            $_SESSION['statusLogin'] = true;

            // Permite redirecionar para uma página
            header('location: dashboard.php');
        
        }         
        else
            echo(ERRO_USUARIO);
    }
			 echo(ERRO_CAMPO_VAZIO);
?>