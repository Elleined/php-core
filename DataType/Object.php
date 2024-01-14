<?
require "../Model/PersonClass.php";

echo "===== OBJECT ===== <br>";
$myObject = new Person("Denielle", 21);
echo "My object name is: {$myObject->getName()} <br>";
echo "My object age is: {$myObject->getAge()} <br> <hr>";
?>