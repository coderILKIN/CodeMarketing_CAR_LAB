<?php

namespace App\Controllers\Admin;

use Core\Helper;
use App\Model\Car;

class EditcarController
{

    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            // Yalnız form göndərildikdə məlumatları götürmək
            if (isset($_POST['id'], $_POST['image'], $_POST['name'], $_POST['model'], $_POST['price'], $_POST['status'])) {

                $id = $_POST['id'];            // Avtomobilin ID-sini alırıq
                $image = $_POST['image'];      // Şəkil (URL və ya yol)
                $name = $_POST['name'];        // Avtomobilin adı
                $model = $_POST['model'];      // Avtomobilin modeli
                $price = $_POST['price'];      // Avtomobilin qiyməti
                $status = $_POST['status'];    // Avtomobilin statusu (mövcud/unavailable)

                // Burada sahələrin boş olub-olmamasını yoxlaya bilərsiniz
                if (empty($image) || empty($name) || empty($model) || empty($price) || empty($status)) {
                    echo "<p style='color:red;'>Bütün sahələri doldurun!</p>";
                } else {
                    // Məlumatları verilənlər bazasında yeniləyirik
                    Car::update($id, $image, $name, $model, $price, $status);
                    echo "<p style='color:green;'>Avtomobil məlumatları uğurla yeniləndi.</p>";
                }
            } 
            // else {
            //     echo "<p style='color:red;'>Formda səhv var. Bütün məlumatları düzgün göndərin.</p>";
            // }
        }

        // Admin görünüşünü yükləyirik
        require_once Helper::getAdminViewFile("editcar");
    }
}
