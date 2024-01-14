<?
echo "===== Merge arrays ===== <br>";
$tom = new Person("Tom", 35);
$evelyn = new Person("Evelyn", 30);
echo "Another persons to be merge in persons array <br>";
$anotherPersons = array($tom, $evelyn);
display($anotherPersons);

echo "== After merging persons array and another persons array <br>";
$mergedPersons = array_merge($persons, $anotherPersons);
display($mergedPersons);

echo "<hr>";
?>