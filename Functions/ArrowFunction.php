<?
    $unnamedFunction = fn(int | float $i): int | float => $i + 100;
    echo $unnamedFunction(500);
    echo $unnamedFunction(600);
?>
