<?php
namespace Antony\Livreor\Model;

use Antony\Livreor\Database\Database;

class LoginModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function authenticate($username, $password)
    {
        $statement = $this->db->prepare("SELECT * FROM users WHERE username = :username");
        $statement->bindParam(':username', $username);
        $statement->execute();

        $user = $statement->fetch(\PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password_hash'])) {
            return true; 
        }

        return false; 
    }
}



?>