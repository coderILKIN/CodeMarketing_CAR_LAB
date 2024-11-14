<?php

namespace App\Controllers\Front;

use Core\Helper;

class CarController{


    public function index() : void {

        require_once Helper::getViewFile("car");
        
    }



}


?>