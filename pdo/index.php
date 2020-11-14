<?php

require_once 'db.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



$objBanco = new PDO($dsn, $user, $password);


// var_dump($db);

$sql = 'SELECT nome, telefone FROM cliente';
foreach ($$objBanco->query($sql) as $registro) {
    echo "Nome:{$registro['nome']} Telefone: {$registro['telefone']}<br>" . PHP_EOL;
}