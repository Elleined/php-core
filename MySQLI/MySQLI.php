<?
require "./MySQLConnection.php";
$conn = getConnection();

require "./ddl/CreateTable.php";
require "./ddl/DropTable.php";
require "./ddl/CreateTable.php";

require "./dml/Insert.php";
require "./dql/Select.php";

require "./dml/Update.php";
require "./dql/Select.php";

require "./dml/Delete.php";
require "./dql/Select.php";
?>