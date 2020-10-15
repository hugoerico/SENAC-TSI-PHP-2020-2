<?php

require_once 'db.php';


$id = preg_replace('/\D/', '', $_GET['id']);

if ( $objBanco->exec("DELETE FROM contatos WHERE id = $id") !== false ) {

	$msg = ' sucesso';

} else {

	$msg = 'errooou';
}

include 'apaga_contato.tpl.php';