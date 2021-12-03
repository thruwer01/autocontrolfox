<?php

//path - title - auth

$routes = [
    'main' => ['/index/', 'AutoControlFox - Главная', false],
    'login' => ['/login/', 'AutoControlFox - Авторизация', false],
    '404' => ['/404/', 'AutoControlFox - 404', false],
    'check_qr' => ['/check_qr/', 'AutoControlFox - Проверить QR', true],
    'add_driver' => ['/add_driver/', 'AutoControlFox - Добавить водителя', true],
    'driver_info' => ['/driver_info/', 'AutoControlFox - Информация о водителе', true],
    'logout' => ['/logout/', 'AutoControlFox - Выход', true]
];