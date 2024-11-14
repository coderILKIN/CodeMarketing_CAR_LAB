<?php

namespace App\Controllers\Admin;

use Core\Helper;
use App\Model\Blog;

class BlogcreateController
{

    public function index(): void
    {

        if($_SERVER['REQUEST_METHOD'] == "POST"){

            $title = $_POST['title'];
            $paragraph = $_POST['paragraph'];
            $image = $_POST['image'];
            $published_date = $_POST['published_date'];



            Blog::create($title, $paragraph, $image, $published_date);


        }

        require_once Helper::getAdminViewFile("blogcreate");
    }

   
}
