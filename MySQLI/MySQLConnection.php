<?

function getConnection(): mysqli {
    $host = "localhost";    
    $username = "root";
    $password = "root";
    $database = "php_core_db";
    $port = "3306";
    $conn = mysqli_connect($host, $username, $password, $database, $port) or die("Connection failed! " . $conn -> error);
    return $conn; 
}

function closeConnection(mysqli $conn): void {
    $conn -> close();
}
?>