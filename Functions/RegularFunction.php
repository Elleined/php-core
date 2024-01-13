<?
// With and without explicit datatype

echo "===== Function =====<br>";
echo highlight_string('<?php ' . PHP_EOL . 'function functionName() {
    // Function behavior code
}' . PHP_EOL . '?>', true);

echo "===== Function with parameters =====<br>";
echo highlight_string('<?php ' . PHP_EOL . 'function functionName($parameter1, $parameter2, ...) {
    // Function behavior code
}' . PHP_EOL . '?>', true);

echo "===== Function with explicit void return type =====<br>";
echo highlight_string('<?php ' . PHP_EOL . 'function functionName(datatype $parameter1, datatype $parameter2, ...): void {
    // Function behavior code
}' . PHP_EOL . '?>', true);

echo "===== Function with explicit return type =====<br>";
echo highlight_string('<?php ' . PHP_EOL . 'function functionName(datatype $parameter1, datatype $parameter2, ...): datatype {
    // Function behavior code
    return datatype;
}' . PHP_EOL . '?>', true);

echo "===== Function with explicit multiple return type =====<br>";
echo highlight_string('<?php ' . PHP_EOL . 'function functionName(datatype $parameter1, datatype $parameter2, ...): datatype1 | datatype2 {
    // Function behavior code
    return datatype1 | datatype2;
}' . PHP_EOL . '?>', true);

?>