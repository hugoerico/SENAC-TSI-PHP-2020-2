<?php

require_once "db.php";

$nome			    = $_POST['nome'];
$whatsapp		        = $_POST['whats'];

$objStmt = $objBanco->prepare("INSERT INTO contatos Value('$nome', '$whatsapp');");




include "grava_contato_tpl.php";