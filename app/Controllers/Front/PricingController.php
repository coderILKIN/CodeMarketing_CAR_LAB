<?php 

namespace App\Controllers\Front;

use Core\Helper;


class PricingController{

    public function index() : void {

        require_once Helper::getViewFile("pricing");
        
    }

    


}




?>