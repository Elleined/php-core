<?
echo "===== CSV to Array ===== <br>";
$csv = "Mango, Apple, Orange";
echo "CSV file content: '$csv' <br>";

$fruits = str_getcsv($csv);
echo "After using str_getcsv to convert csv into array: ";
foreach ($fruits as $fruit) {
    echo $fruit;
}
echo "<hr>";
?>