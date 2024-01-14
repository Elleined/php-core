<?
echo "===== Filtered person array by age less than 20 ===== <br>";
$filteredPersons = array_filter($persons, fn($person) => $person -> getAge() <= 20);
display($filteredPersons);
echo "<hr>";
?>