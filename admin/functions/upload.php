<?php
/*
Objetivo:Arquivo para fazer upload de imagens
Data: 01/12/21
Autor: Rebeca Nascimento Prado 
*/


/*função para fazer upload de arquivos*/
function uploadFile($arrayFile){  
  
    $fotoFile = $arrayFile;
    $tamanhoOrginal = (int) 0;
    $tamanhoKB = (int) 0;
    $extensao = (string) null;
    $tipoArquivo = (string) null;
    $nomeArquivo = (string) null;
    $nomeArquivoCript = (string) null;
    $foto = (string) null;
    $arquivoTemp = (string) null;
    

    if($fotoFile['size'] > 0 && $fotoFile['type'] != ""){
  
        $tamanhoOrginal = $fotoFile['size'] ;

        $tamanhoKB = $tamanhoOrginal/1024;
       
        $tipoArquivo = $fotoFile['type'];
        
        if($tamanhoKB <= TAMANHO_FILE){
            if(in_array($tipoArquivo, EXTENSOES_PERMITIDAS_FILE)){
               
                $nomeArquivo = pathinfo($fotoFile['name'], PATHINFO_FILENAME);
                $extensao = pathinfo($fotoFile['name'], PATHINFO_EXTENSION);

                $nomeArquivoCript = md5($nomeArquivo.uniqid(time()));
                $foto = $nomeArquivoCript . '.' . $extensao;

                $arquivoTemp = $fotoFile['tmp_name'];
				
                if(move_uploaded_file($arquivoTemp, SRC.NOME_DIRETORIO_FILE.$foto)){
                    return $foto;
                } else {
                    echo("erro no upload do arquivo");
                }

            } else {
               echo('extensão do arquivo não foi permitida'); 
            }
        } else {
            echo('deu ruim no tamanho');
        }
        
    }
}

?>