<?php

namespace App\Controllers\Front;

use Core\Helper;

class UserController{

    public function profile(){

        $user = $_SESSION['user'];

        require_once Helper::getViewFile("profile");
        
    }

}


?>