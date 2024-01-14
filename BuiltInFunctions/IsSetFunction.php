<?
echo "===== isset Function ===== <br>";
echo "isset function returns true if supplied variable is declared and not null. <br>";

$someVariable = "someValue";
$isset = isset($someVariable) ? "true" : "false";

echo "Is supplied variable is declared and not null: $isset <br>";
?>