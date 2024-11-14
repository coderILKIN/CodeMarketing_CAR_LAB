<?php

namespace App\Controllers\Admin;

use Core\Helper;

class CarupdateController{

    public function index() {
        

        require_once Helper::getAdminViewFile("carupdate");
        
    }

}



?>