<?
echo "===== In Array (isExists) ===== <br>";
$result = in_array(new Person("Kiyan", 25), $persons) ? "true" : "false";
echo "Is Person named Kiyan and Age of 25 in array: $result";
echo "<hr>";
?>