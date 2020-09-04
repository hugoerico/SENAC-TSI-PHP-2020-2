<?php

function operacao (int $num1, float $num2, string $operacao = '+'): float
{
   switch ($operacao) {
       case '+':

        return $num1 +$num2;

       case '-':
           
           return $num1 - $num2;

        case '/':

            return $num1 / $num2;

        case '/':

            return $num1 * $num2;

        default:

            return 0.0;
   }
}

echo "<br>" . operacao(2.5, 2.5, '*') . "<br>";


function dia_da_semana(int $dia): string
{
    $semana = ['domingo','segunda','terça','quarta','quinta','sexta','sabado'];

    return $semana[$dia] ?? 'use de 0 a 6';
}
echo "o dia da semana é " . dia_da_semana(0);

$nome = 'Bono';

//Passagem de parâmetro por referência, o & ;-) (muda o valor da variável fora do escopo da função)
function muda_nome( string &$var ): string 
{
	$var = 'Outro nome';
	return $var;
}

function exemplo( $param1, $param2 )
{
	return 'Isso também funciona';	
}

echo "A função retornará: " . muda_nome($nome) . "";

echo "A variável \$nome ainda vale: \"$nome\"";