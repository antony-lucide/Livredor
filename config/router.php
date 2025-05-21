<?php

use Antony\Livreor\Controllers\LoginController;

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/login':
        $controller = new LoginController();
        $controller->showLoginForm();
        break;

    case '/login/submit':
        $controller = new LoginController();
        $controller->login();
        break;
}

?>