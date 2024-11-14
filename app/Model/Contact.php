<?php

namespace App\Model;



class Contact
{



    public static function getContactById($id)
    {
        global $db;
        $SQL = "SELECT * FROM contacts WHERE id = ?";

        $stmt = $db->getConnectionInstance()->prepare($SQL);
        $stmt->execute([$id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public static function create($name,$email,$subject, $message)
    {
        global $db;

        $SQL = "INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)";
        $stmt = $db->getConnectionInstance()->prepare($SQL);
        return $stmt->execute([$name,$email,$subject, $message]);
    }


    // public static function update($id,$name,$email,$subject, $message)
    // {

    //     global $db;

    //     $SQL = "UPDATE contacts SET name = ?, email = ?, subject = ?, message = ? WHERE id = ?";

    //     $stmt = $db->getConnectionInstance()->prepare($SQL);
    //     return $stmt->execute([$name,$email,$subject, $message, $id]);
    // }

    public static function delete($id)
    {

        global $db;

        $SQL = "DELETE FROM contacts WHERE id = ?";

        $stmt = $db->getConnectionInstance()->prepare($SQL);
        return $stmt->execute([$id]);
    }


    public static function getAllContacts()
    {

        global $db;
        $SQL = "SELECT * FROM contacts";
        $stmt = $db->getConnectionInstance()->prepare($SQL);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }



}
