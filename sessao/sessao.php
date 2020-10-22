<?php

session_start();

if (!isset($_SESSION['login'])) {

    header('Location: /PHP-TSI-PHP-2020-2/sessao/');
}