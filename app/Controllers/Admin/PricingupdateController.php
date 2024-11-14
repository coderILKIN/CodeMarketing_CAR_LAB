<?php


namespace App\Controllers\Admin;

use Core\Helper;

class PricingupdateController{

    public function index(){


        require_once Helper::getAdminViewFile("pricingupdate");
        
    }


}



?>