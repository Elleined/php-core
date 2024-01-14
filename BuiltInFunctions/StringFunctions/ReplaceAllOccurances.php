<?
echo "===== Replace all occurances ===== <br>";
$needle = "This is";
$haystack = <<<'EOD'
    This is Mar <br>
    This is Mar <br>
    This is Mar <br>
    This is Mar <br>
EOD;

echo "Paragraph before replacing all '$needle' word in: <br> $haystack <br>";

$replacement = "Denielle";
$modifiedHaystack = str_replace($needle, $replacement, $haystack);
echo "After replacing all '$needle' in: <br> $modifiedHaystack <hr>";
?>