<?
function deleteRecord(mysqli $conn, int $id): void {
    $query = "DELETE FROM my_first_table WHERE id = ?";
    $stmt = $conn -> prepare($query);

    $stmt -> bind_param("i", $id);

    $stmt -> execute();

    echo "Deleting record with id of $id success";
    echo "<hr>";
}
?>