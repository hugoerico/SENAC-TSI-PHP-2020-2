<?php

require_once "config.php";


try {
    $objBanco = new PDO(DSN, DB_USER, DB_PASS);


} catch (PDOException $objErro)  {

    echo "SGND Indisponível:" . $objErro->getMessage();

    exit();
    
}