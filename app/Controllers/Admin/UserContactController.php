<?php 

namespace App\Controllers\Admin;

use Core\Helper;

class UserContactController{

    public function index(){

        require_once Helper::getAdminViewFile("usercontact");
        
    }
}


?>