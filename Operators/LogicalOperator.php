<?
echo "=====================<br>";
echo "LOGICAL OPERATORS <br>";
echo "=====================<br> <hr>";

$num1 = 10;
$num2 = 5;

$condition1 = $num1 > $num2;
$condition2 = $num1 == 10;

echo "===== AND && =====<br>";
echo "Returns true if all conditions are true, if even one of condition is false returns false <br>";
$result = $condition1 && $condition2 ? "true" : "false";
echo "$num1 is greater than $num2 AND $num1 is equal to 10: $result <hr>";


echo "===== OR || =====<br>";
echo "Returns true if any of the conditions are true, will only return false if all the condition are false <br>";
$result = $condition1 || $condition2 ? "true" : "false";
echo "$num1 is greater than $num2 OR $num1 is equal to 10: $result <hr>";

echo "===== ! =====<br>";
$result = !$condition1 ? "true" : "false";
echo "$num1 is not greater than $num2: $result <br>";
echo "alternatively you can read it as $num1 is less than to $num2 <hr>";
?>