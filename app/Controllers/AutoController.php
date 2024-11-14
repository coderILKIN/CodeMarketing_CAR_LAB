<?php


namespace App\Controllers;

use App\Model\User;
use Core\Helper;

class AutoController
{


    public function Login()
    {

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $email = trim($_POST['email']);
            $password = $_POST['password'];

            $user = User::getUserByEmail($email, $password);

            if (!$user) {
                echo "User Not Found";
                die();
            }

            if (!password_verify($password, $user['password'])) {
                echo "Password is wrong";
                die();
            }

            $_SESSION['user'] = $user;

            
            $role = $user['role'];
            
            
            if ($role !== 'admin') {
                header("Location: /");
                exit;
            }

            header("Location: /admin");
            exit();
        }

        require_once Helper::getViewFile("login");
    }


    public function Register()
    {

        if (isset($_SESSION['user'])) {
            echo "You already logged in";
            return;
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $password = $_POST['password'];

            $user = User::create($name, $email, $password);

            if ($user) {
                echo "OK";
            } else {
                echo "FAIL";
            }

            header("Location: login");
            exit();
        }

        require_once Helper::getViewFile("register");
    }



    public function logout()
    {

        $_SESSION['user'] = null;
        session_destroy();
        echo "You have been logged out";
    }
}
