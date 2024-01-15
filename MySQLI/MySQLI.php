<?
require "./MySQLConnection.php";
$conn = getConnection();

require "./ddl/CreateTable.php";
require "./ddl/DropTable.php";
require "./ddl/CreateTable.php";

require "./dml/Insert.php";
require "./dql/Select.php";

insert($conn, "Denielle", 21);
read($conn);

require "./dml/Update.php";
require "./dml/Delete.php";
?>