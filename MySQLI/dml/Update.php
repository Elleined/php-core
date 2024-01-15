<?
function update($conn, int $id, String $name, int $age): void {
    $query = <<<ANYTHING
        UPDATE 
            my_first_table
        SET 
            name = ?,
            age = ?
        WHERE
            id = ?;
    ANYTHING; 
    $stmt = $conn -> prepare($query);
    $stmt -> bind_param("sii", $name, $age, $id);

    $resultSet = $stmt -> execute();
    echo "Updating with id of $id success!";
    echo "<hr>";
}
?>