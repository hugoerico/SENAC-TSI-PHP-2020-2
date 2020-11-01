<?php

$dsn = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=exemplo';
$user = 'exemplo';
$password = 'exemplo';

//Como se conectar com o banco
$db = new PDO($dsn, $user, $password);