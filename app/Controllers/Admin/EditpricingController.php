<?php

namespace App\Controllers\Admin;

use Core\Helper;
use App\Model\Pricing;

class EditpricingController
{

    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            // Yalnız form göndərildikdə məlumatları götürmək
            if (isset($_POST['id'], $_POST['image'], $_POST['name'], $_POST['perhour_price'], $_POST['perday_price'], $_POST['permonth_price'])) {

                $id = $_POST['id'];            // Avtomobilin ID-sini alırıq
                $image = $_POST['image'];      // Şəkil (URL və ya yol)
                $name = $_POST['name'];        // Avtomobilin adı
                $perhour_price = $_POST['perhour_price'];      // Avtomobilin modeli
                $perday_price = $_POST['perday_price'];      // Avtomobilin qiyməti
                $permonth_price = $_POST['permonth_price'];    

                // Burada sahələrin boş olub-olmamasını yoxlaya bilərsiniz
                if (empty($image) || empty($name) || empty($perhour_price) || empty($perday_price) || empty($permonth_price)) {
                    echo "<p style='color:red;'>Bütün sahələri doldurun!</p>";
                } else {
                    // Məlumatları verilənlər bazasında yeniləyirik
                    Pricing::update($id,$image,$name,$perhour_price, $perday_price, $permonth_price);
                    echo "<p style='color:green;'>Blog məlumatları uğurla yeniləndi.</p>";
                }
            } 
            // else {
            //     echo "<p style='color:red;'>Formda səhv var. Bütün məlumatları düzgün göndərin.</p>";
            // }
        }

        // Admin görünüşünü yükləyirik
        require_once Helper::getAdminViewFile("editpricing");
    }
}
