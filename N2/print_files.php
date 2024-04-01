<?php
$file_names = ['file1.txt', 'file2.txt', 'file3.txt'];
$string_count = count(file($file_names[0]));
$files = [];
foreach ($file_names as $file_name) {
    $files[] = new SplFileObject($file_name);
}

for ($i = 0; $i < $string_count; $i++) {
    for ($j = 0; $j < count($files); $j++) {
        echo $files[$j]->current() . '<br>';
        $files[$j]->next();
    }
}
?>
