<?php
$file = "words.txt";
$lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$counts = array_count_values($lines);

echo "<table style='border-collapse: collapse;'>";
echo "<tr><th style='border: 1px solid black; text-align: center;'>Строка</th><th style='border: 1px solid black; text-align: center;'>Количество повторений</th></tr>";
foreach ($counts as $line => $count) {
    echo "<tr><td style='border: 1px solid black; text-align: center;'>$line</td><td style='border: 1px solid black; text-align: center;'>$count</td></tr>";
}
echo "</table>";
?>
