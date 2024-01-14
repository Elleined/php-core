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

require "./Map.php";
require "./FIlter.php";

// fill
// shuffle
// replace
// count
// in_array
// sort
// array_merge: Merges two or more arrays.
// array_pop: Pops the element off the end of an array.
// array_push: Pushes one or more elements onto the end of an array.
// array_reverse: Returns an array with elements in the reverse order.
// array_sum: Calculates the sum of values in an array.
// array_unique: Removes duplicate values from an array.

?>