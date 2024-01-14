<a href="https://www.php.net/manual/en/function.usort.php">Array functions PHP Documentation</a>
<?
require "../../Model/PersonClass.php";
require "./PersonPrinter.php";

$denielle = new Person("Denielle", 21);
$ruben = new Person("Ruben", 19);
$kiyan = new Person("Kiyan", 25);

$persons = array($kiyan, $denielle, $ruben);
echo "<br>===== Original person array ===== <br>";
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
require "./UserDefinedSort.php";

?>
