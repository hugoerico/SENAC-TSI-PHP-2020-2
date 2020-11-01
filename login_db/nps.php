<?php

var_dump($_POST);

require 'sessao.php';

include 'header_tpl.php';
include 'index_menu_tpl.php';

session_start();

$nota = $_POST['nota'];
$explicacao = $_POST['registronota'];

$registroavaliacao = $objBanco->prepare('	INSERT INTO avaliacoes 
									( nota, registronota)
								VALUES 
									( :nota, :textonota)');


$registroavaliacao->bindParam(':nota', $_POST['nota']);
$registroavaliacao->bindParam(':textonota', $_POST['registronota']);


if ($registroavaliacao->execute()) {

	echo  '<br><br>Avaliação gravada com sucesso!';
} else {

	echo '<br><br> :-( deu erro, tente novamente! ';
}




echo '<br><br><a href="./agradecimento.php?nota=' . $nota . '">Seguir</a>';

include 'footer_tpl.php';