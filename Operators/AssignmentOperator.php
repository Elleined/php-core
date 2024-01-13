<?
require "./Operations.php";
const SOME_NUMBER = 5;

echo "=====================<br>";
echo "ASSIGNMENT OPERATORS <br>";
echo "=====================<br> <hr>";

echo "===== ASSIGN OPERATOR ===== <br>";
$myVariable = "myVariableValue";
echo "myVariable has value assign using '=' which is:  '$myVariable' <hr>";

echo "===== ADD THEN ASSIGN OPERATOR ===== <br>";
$sum = add(1, 3);
echo "Initial sum variable value: $sum <br>";
$sum += SOME_NUMBER;
echo "After adding " . SOME_NUMBER . " to sum variable and re-assigning it: $sum";
echo "<hr>";

echo "===== SUBTRACT THEN ASSIGN OPERATOR ===== <br>";
$difference = subtract(100, 5);
echo "Initial difference variable value: $difference <br>";
$difference -= SOME_NUMBER;
echo "After substracting " . SOME_NUMBER . " to difference variable and re-assigning it: $difference";
echo "<hr>";

echo "===== MULTIPLY THEN ASSIGN OPERATOR ===== <br>";
$product = multiply(100, 5);
echo "Initial product variable value: $product <br>";
$product *= SOME_NUMBER;
echo "After multiplying " . SOME_NUMBER . " to product variable and re-assigning it: $product";
echo "<hr>";

echo "===== DIVIDE THEN ASSIGN OPERATOR ===== <br>";
$quotient = divide(100, 5);
echo "Initial quotient variable value: $quotient <br>";
$quotient /= SOME_NUMBER;
echo "After dividing " . SOME_NUMBER . " to quotient variable and re-assigning it: $quotient";
echo "<hr>";

echo "===== MODULO THEN ASSIGN OPERATOR ===== <br>";
$modulo = modulo(100, 5);
echo "Initial modulo variable value: $modulo <br>";
$modulo %= SOME_NUMBER;
echo "After modulo " . SOME_NUMBER . " to modulo variable and re-assigning it: $modulo";
echo "<hr>";
?>