<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/* Connect to a MySQL database using driver invocation */
$dsn = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=exemplo';
$user = 'exemplo';
$password = 'exemplo';



$db = new PDO($dsn, $user, $password);


// var_dump($db);

$sql = 'SELECT nome, email FROM cadastro';

$r = $db->query($sql);

echo'<pre>';

while($reg = $r-> fetch(PDO::FETCH_ASSOC)){

    echo "Sr(a) {$reg['nome']}, seu email {$reg['email']} será bloqueado se a conte não for paga \n\n";
}

if ($db-> query('DELETE FROM cadastro WHERE id=2')){

    echo "top";
}
else{
    echo "errooouu";
}


foreach ($db->query($sql) as $registro){
    echo "Nome:{$registro['nome']} Email: {$registro['email']}<br>";
}

//Como fazer um UPDATE
if ( $db->query('UPDATE cadastro SET nome = "erico" WHERE id = 1') ) {
	echo " atualizado com ";

} else {

	echo "errrrrrouuuuuuuuuuuu";
}

//Como fazer um SELECT
foreach ($db->query($sql) as $registro){
    echo "Nome:{$registro['nome']} Email: {$registro['email']}<br>";
}

//Como fazer um INSERT
if ( $db->query('INSERT INTO cadastro (id, nome, email) VALUES (1, "Hugo Erico", "hugo@hugo.com")') ) {

	echo "sucesso!";

} else {

	echo "Errouuuuuuuuuuuuuu ";
}

//Como fazer um SELECT
foreach ( $db->query($sql) as $registro ) {

	echo "Sr(a) {$registro['nome']}, seu Email {$registro['email']} será bloqueado ";
     }