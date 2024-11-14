<?php

namespace App\Controllers\Admin;

use Core\Helper;
use App\Model\Car;

class CarcreateController
{

    public function index(): void
    {

        if($_SERVER['REQUEST_METHOD'] == "POST"){

            if (isset($_FILES['car_image']) && $_FILES['car_image']['error'] === UPLOAD_ERR_OK) {
                $image = $_FILES['car_image'];
                $imageName = basename($image['name']);
                $targetDir = "assets/front/images/";
                $targetFile = $targetDir . $imageName;
        
                if (move_uploaded_file($image['tmp_name'], $targetFile)) {
                    echo "Şəkil uğurla yükləndi.";
                    
                } else {
                    echo "Şəkilin yüklənməsi zamanı xəta baş verdi.";
                }
            } else {
                echo "Şəkil seçilməyib və ya yükləmə zamanı xəta baş verib.";
            }
            $name = $_POST['name'];
            $model = $_POST['model'];
            $price = $_POST['price'];

            $status = $_POST['status'];


            Car::create($name, $model, $price, $status, $targetFile);


        }

        require_once Helper::getAdminViewFile("carcreate");
    }

   
}
