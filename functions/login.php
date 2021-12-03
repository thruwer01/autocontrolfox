<?php
session_start();
include_once $_SERVER['DOCUMENT_ROOT'] . '/static/config.php';

$login = $_POST['login'];
$password = $_POST['password'];

if (!$config["LOGIN"] == $login) {
    return false;
}

if (!$config["PASSWORD"] == $password) {
    return false;
}

$_SESSION['auth'] = true;
header('Location: /');