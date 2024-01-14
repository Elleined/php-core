<?
echo "===== empty Function ===== <br>";
echo "Empty function returns true if supplied variable is not declared, null, false, and \" \" <br>";
$isNotDeclared = empty($notDeclaredVariable) ? "true" : "false";
echo "Is supplied variable not declared: $isNotDeclared <br>";

$isNull = empty(null) ? "true" : "false";
echo "Is supplied variable null: $isNull <br>";

$isFalse = empty(false) ? "true" : "false";
echo "Is supplied variable is false: $isFalse <br>";

$isBlank = empty("") ? "true" : "false";
echo "Is supplied variable is blank: $isBlank <br>";
?>