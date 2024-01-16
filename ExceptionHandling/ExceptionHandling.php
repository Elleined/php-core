<?
echo "Exception handling in php works exactly similarly just like java and javascript exception handling. <br>";

echo "<br> Here in our example we cannot divide number by zero. <br>";
echo "divide(89, 0) will throw DivisionByZeroError error. <br>";
echo "<hr>";

tryCatch();
echo "<hr>";
tryCatchFinally();

function tryCatch(): void {
    echo "Using try catch only. <br>";
    try {
        echo divide(89, 0);
    } catch(DivisionByZeroError $e) {
        echo "Error message in tryCatch: " . $e -> getMessage() . "<br>";
    }
    echo "// rest of the code will be executed. <br>";
}

function tryCatchFinally() {
    echo "Using try catch with finally. <br>";
    try {
        echo divide(89, 0);
    } catch(DivisionByZeroError $e) {
        echo "Error message in tryCatchFinally: " . $e -> getMessage() . "<br>";
    } finally {
        echo "Finally block executed. <br>";
    }

    echo "// rest of the code will be executed. <br>";
}

function divide($num1, $num2) {
    return $num1 / $num2;
}
?>