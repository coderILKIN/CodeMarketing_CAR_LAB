<?php

namespace App\Model;



class Car
{



    public static function getCarById($id)
    {
        global $db;
        $SQL = "SELECT * FROM cars WHERE id = ?";

        $stmt = $db->getConnectionInstance()->prepare($SQL);
        $stmt->execute([$id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public static function create($name,$model, $price, $status,$targetFile)
    {
        global $db;

        $SQL = "INSERT INTO cars (name, model, price, status,targetFile) VALUES (?, ?, ?, ?, ?)";
        $stmt = $db->getConnectionInstance()->prepare($SQL);
        return $stmt->execute([$name,$model, $price, $status,$targetFile]);
    }


    public static function update($id,$name,$model, $price, $status,$targetFile)
    {

        global $db;

        $SQL = "UPDATE cars SET name = ?, model = ?, price = ?, status = ?, targetFile = ? WHERE id = ?";

        $stmt = $db->getConnectionInstance()->prepare($SQL);
        return $stmt->execute([$name,$model, $price, $status,$targetFile, $id]);
    }

    public static function delete($id)
    {

        global $db;

        $SQL = "DELETE FROM cars WHERE id = ?";

        $stmt = $db->getConnectionInstance()->prepare($SQL);
        return $stmt->execute([$id]);
    }


    public static function getAllCars()
    {

        global $db;
        $SQL = "SELECT * FROM cars";
        $stmt = $db->getConnectionInstance()->prepare($SQL);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }



}
