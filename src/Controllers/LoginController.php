<?php

namespace Antony\Livreor\Controllers;

use Antony\Livreor\Model\LoginModel;

/**
 * LoginController handles user login functionality.
 */
class LoginController
{
    private $loginModel;

    public function __construct()
    {
        $this->loginModel = new LoginModel();
    }

    public function showLoginForm()
    {
        include __DIR__ . '/../../../view/Login.php';
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
            $password = $_POST['password'];

            if ($this->loginModel->authenticate($username, $password)) {
                session_start();
                $_SESSION['username'] = $username;

                header('Location: /home');
                exit;
            } else {
                $error = 'Invalid username or password.';
                include __DIR__ . '/../../../view/Login.php';
            }
        }
    }
}
?>
