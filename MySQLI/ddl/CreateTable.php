<?
$query = <<<ANYTHING
CREATE TABLE IF NOT EXISTS my_first_table(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    age INT NOT NULL
);
ANYTHING; 

if (mysqli_query($conn, $query)) {
    echo "Table created successfully!";
    return;
}

mysqli_error($conn);

?>