
  <?php
date_default_timezone_set('America/Sao_Paulo');

//Vetor
$semana[0] = 'Domingo';
$semana[1] = 'Segunda';
$semana[2] = 'Terça';
$semana[3] = 'Quarta';
$semana[4] = 'Quinta';
$semana[5] = 'Sexta';
$semana[6] = 'Sábado';

$hoje = date('w');

echo "Hoje é " . $semana[$hoje];

echo "<br>";

unset($semana);

//Vetor com indice alfanumérico
$semana['Sunday'] = 0;
$semana['Monday'] = 1;
$semana['Tuesday'] = 2;
$semana['Wednesday'] = 3;
$semana['Thursday'] = 4;
$semana['Friday'] = 5;
$semana['Saturday'] = 6;

$hoje = date('l');

echo "Hoje é " . $semana[$hoje] . " com indice alfanumérico";

echo "<br>";

$usuario = [
    'nome'     =>     'Luiz Bono',
    'idade'    =>    25,
    'peso'    =>    67.8,
    'signo'    =>    'aquariano'
];

echo "<br>";

echo "O Professor " . $usuario['nome'] . " tem " . $usuario['idade'] . " anos, pesa " . $usuario['peso'] . "Kg e é " . $usuario['signo'];

//Constantes
define('MUNDO', 'Raimundo Nonato');

define('RES_P_PAG', 10);

for ($i = 0; $i < RES_P_PAG; $i++) {
    echo "Resultado $i <br>";
}

echo "<br>";

echo "Olá " . MUNDO . "<br>";

//Mostrando vetor dentro de string especial ("")
echo "O professor {$usuario['nome']} tem {$usuario['idade']}, pesa " . number_format($usuario['peso'], 2, ',', '.') . "Kg e é {$usuario['signo']} <br><br>";


$professores2 = array(

    0 => array(
        'nome'   =>   'Luiz Bono',
        'idade'  =>  25,
        'peso'  =>  67.8,
        'signo'  =>  'aquariano'
    ),


    1 => array(
        'nome'   =>   'Thiago Claro',
        'idade'  =>  27,
        'peso'  =>  70.7,
        'signo'  =>  'geminiano'
    ),
    3 => array(
        'nome'   =>   'Thiago Quintas',
        'idade'  =>  21,
        'peso'  =>  62.4,
        'signo'  =>  'leonino'
    )
);

var_dump($professores2);

?>
<table border="1">
<tr> <td>ID</td> <td>nome</td> <td>idade</td> <td>Peso</td>
<td>Signo</td>
</tr>
<?php

// matriz
    foreach ($professores2 as $linha => $professor) {
            echo "<tr>  <td>$linha</td>
                        <td>{$professor['nome']}</td>
                        <td>{$professor['idade']}</td>
                        <td>{$professor['peso']}</td>
                        <td>{$professor['signo']}</td>
            </tr>";
    }

?>
</table>