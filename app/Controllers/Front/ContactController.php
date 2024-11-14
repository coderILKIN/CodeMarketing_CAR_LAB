<?php 

namespace App\Controllers\Front;

use App\Model\Contact;
use Core\Helper;

class ContactController{


    public function index() : void {


        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = isset($_POST['name']) ? $_POST['name'] : null;
            $email = isset($_POST['email']) ? $_POST['email'] : null;
            $subject = isset($_POST['subject']) ? $_POST['subject'] : null;
            $message = isset($_POST['message']) ? $_POST['message'] : null;
    
            if ($name && $email && $message) {
                // Məlumatları bazaya yaz
                Contact::create($name, $email, $subject, $message);
    
                // Yönləndirmə
                header("Location: /contact"); // `/contact` ilə əlaqə səhifənizin URL-ni əvəz edin
                exit();
            } else {
                echo "Bütün tələb olunan sahələri doldurun.";
            }
        }

        require_once Helper::getViewFile("contact");
        
    }



}


?>