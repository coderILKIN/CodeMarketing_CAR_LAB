<?php

namespace App\Model;



class Reservation
{

    public static function createReservation($user_id, $car_id, $rental_date, $return_date, $duration_type)
    {
        global $db;

        // Müddətin tipinə görə uyğun qiyməti almaq üçün bir SQL sorğusu
        $priceQuery = "SELECT perhour_price, perday_price, permonth_price FROM pricings WHERE id = ?";
        $stmt = $db->getConnectionInstance()->prepare($priceQuery);
        $stmt->execute([$car_id]);
        $price = $stmt->fetch();

        if (!$price) {
            throw new \Exception("Car pricing not found.");
        }

        // Müddəti hesablamaq
        $startDate = new \DateTime($rental_date);
        $endDate = new \DateTime($return_date);
        $interval = $startDate->diff($endDate);

        // Ümumi qiymətin hesablanması
        switch ($duration_type) {
            case 'hourly':
                $total_price = ($interval->days * 24 + $interval->h) * $price['perhour_price'];
                break;
            case 'daily':
                $total_price = $interval->days * $price['perday_price'];
                break;
            case 'monthly':
                $total_price = ceil($interval->days / 30) * $price['permonth_price'];
                break;
            default:
                throw new \Exception("Invalid duration type.");
        }

        // Rezervasiya məlumatını bazaya əlavə etmək
        $insertQuery = "INSERT INTO reservations (user_id, car_id, rental_date, return_date, total_price, status) VALUES (?, ?, ?, ?, ?, 'active')";
        $insertStmt = $db->getConnectionInstance()->prepare($insertQuery);
        $insertStmt->execute([$user_id, $car_id, $rental_date, $return_date, $total_price]);

        return $db->getConnectionInstance()->lastInsertId();
    }
}
