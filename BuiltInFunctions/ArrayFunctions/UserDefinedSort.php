<?

echo "===== User define sort by age in persons array ===== <br>";
echo "Original persons array <br>";
display($persons);

echo "== After applying the defined sorting algorithm by age in persons array <br>";
usort($persons, fn ($t, $s) => $t -> getAge() - $s -> getAge());
display($persons);
echo "<hr>";
?>