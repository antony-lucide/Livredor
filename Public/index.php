<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/router.php';

use Antony\Livreor\Controller\HomeController;

$controller = new HomeController();
$controller->index();



?>