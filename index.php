<?php
    $nomeArquivo = "dados.txt";
    $arqAberto = fopen($nomeArquivo, 'r');

    //fwrite($arqAberto,"Agora chega!");
    $tamanho=filesize($nomeArquivo);
    $cont = fread($arqAberto, $tamanho);
    fclose($arqAberto);
    echo $cont;
?>