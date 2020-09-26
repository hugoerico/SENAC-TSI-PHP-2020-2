<?php

require_once "db.php";

$objStmt = $objBanco->prepare('INSERT INTO contatos
(nome, whatsapp) Value(:nome ,:wzap )');


$objStmt->bindParam(':nome',$_POST['nome']);
$objStmt->bindParam(':wzap',$_POST['whats']);

if($objStmt->execute()){

    $msg='obrigado';
}
else{
    $msg='não deu';
}

include "grava_contato_tpl.php";