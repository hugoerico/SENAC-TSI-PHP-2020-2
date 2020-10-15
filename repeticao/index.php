<?php

//exemplo de for
for ($i=0; $i<5; $i++){

    echo "linha: $i <br>";
}

// exemplo de while
$i=0;
while($i <5){

    echo "linha:$i <br>";

    $i++;
}

//exemplo de do while
$i=0;
do{
    echo "linha:$i <br>";
    $i++;

} while($i<5);

$domingo =0;
$segunda =1;
$terca   =2;
$quarta  =3;
$quinta  =4;
$sexta   =5;
$sabado  =6;

var_dump (date('d/m/Y')); //para fazer o debug

if (date('w')== 4){
    echo "quinta";
}

switch( date('w')){
    case $domingo:
        echo 'domindo';
    break;

    case $segunda:
        echo 'segunda';
    break;

}

$semana[0]= 'domingo';
$semana[1]= 'segunda';
$semana[2]= 'terça';
$semana[3]= 'quarta';
$semana[4]= 'quinta';
$semana[5]= 'sexta';
$semana[6]= 'sabado';

$hoje= date('w');

echo "hoje é" . $semana[$hoje];