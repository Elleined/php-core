<?
echo "=====================<br>";
echo "COMPARISON OPERATORS <br>";
echo "=====================<br> <hr>";

$num1 = 10;
$num2 = 5;

echo "===== EQUAL OPERATOR =====<br>";
$result = $num1 == $num2 ? "true" : "false";
echo "$num1 is equal '==' to $num2: $result <hr>";

echo "===== NOT EQUAL OPERATOR =====<br>";
$result = $num1 != $num2 ? "true" : "false";
echo "$num1 is not equal '!=' to $num2: $result <hr>";

echo "===== IDENTICAL OPERATOR =====<br>";
echo "Return TRUE if $num1 is equal to $num2, and they are of same data type <br>";
$result = $num1 === $num2 ? "true" : "false";
echo "$num1 is identical '===' to $num2: $result <hr>";

echo "===== NOT IDENTICAL OPERATOR =====<br>";
echo "Return TRUE if $num1 is not equal to $num2, and they are not the same data type <br>";
$result = $num1 !== $num2 ? "true" : "false";
echo "$num1 is not identical '!==' to $num2: $result <hr>";

echo "===== LESS THAN OPERATOR =====<br>";
$result = $num1 < $num2 ? "true" : "false";
echo "$num1 is less than '<' to $num2: $result <hr>";

echo "===== LESS THAN OR EQUAL TO OPERATOR =====<br>";
$result = $num1 <= $num2 ? "true" : "false";
echo "$num1 is less than or equal '<=' to $num2: $result <hr>";

echo "===== GREATER THAN OPERATOR =====<br>";
$result = $num1 > $num2 ? "true" : "false";
echo "$num1 is greater than '>' to $num2: $result <hr>";

echo "===== GREATER THAN OR EQUAL TO OPERATOR =====<br>";
$result = $num1 >= $num2 ? "true" : "false";
echo "$num1 is greater than or equal '>=' to $num2: $result <hr>";
?>