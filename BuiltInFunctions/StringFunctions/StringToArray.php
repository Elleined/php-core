<?
echo "===== Split (String to array) ===== <br>";
echo "Name before splitting: " . name . "<br>";

$nameArray = str_split(name);
echo "Name after splitting and now converted into array: ";
foreach($nameArray as $val) {
    echo "$val ";
}

echo "<hr>";
?>