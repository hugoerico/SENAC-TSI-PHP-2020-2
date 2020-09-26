<?php

require_once "config.php";

$objBanco = new PDO(DSN, DB_USER, DB_PASS);

$consulta = $objBanco ->query("SELECT id, nome, whatsapp FROM contatos",PDO::FETCH_ASSOC);

foreach($consulta as $registro){

    echo "ID: {$registro['id']}
    NOME: {$registro['nome']}<br>
    WZAP: {$registro['whatsapp']}<br>";
}

$objBanco ->query("DELETE FROM contatos WHERE id = 10");
$objBanco ->query("UPDATE contatos SET nome='cachorro',whatsapp='444444444' WHERE id = 11");
$objBanco ->query("INSERT INTO contatos (nome, whatsapp) VALUES ('erico','55555555')");


$nome= $_POST['nome'];
$whatsapp= $_POST['whats'];
$objBanco ->query("INSERT INTO contatos (nome, whatsapp) VALUES ('$nome','$whats')");