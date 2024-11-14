<?php

namespace App\Controllers\Front;

use App\Model\Reservation;
use Core\Helper;

class ReservationController {

    public function index() {
        if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['user_id'], $_POST['car_id'], $_POST['rental_date'], $_POST['return_date'], $_POST['duration_type'])) {
            // Formdan göndərilən məlumatları alırıq
            $user_id = $_POST['user_id'];
            $car_id = $_POST['car_id'];
            $rental_date = $_POST['rental_date'];
            $return_date = $_POST['return_date'];
            $duration_type = $_POST['duration_type'];

            // Sahələrin boş olub-olmamasını yoxlayırıq
            if (empty($user_id) || empty($car_id) || empty($rental_date) || empty($return_date) || empty($duration_type)) {
                $message = "<p style='color:red;'>Bütün sahələri doldurun!</p>";
            } else {
                // Rezervasiya yaratmaq üçün məlumatları Reservation::createReservation metoduna ötürürük
                $created = Reservation::createReservation($user_id, $car_id, $rental_date, $return_date, $duration_type);
                
                if ($created) {
                    $message = "<p style='color:green;'>Rezervasiya uğurla yaradıldı.</p>";
                } else {
                    $message = "<p style='color:red;'>Rezervasiyanı yaratmaq mümkün olmadı. Zəhmət olmasa, yenidən cəhd edin.</p>";
                }
            }
        } 
        // else {
        //     $message = "<p style='color:red;'>Formda səhv var. Bütün məlumatları düzgün göndərin.</p>";
        // }

        // Mesajı görsətmək üçün dəyişəni require_once ilə göndəririk
        require_once Helper::getViewFile("reservation");
        echo $message ?? '';
    }
}

?>
