<?php

session_start();

if (!isset($_SESSION['login'])) {

    header('Location: /SENAC-PHP-TSI-2020-2/logindb/');
}
