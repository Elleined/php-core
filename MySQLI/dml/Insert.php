<?
function insert($conn, $name, $age): void {
    $stmt = $conn -> prepare("INSERT INTO my_first_table(name, age) VALUES (?, ?)");

    $stmt -> bind_param("si", $name, $age);

    $resultSet = $stmt -> execute();
    echo "Inserting new record with name of: $name, and age of: $age success<br>";
    echo "<hr>";
}
?>