<?php
declare(strict_types=1);

require_once __DIR__ . "/Car.php";

$car1 = new Car(FuelType::Electric, "Toyota", "666-EV", 169);
$car2 = new Car(FuelType::FlintStones, "Rock-o-movil", "FLT-0001", 35);

echo $car1 . "<br><br>";
echo $car2 . " " . $car2->boost();  
