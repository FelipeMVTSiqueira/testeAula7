<?php
    $nomeArquivo = "dados.txt";
    $arqAberto = fopen($nomeArquivo, 'r');
    var_dump($arqAberto);
    fwrite($arqAberto,"Agora chega!");
    fclose($arqAberto);
?>