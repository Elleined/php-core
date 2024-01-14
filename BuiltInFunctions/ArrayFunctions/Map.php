<?
echo "===== Mapped person array by name ===== <br>";
$personNames = array_map(fn($person) => $person -> getName(), $persons);
foreach ($personNames as $personName) {
    echo "$personName <br>";
}
echo "<hr>";
?>