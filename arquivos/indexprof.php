<?php

$fp = fopen('planilha.csv', 'w');

fwrite($fp, "nome;Telefone\r\n");
fwrite($fp, "Eduardo;eheheheh\r\n");

fclose($fp);

echo 'Arquivo Gerado';




$fp = fopen('planilha.csv', 'a');

fwrite($fp, "Marcel;119999999\r\n");
fwrite($fp, "bonao;119999999\r\n");
fwrite($fp, "ddddd;119999999\r\n");

fclose($fp);

echo 'Arquivo Gerado\r\n';

echo "veja o conteudo do arquivo \r\n";

$fp = fopen('planilha.csv', 'r');

while ($linha = fgets($fp)) {

    echo $linha;
}
