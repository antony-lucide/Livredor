<?php

namespace Antony\Livreor\Controllers;

class HomeController {
    public function index() {
        session_start();
        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
        } else {
            $username = null;
        }
        include __DIR__ . '/../../../view/Home.php';
    }
}
?>