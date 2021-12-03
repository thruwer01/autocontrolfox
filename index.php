<?php 
session_start();
include_once $_SERVER['DOCUMENT_ROOT'] . '/routes.php';

$need_page = str_replace('/', '' , $_GET['q'] !== null ? $_GET['q'] : 'main');

if ($routes[$need_page]) {
    $page_config = $routes[$need_page];
    $page_path = $page_config[0];
    $title = $page_config[1];
    $need_auth = $page_config[2];

    //check page auth needed
    if ($need_auth == true && $_SESSION['auth'] == false) {
        header('Location: /login');
    }

    //include page files
    if ($need_page !== 'logout') {
        include_once $_SERVER['DOCUMENT_ROOT'] . '/components/header.php';
        include_once $_SERVER['DOCUMENT_ROOT'] . '/templates' . $page_path . 'index.php';
        include_once $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php';
    } else {
        include_once $_SERVER['DOCUMENT_ROOT'] . '/templates' . $page_path . 'index.php';
    }
    

} else {
    header('Location: /404');
}
