<?

$query = "DROP TABLE my_first_table";
if (mysqli_query($conn, $query)) {
    echo "Drop table executed successfully! <br>";
    echo "<hr>";
    return;
}

mysqli_error($conn);
?>