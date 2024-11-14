<?php

namespace App\Model;



class Blog
{



    public static function getBlogById($id)
    {
        global $db;
        $SQL = "SELECT * FROM blogs WHERE id = ?";

        $stmt = $db->getConnectionInstance()->prepare($SQL);
        $stmt->execute([$id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public static function create($title,$paragraph,$image, $published_date)
    {
        global $db;

        $SQL = "INSERT INTO blogs (title, paragraph, image, published_date) VALUES (?, ?, ?, ?)";
        $stmt = $db->getConnectionInstance()->prepare($SQL);
        return $stmt->execute([$title,$paragraph,$image, $published_date]);
    }


    public static function update($id,$title,$paragraph,$image, $published_date)
    {

        global $db;

        $SQL = "UPDATE blogs SET title = ?, paragraph = ?, image = ?, published_date = ? WHERE id = ?";

        $stmt = $db->getConnectionInstance()->prepare($SQL);
        return $stmt->execute([$title,$paragraph,$image, $published_date, $id]);
    }

    public static function delete($id)
    {

        global $db;

        $SQL = "DELETE FROM blogs WHERE id = ?";

        $stmt = $db->getConnectionInstance()->prepare($SQL);
        return $stmt->execute([$id]);
    }


    public static function getAllBlog()
    {

        global $db;
        $SQL = "SELECT * FROM blogs";
        $stmt = $db->getConnectionInstance()->prepare($SQL);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }



}
