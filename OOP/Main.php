<?
require_once "./Car/DrivableInterface.php";
require_once "./Traits/GotoTrait.php";
require_once "./Car/AbstractCar.php";
require_once "./Car/ElectricCar.php";
require_once "./Enumerations/CarModel.php";
require_once "./Car/ManualCar.php";

$electricCar = new ElectricCar(CarModel::BMW, "Black", 1000, 90);
echo $electricCar -> __toString();
$electricCar -> drive();
$electricCar -> goTo("Mars");
$electricCar -> charge();

echo "<hr>";

$manualCar = new ManualCar(CarModel::HONDA, "Red", 85, 70);
echo $manualCar -> __toString();
$manualCar -> drive();
$manualCar -> goTo("Jupiter");
$manualCar -> refuel();
?>