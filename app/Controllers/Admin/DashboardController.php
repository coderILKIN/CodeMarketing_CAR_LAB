<?php

namespace App\Controllers\Admin;

use Core\Helper;

class DashboardController
{

    public function index(): void
    {
        

        $user = $_SESSION['user'];

        // İstifadəçinin rolunu götürmək
        $role = $user['role'];
        
        // Əgər rol 'admin' deyilsə, yönləndirin
        if ($role !== 'admin') {
            header("Location: /");
            exit;
        }

     


        require_once Helper::getAdminViewFile("dashboard");
    }
}
