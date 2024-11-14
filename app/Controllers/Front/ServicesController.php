<?php


namespace App\Controllers\Front;

use Core\Helper;


class ServicesController{


    public function index() : void {

        require_once Helper::getViewFile("services");
        
    }


}




?>