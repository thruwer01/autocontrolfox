<?php
header('Content-Type: application/json');
session_start();

include_once $_SERVER['DOCUMENT_ROOT'] . '/functions/db.php';

if ($_SESSION['auth']) {

    $number = $_GET['number'];

    $get_driver = $db->query("SELECT * FROM `drivers` WHERE `number` = '$number'")->fetch_assoc();

    echo json_encode($get_driver);
}