<?
echo "===== Implode(Join array with specified string) ===== <br>";
$array = array("D", "E", "N", "I", "E", "L", "L", "E",);
$separator = " | ";
echo "Array before imploding: ";
foreach ($array as $val) {
    echo "$val ";
}
echo "<br>";

$joinedArray = implode($separator, $array);
echo "Array after imploding with $separator as separtor: $joinedArray <hr>";
?>