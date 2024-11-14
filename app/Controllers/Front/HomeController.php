<?php

namespace App\Controllers\Front;

use Core\Helper;

class HomeController{


    public function index() : void {

       require_once Helper::getViewFile("home");
    }



}



?>