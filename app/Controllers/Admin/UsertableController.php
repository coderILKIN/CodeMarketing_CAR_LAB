<?php

namespace App\Controllers\Admin;

use Core\Helper;

class UsertableController{

    public function index(){

        require_once Helper::getAdminViewFile("usertable");
        
    }


}



?>