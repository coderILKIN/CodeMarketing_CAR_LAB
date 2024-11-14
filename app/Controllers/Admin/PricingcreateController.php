<?php

namespace App\Controllers\Admin;

use App\Model\Pricing;
use Core\Helper;

class PricingcreateController{


    public function index(): void{


        if($_SERVER['REQUEST_METHOD'] == "POST"){

            $image = $_POST['image'];
            $name = $_POST['name'];
            $perhour_price = $_POST['perhour_price'];
            $perday_price = $_POST['perday_price'];
            $permonth_price = $_POST['permonth_price'];



            Pricing::create($image,$name,$perhour_price, $perday_price, $permonth_price);


        }




       require_once Helper::getAdminViewFile("pricingcreate");
        
    }
}


?>