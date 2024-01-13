<?
echo "===== PHP is Call by Value by default and can behave Call by Reference using & symbol =====<br>";

$num1 = 10;
echo "num1 variable value: $num1 <br>";

function myFunction(int &$num1) : void {
    $num1 = 20;
    echo "num1 variable after being reassigned inside function: $num1 <br>";
}

myFunction($num1);
echo "num1 variable after being reassigned inside the function call: $num1 <br>";
?>