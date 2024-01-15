<?
function read($conn): void {
    $query = "SELECT * FROM my_first_table";
    echo "Please wait! Reading all records... <br>";
    $resultSet = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($resultSet)) {
        $id = $row["id"];
        $name = $row["name"];
        $age = $row["age"];

        echo "ID: $id <br>";
        echo "Name: $name <br>";
        echo "Age: $age <br>";
    }
    echo "Reading all records success!";
    echo "<hr>";
}
?>