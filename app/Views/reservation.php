<?php
// Sessiyanı yalnız lazım olduqda başlatmaq
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// İstifadəçinin sessiya məlumatlarını əldə et
$fulluser = $_SESSION['user'] ?? null;

if($fulluser){
    $userid = $fulluser['id'];
} else{
    echo "Zehmet olmasa login olun";
}


// Car ID göndərilmişsə, onun məlumatını al
if(isset($_POST['edit_btn'])){
    $id = $_POST['edit_id'];
    // echo $id;
}



// Model fayllarını daxil et
include_once __DIR__ . '/../Model/Car.php'; 
include_once __DIR__ . '/../Model/User.php';

use App\Model\Car;
use App\Model\User;

// Avtomobili və istifadəçini əldə et, əgər mövcuddursa
$car = isset($id) ? Car::getCarById($id) : null;
$user = isset($userid) ? User::getUserById($userid) : null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Reservation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

<div class="container">
<form action="" method="POST">
    <input type="hidden" name="user_id" value="<?php echo $user ? htmlspecialchars($user['id']) : ''; ?>">
    <input type="hidden" name="car_id" value="<?php echo $car ? htmlspecialchars($car['id']) : ''; ?>">

    <div class="mb-3">
        <label for="rental_date" class="form-label">Rental Date</label>
        <input type="date" class="form-control" id="rental_date" name="rental_date" required>
    </div>

    <div class="mb-3">
        <label for="return_date" class="form-label">Return Date</label>
        <input type="date" class="form-control" id="return_date" name="return_date" required>
    </div>

    <div class="mb-3">
        <label for="duration_type" class="form-label">Duration Type</label>
        <select class="form-select" id="duration_type" name="duration_type" required>
            <option value="" disabled selected>Select duration type</option>
            <option value="hourly">Hourly</option>
            <option value="daily">Daily</option>
            <option value="monthly">Monthly</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Create Reservation</button>
</form>
</div>


</body>

</html>