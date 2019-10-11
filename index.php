<?php
    $nomeArquivo = "dados.txt";
    $arqAberto = fopen($nomeArquivo, 'w');
    fwrite($arqAberto,"Olá mundo!");
    fclose($arqAberto);
?>