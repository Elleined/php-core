<?
echo "===== Uppercase every first letter in paragraph ===== <br>";
$haystack = <<<'EOD'
    This is mar <br>
    This is mar <br>
    This is mar <br>
    This is mar <br>
EOD;

echo "Paragraph before uppercasing every word: <br> $haystack <br>";
echo "Paragraph after uppercasing every word: <br>" . ucwords($haystack) . "<hr>"; 
?> 