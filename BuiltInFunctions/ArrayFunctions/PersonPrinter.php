<?
function display($persons) {
    foreach ($persons as $person) {
        $name = $person -> getName();
        $age = $person -> getAge();
        echo "Person name: $name age: $age <br>";
    }
}
?>