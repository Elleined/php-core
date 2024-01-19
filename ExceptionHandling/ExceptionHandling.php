<?
require_once "./CustomException.php";

echo "Exception handling in php works exactly similarly just like java and javascript exception handling. <br> <hr>";

echo "<br> Here in our example we cannot divide number by zero. <br>";
echo "divide(89, 0) will throw DivisionByZeroError error. <br>";
echo "<hr>";

tryCatch();
tryCatchFinally();

set_exception_handler("exceptionHandler");
throw new CustomException("Custom exception thrown then catched by global exception handler.");
function exceptionHandler(Throwable $throwable): void {
    echo $throwable -> getMessage();
}


function tryCatch(): void {
    echo "Using try catch only. <br>";
    try {
        echo divide(89, 0);
    } catch(DivisionByZeroError $e) {
        echo "Catching DivisionByZeroError: " . $e -> getMessage() . "<br>";
    }
    echo "// rest of the code will be executed. <br><hr>";
}

function tryCatchFinally() {
    echo "Using try catch with finally. <br>";
    try {
        echo divide(89, 0);
    } catch(DivisionByZeroError $e) {
        echo "Catching DivisionByZeroError: " . $e -> getMessage() . "<br>";
    } finally {
        echo "Finally block executed. <br>";
    }

    echo "// rest of the code will be executed. <br><hr>";
}

function divide($num1, $num2) {
    return $num1 / $num2;
}
?>