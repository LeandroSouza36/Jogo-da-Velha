<?php

$arquivo = 'arquivo.txt';
$conteudo = "Conteudo\r\n";

$arquivoAberto = fopen($arquivo, 'a');
fwrite($arquivoAberto, $conteudo);
fclose($arquivoAberto);