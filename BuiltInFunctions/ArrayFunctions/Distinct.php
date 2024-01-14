<?
echo "===== Remove duplicate (Distince/Unique) values in array ===== <br>";
array_push($persons, new Person("Kiyan", 25));
echo "Added duplicate person with name of Kiyan and age of 25 <br>";
display($persons);

echo "== The newly added person should be removed after applying array_unique <br>";

$uniquePersons = array_unique($persons, SORT_REGULAR);
display($uniquePersons);
echo "<hr>";
?>