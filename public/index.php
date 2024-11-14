<?php

declare(strict_types=1);

session_start();

require_once "../vendor/autoload.php";

use App\Controllers\Admin\BlogcreateController;
use App\Controllers\Admin\BlogupdateController;
use App\Controllers\Admin\DashboardController;
use App\Controllers\Admin\CarcreateController;
use App\Controllers\Admin\CarupdateController;
use App\Controllers\Admin\EditblogController;
use App\Controllers\Admin\EditcarController;
use App\Controllers\Admin\EditpricingController;
use App\Controllers\Admin\PricingcreateController;
use App\Controllers\Admin\PricingupdateController;
use App\Controllers\Admin\UserContactController;
use App\Controllers\Admin\UsertableController;
use App\Controllers\AutoController;
use App\Controllers\Front\AboutController;
use App\Controllers\Front\BlogController;
use App\Controllers\Front\CarController;
use App\Controllers\Front\ContactController;
use Core\Database;
use App\Model\User;
use App\Model\Car;




$config = require_once "../config/config.php";


$db = new Database($config['db']);

// $user = User::create("Gulaya", "gulaya@gmail.com", "700676097");
// $user = User::create("Kenan", "kenan@gmail.com", "232536");

// $user = User::update(5,"Gulaya", "Gulaya22@gmail.com", "346736434");

// $user = User::delete(1);

// $user = User::getUserById(6);

// $users = User::getAllUsers();

// var_dump($user);
// echo "<pre>";
// print_r($users);


// $car = Car::create("Kia330", "Kia", 2022, 3400.22, 'available');
// var_dump($car);

// $car = Car::update(21,"kia33", "Kia", 2025, 3000.44, "available");

// $car = Car::delete(20);

// $car = Car::getCarById(22);

// $car = Car::getAllCars();

// echo "<pre>";
// print_r($car);

// var_dump($car);


// echo "Hi";

use App\Controllers\Front\HomeController;
use App\Controllers\Front\PricingController;
use App\Controllers\Front\ReservationController;
use App\Controllers\Front\ServicesController;
use App\Controllers\Front\UserController;

$request = $_SERVER['REQUEST_URI'];

// echo "<pre>";
// print_r($request);


// $cars = Car::getCarinformation();


switch ($request) {
    case '/':
        $controller = new HomeController();
        $controller->index();
        break;

    case '/about':
        $controller = new AboutController();
        $controller->index();
        break;
    case '/services':
        $controller = new ServicesController();
        $controller->index();
        break;

    case '/pricing':
        $controller = new PricingController();
        $controller->index();
        break;

    case '/car':
        $controller = new CarController();
        $controller->index();
        break;
    case '/blog':
        $controller = new BlogController();
        $controller->index();
        break;
    case '/contact':
        $controller = new ContactController();
        $controller->index();
        break;
    case '/register':
        $controller = new AutoController();
        $controller->Register();
        break;
    case '/login':
        $controller = new AutoController();
        $controller->login();
        break;

    case '/profile':
        $controller = new UserController();
        $controller->profile();
        break;
    case '/logout':
        $controller = new AutoController();
        $controller->logout();
        break;

    case '/admin':
        $controller = new DashboardController();
        $controller->index();
        break;
    case '/carcreate':
        $controller = new CarcreateController();
        $controller->index();
        break;
    case '/carupdate':
        $controller = new CarupdateController();
        $controller->index();
        break;
    case '/editcar':
        $controller = new EditcarController();
        $controller->index();
        break;

    case '/blogcreate':
        $controller = new BlogcreateController();
        $controller->index();
        break;

    case '/blogupdate':
        $controller = new BlogupdateController();
        $controller->index();
        break;
    case '/editblog':
        $controller = new EditblogController();
        $controller->index();
        break;

    case '/pricingcreate':
        $controller = new PricingcreateController();
        $controller->index();
        break;
    case '/pricingupdate':
        $controller = new PricingupdateController();
        $controller->index();
        break;
    case '/editpricing':
        $controller = new EditpricingController();
        $controller->index();
        break;
    case '/reservation':
        $controller = new ReservationController();
        $controller->index();
        break;

    case '/usercontact':
        $controller = new UserContactController();
        $controller->index();
        break;

    case '/usertable':
        $controller = new UsertableController();
        $controller->index();
        break;
    default:
        echo "404 Not Found";
}
