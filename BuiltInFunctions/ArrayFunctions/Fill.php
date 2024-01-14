<?
echo "===== Filled array ===== <br>";
$startingIndex = 0;
$howMany = 20;
$value = "Filled value";
echo "Starting index to fill is: $startingIndex <br>";
echo "How many times is: $howMany <br>";
echo "Value will be: $value <br>";
$filledArray = array_fill($startingIndex, $howMany, $value);
foreach ($filledArray as $val) {
    echo "$val <br>";
}

echo "<hr>";
?>