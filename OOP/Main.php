<?
require "./Car/DrivableInterface.php";
require "./Car/AbstractCar.php";
require "./Car/ElectricCar.php";

$car = new ElectricCar("BMW", "Black", 1000, "90");
echo $car -> __toString();
$car -> drive();
$car -> goTo("Mars");
$car -> charge();
?>