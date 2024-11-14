<?php 

namespace App\Controllers\Front;

use Core\Helper;

class AboutController{

    public function index() : void {
        require_once Helper::getViewFile("about");
    }

}


?>