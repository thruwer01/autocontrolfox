<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/functions/db.php';

session_start();

if ($_SESSION['auth']) {

    //add driver into database

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $thirdname = $_POST['thirdname'];
    $number = $_POST['number'];
    $phone_number = $_POST['phone_number'];
    $resolution = $_POST['resolution'] == 'on' ? true : false;

    $db->query("INSERT INTO `drivers` SET
                                        `name` = '$name',
                                        `surname` = '$surname',
                                        `thirdname` = '$thirdname',
                                        `number` = '$number',
                                        `phone_number` = '$phone_number',
                                        `resolution` = '$resolution'
                                        ");
    $_SESSION['msg'] = "Водитель $surname $name $thirdname успешно добавлен";
    header('Location: /add_driver');
}