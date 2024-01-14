<?
require "../../Model/PersonClass.php";
require "./PersonPrinter.php";

$denielle = new Person("Denielle", 21);
$ruben = new Person("Ruben", 19);
$kiyan = new Person("Kiyan", 25);

$persons = array($denielle, $ruben, $kiyan);
echo "===== Original person array ===== <br>";
display($persons);
echo "<hr>";

require "./Count.php";
require "./Distinct.php";
require "./Fill.php";
require "./FIlter.php";
require "./IsExists.php";
require "./Map.php";
require "./Merge.php";
require "./Pop.php";
require "./Push.php";
require "./Shuffle.php";
require "./Sort.php";
?>