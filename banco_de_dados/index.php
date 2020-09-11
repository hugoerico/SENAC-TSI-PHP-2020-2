<?php

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "php";
	
	//Criar a conexao
    $db = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    $query= mysqli_query($db, 'CREATE TABLE IF NOT EXISTS contatos (id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,nome VARCHAR(255) NOT NULL, whatsapp BIGINT)');

    if ($query) {
        echo "tudo OK";
    }
    else {
        echo "não ta OK: ";

        echo mysqli_connect_error();
    }

$contato = ['nome'=> 'hugo', 'whatsapp'=>'551100000000'];

 

if (mysqli_query($db, "INSERT INTO contatos (nome, whatsapp) VALUES('{$contato['nome']}','{$contato['whatsapp']}')")) {
    echo "tudo OK no contato";
}
else {
    echo "não ta OK no contato ";

   
}
$query= mysqli_query($db,'SELECT id, nome, whatsapp FROM contatos');


var_dump($query->fetch_assoc());

while($registro=$query->fetch_assoc()){
    echo"<tr>
     <td>{$registro['id']}</td>
     <td>{$registro['nome']}</td>
     <td>{$registro['whatsapp']}</td>
     </tr>";
}
if (mysqli_query($db, 'DELETE FROM contatos WHERE id =10')) {
    echo "registro apagado";
}
else{
    echo "não apagou";
}

var_dump($_POST);
