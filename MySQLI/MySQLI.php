<?
require "./MySQLConnection.php";
$conn = getConnection();

require "./ddl/CreateTable.php";
require "./ddl/DropTable.php";
require "./ddl/CreateTable.php";

require "./dml/Insert.php";
require "./dql/Select.php";
require "./dml/Update.php";
require "./dml/Delete.php";

insert($conn, "Denielle", 21);
read($conn);

update($conn, 1, "New name", 99);
read($conn);

deleteRecord($conn, 1);
read($conn);
?>