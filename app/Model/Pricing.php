<?php


namespace App\Model;



class Pricing{

    public static function getPricingById($id)
    {
        global $db;
        $SQL = "SELECT * FROM pricings WHERE id = ?";

        $stmt = $db->getConnectionInstance()->prepare($SQL);
        $stmt->execute([$id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public static function create($image,$name,$perhour_price, $perday_price, $permonth_price)
    {
        global $db;

        $SQL = "INSERT INTO pricings (image, name, perhour_price, perday_price, permonth_price) VALUES (?, ?, ?, ?, ?)";
        $stmt = $db->getConnectionInstance()->prepare($SQL);
        return $stmt->execute([$image,$name,$perhour_price, $perday_price, $permonth_price]);
    }


    public static function update($id,$image,$name,$perhour_price, $perday_price, $permonth_price)
    {

        global $db;

        $SQL = "UPDATE pricings SET image = ?, name = ?, perhour_price = ?, perday_price = ?, permonth_price = ? WHERE id = ?";

        $stmt = $db->getConnectionInstance()->prepare($SQL);
        return $stmt->execute([$image,$name,$perhour_price, $perday_price, $permonth_price, $id]);
    }

    public static function delete($id)
    {

        global $db;

        $SQL = "DELETE FROM pricings WHERE id = ?";

        $stmt = $db->getConnectionInstance()->prepare($SQL);
        return $stmt->execute([$id]);
    }


    public static function getAllPricing()
    {

        global $db;
        $SQL = "SELECT * FROM pricings";
        $stmt = $db->getConnectionInstance()->prepare($SQL);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }




}




?>