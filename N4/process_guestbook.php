<?php
$file = 'guestbook.txt';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $message = $_POST['message'];
    $time = date('Y-m-d H:i:s');
    $entry = "$name\t$time\t$message\n";
    file_put_contents($file, $entry, FILE_APPEND);
}

$entries = file($file, FILE_IGNORE_NEW_LINES);
echo "<table style='border-collapse: collapse; width: 100%;'>";
echo "<tr><th style='border: 1px solid black; text-align: center;'>Строка</th><th style='border: 1px solid black; text-align: center;'>Время записи</th>" . 
"<th style='border: 1px solid black; text-align: center;'>Запись</th></tr>";
foreach ($entries as $entry) {
    list($name, $time, $message) = explode("\t", $entry);
    echo "<tr><td style='border: 1px solid black; text-align: center; word-wrap: break-word; max-width: 200px;'>" . 
    "$name</td><td style='border: 1px solid black; text-align: center; word-wrap: break-word; max-width: 200px;'>" . 
    "$time</td><td style='border: 1px solid black; text-align: center; word-wrap: break-word; max-width: 200px;'>$message</td></tr>";
}
echo "</table>";
echo '<a href="guestbook.html" style="text-decoration: none;"><button style=\'margin-top: 10px\'>Назад</button></a>';
?>
