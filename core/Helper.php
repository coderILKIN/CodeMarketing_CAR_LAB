<?php 

namespace Core;


class Helper{


   public static function getViewFile($fileName)
    {
        $filename = '../App/Views/' . $fileName . '.php';
    
        if (file_exists($filename)) {
            return $filename;
        } else {
            echo "File Not Found";
        }
    }

    public static function getAdminViewFile($fileName)
    {
        $filename = '../App/Views/admin/' . $fileName . '.php';
    
        if (file_exists($filename)) {
            return $filename;
        } else {
            echo "File Not Found";
        }
    }
}





?>