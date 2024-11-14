<?php

namespace App\Controllers\Admin;

use Core\Helper;
use App\Model\Blog;

class BlogupdateController
{

    public function index(): void
    {


        require_once Helper::getAdminViewFile("blogupdate");
    }

   
}
