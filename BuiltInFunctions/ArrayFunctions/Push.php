<?
echo "===== Push(Add to the end of array) ===== <br>";
echo "Original persons array <br>";
display($persons);

echo "== After adding a new person in persons array <br>";
array_push($persons, new Person("Juni", 25));
display($persons);

echo "<hr>";
?>