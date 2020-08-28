<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$clima = 'gelado';

//condicional if
if($clima =='gelado'){
    echo "<br>  geladooo";
}

$boll ='1';

//condicional operador ternario

$var = $boll ==1 ? '$bool é igual de 1' : '$boll é diferente de 1';

echo $var . '<br>';

$var = $boll ===1 ? '$bool é igual de 1' : '$boll é diferente de 1';

echo $var . '<br>';

$var = $boll !=1 ? '$bool é igual de 1' : '$boll é diferente de 1';

echo $var . '<br>';

$var = $boll !==1 ? '$bool é igual de 1' : '$boll é diferente de 1';

echo $var . '<br>';

$frase = 'meu pai tinha um cachorro amarelo e rosa';

//if comparador
if(strpos($frase, 'cachorro')){
    echo "achou a cachorro";
}
else{
    echo "tem cachorro nao";
}

if(strpos($frase, 'meu')!== false){
    echo "<br>achou a cachorro";
}
else{
    echo "<br>tem cachorro nao";
}

//switch

switch ($clima){
    case 'quente':
    case 'tropical':

        echo 'adoro clima quente';

    break;

    case 'morno':

        echo 'morno é top';
        
    break;

    case 'frio':

        echo 'frio é top top';
        
    break;

    default:

          echo 'clima não encontrado ';
        
    break;

}
$isso = 'vei';
//condicional nova no php
$isso = $isso ?? 'coisa';
echo " <br>olha só $isso";
