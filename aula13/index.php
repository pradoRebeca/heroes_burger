<?php
    //import do arquivo de configuração de variaveis e constatantes
    require_once("functions/config.php");

    require_once(SRC.'bd/conexaoMysql.php');
    require_once(SRC.'controles/exibeDadosClientes.php');


 //Ativa a utilização de variaveis de sessão
    session_start();

    //Declaração das variaveis para o formulário
    $nome = (string) null;
    $telefone = (string) null;
    $celular = (string) null;
    $rg = (string) null;
    $cpf = (string) null;
    $email = (string) null;
    $obs = (string) null;
    $id = (int) 0;
     //Essa variavel será utilizada para definir o modo de manipulação com o banco de dados 
    // Salvar -> será feito o insert
    // Atualizar -> será feito o update
    $modo = (string) "Salvar";

    //import do arquivo de configuração de variaveis e constantes
    require_once('functions/config.php');

    //require_once(SRC.'bd/conexaoMysql.php');
    //conexaoMysql();
	require_once(SRC.'controles/exibeDadosClientes.php');


    //verifica a existencia da variavel session que usamos para trazer os dados do editar
    if(isset($_SESSION['cliente']))
    {
        
        $id = $_SESSION['cliente']['idcliente'];
        $nome = $_SESSION['cliente']['nome'];
        $telefone = $_SESSION['cliente']['telefone'];
        $celular = $_SESSION['cliente']['celular'];
        $email = $_SESSION['cliente']['email'];
        $rg = $_SESSION['cliente']['rg'];
        $cpf = $_SESSION['cliente']['cpf'];
        $obs = $_SESSION['cliente']['obs'];
        $modo = "Atualizar";
        //Elimina um objeto, variavel da memória
        unset($_SESSION['cliente']);
        
    }
        
?>

<!DOCTYPE>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Cadastro </title>
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <script src="js/jquery.js"> </script>
        <script> 
            $(document).ready(function(){
                $("#containerModal").css("display", "flex")
               $(".pesquisar").click(function(){
                   $("#containerModal").fadeIn(1000);
               })
                
                $("#fecharModal").click(function(){
                    $("#containerModal").fadeOut();
                })
            });
        </script>
    </head>
    <body>
        <div id="containerModal">
            <span id="fecharModal"> X </span>
            <div id="modal">
            
            </div>
        </div>
        <div id="cadastro"> 
            <div id="cadastroTitulo"> 
                <h1> Cadastro de Contatos </h1>
            </div>
            <div id="cadastroInformacoes">
                <!--    principais elementos de formulario para HTML5:
                <input type = "tel"> indica qe a caixa recebe uma teleone
                <input type = "email"> indica que a caixa receba um elemento mínimo necessario par4a ser considerado um email
                <input type = "url"> ndica qe a caixa receba uma URL valida
                <input type = "number"> indica que a caixa recebe    números inteiros
                <input type = "ranger"> cria um elemento tipo barra de rolagem horizontal 
                <input type = "color"> permite que o usuario escolha cores
                <input type = "date"> cria um calendario para escolha de data
                <input type = "month"> cria um calendario para escolha somente do mes e ano
                <input type = "month"> cria um calendario para escolha somente do mes e ano
                <input type = "week"> cria um calendario que retorna a quantidade de semana no ano
                <input type = "time"> cria um calendario que retorna o horario
                -->
                
                <!-- As variaveis modo e id, foram utilizadas no action do form, são     responsaveis por encaminharem para a pagina recebeDadodClientes.php duas informações: 
                modo -> que é responsavel por se é para inserir ou atualizar
                id -> que é responsavel que por identificar o registro a ser atualizado 
                -->
                <form action="controles/recebeDadosClientes.php?modo=<?=$modo?>&id=<?=$id?>" name="frmCadastro" method="post" >
                   
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <label> Nome: </label>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input type="text" name="txtNome" value="<?=$nome?>" placeholder="Digite seu Nome">
                        </div>
                    </div>
                    
                     <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <label> RG: </label>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input type="text" name="txtRg" value="<?=$rg?>" placeholder="Digite seu RG">
                        </div>
                    </div>
                    
                     <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <label> CPF: </label>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input type="text" name="txtCpf" value="<?=$cpf?>" placeholder="Digite seu CPF">
                        </div>
                    </div>
                    
                     <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <label> Telefone: </label>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input type="tel" name="txtTelefone" value="<?=$telefone?>">
                        </div>
                    </div>
                    
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <label> Celular: </label>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input type="tel" name="txtCelular" value="<?=$celular?>">
                        </div>
                    </div>
                    
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <label> Email: </label>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input type="email" name="txtEmail" value="<?=$email?>">
                        </div>
                    </div>
                    
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <label> Observações: </label>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <textarea name="txtObs" cols="50" rows="7"><?=$obs?></textarea>
                        </div>
                    </div>
                    
                    <div class="enviar">
                        <div class="enviar">
                            <input type="submit" name="btnEnviar" value="<?=$modo?>">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div id="consultaDeDados">
            <table id="tblConsulta" >
                <tr>
                    <td id="tblTitulo" colspan="5">
                        <h1> Consulta de Dados.</h1>
                    </td>
                </tr>
                <tr id="tblLinhas">
                    <td class="tblColunas destaque"> Nome </td>
                    <td class="tblColunas destaque"> Celular </td>
                    <td class="tblColunas destaque"> Email </td>
                    <td class="tblColunas destaque"> Opções </td>
                </tr>
                <?php
                    $dadosClientes = exibirClientes();
                    //mysqli_fetch_assoc -> converter o formato de transferEncia de dados do banco 
                    while($rsClientes=mysqli_fetch_assoc($dadosClientes))
                    {
                ?>
                <tr id="tblLinhas">
                    <td class="tblColunas registros"> <?=$rsClientes['nome']?> </td>
                    <td class="tblColunas registros"> <?=$rsClientes['celular']?> </td>
                    <td class="tblColunas registros"> <?=$rsClientes['email']?> </td>
                    <td class="tblColunas registros">
                        <a href="controles/editaDadosClientes.php?id=<?=$rsClientes['idcliente']?>">
                             <img src="img/edit.png" alt="Editar" title="Editar" class="editar">
                        </a>
                       
                        <a onclick="return confirm('Tem certeza que deseja excluir?');" href="controles/excluiDadosClientes.php?id=<?=$rsClientes['idcliente']?>">
                            <img src="img/trash.png" alt="Excluir" title="Excluir" class="excluir">
                        </a>
                        <img src="img/search.png" alt="Visualizar" title="Visualizar" class="pesquisar">
                    </td>
                </tr>
                <?php 
                    }
                ?>
            </table>
        </div>
    </body>
</html>