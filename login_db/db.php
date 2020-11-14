<?php

//$dsn = 'mysql:dbname=cmswp;host=localhost'; //trocar dockerhost para localhost

//Tutorial para instalação dos drivers: 
//https://hcode.com.br/blog/instalando-sql-server-e-conectando-com-php

//DSN para SQL Server
$dsn = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=exemplo';
$user = 'exemplo';
$password = 'exemplo';

//Como se conectar com o banco
$db = new PDO($dsn, $user, $password);
