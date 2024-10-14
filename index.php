<?php

include('Controllers/UserController.php');

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) {
    case '/':
        echo 'home page';
        break;
    
    case '/user':
        UserController::index();
        break;

    case '/user/form':
        UserController::form();
        break;

    case '/user/form/save':
        UserController::save();
        break;

    default:
        echo '404';
        break;
}
