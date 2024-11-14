<?php

namespace App\Controllers\Admin;

use Core\Helper;
use App\Model\Blog;

class EditblogController
{

    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            // Yalnız form göndərildikdə məlumatları götürmək
            if (isset($_POST['id'], $_POST['image'], $_POST['title'], $_POST['paragraph'], $_POST['published_date'])) {

                $id = $_POST['id'];            // Avtomobilin ID-sini alırıq
                $image = $_POST['image'];      // Şəkil (URL və ya yol)
                $title = $_POST['title'];        // Avtomobilin adı
                $paragraph = $_POST['paragraph'];      // Avtomobilin modeli
                $published_date = $_POST['published_date'];      // Avtomobilin qiyməti
               

                // Burada sahələrin boş olub-olmamasını yoxlaya bilərsiniz
                if (empty($image) || empty($title) || empty($paragraph) || empty($published_date)) {
                    echo "<p style='color:red;'>Bütün sahələri doldurun!</p>";
                } else {
                    // Məlumatları verilənlər bazasında yeniləyirik
                    Blog::update($id,$title,$paragraph,$image, $published_date);
                    echo "<p style='color:green;'>Blog məlumatları uğurla yeniləndi.</p>";
                }
            } 
            // else {
            //     echo "<p style='color:red;'>Formda səhv var. Bütün məlumatları düzgün göndərin.</p>";
            // }
        }

        // Admin görünüşünü yükləyirik
        require_once Helper::getAdminViewFile("editblog");
    }
}
