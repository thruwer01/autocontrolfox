<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tabler/core@1.0.0-beta4/dist/js/tabler.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/@tabler/core@1.0.0-beta4/dist/css/tabler.min.css">
    <title><?=$title?></title>
</head>
<body>
<header class="navbar navbar-expand-md navbar-light d-print-none">
    <div class="container-xl">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
        <img src="/static/logo.svg" height="32" alt="Главная" class="navbar-brand-image">
        <div class="px-1">
            AutoControlFox.ru
        </div>
    </h1>
    <div class="navbar-nav flex-row order-md-last">
        <div class="nav-item dropdown d-none d-md-flex me-3">
            <li class="nav-item">
                <?php
                    if ($_SESSION['auth']) {
                        $log_path = '/logout';
                        $log_title = 'Выйти';
                    } else {
                        $log_path = '/login';
                        $log_title = 'Войти';
                    }
                ?>
                <a class="nav-link" href="<?=$log_path?>">
                    <span class="nav-link-title">
                        <?=$log_title?>
                    </span>
                </a>
            </li>
        </div>
    </div>
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/">
                    <span class="nav-link-title">
                        Главная
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/add_driver">
                    <span class="nav-link-title">
                        Добавить водителя
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/check_qr">
                    <span class="nav-link-title">
                        Проверить QR
                    </span>
                </a>
            </li>
        </ul>
        </div>
    </div>
    </div>
</header>