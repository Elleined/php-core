<?
echo "=====================<br>";
echo "ARITHMETIC OPERATORS <br>";
echo "=====================<br> <hr>";

echo "===== ADDITION OPERATOR ===== <br>";
$sum = add(1, 3);
echo "$sum <hr>";

echo "===== SUBSTRACTION OPERATOR ===== <br>";
$difference = subtract(1, 3);
echo "$difference <hr>";

echo "===== MULTIPLICATION OPERATOR ===== <br>";
$product = multiply(1, 3);
echo "$product <hr>";

echo "===== DIVISION OPERATOR ===== <br>";
$quotient = divide(1, 3);
echo "$quotient <hr>";

function add($num1, $num2) {
    return $num1 + $num2;
}

function subtract($num1, $num2) {
    return $num1 - $num2;
}

function multiply($num1, $num2) {
    return $num1 * $num2;
}

function divide($num1, $num2) {
    return $num1 / $num2;
}

function modulo($num1, $num2) {
    return $num1 % $num2;
}

function exponentiation($num1, $num2) {
    return $num1 ** $num2;
}
?>