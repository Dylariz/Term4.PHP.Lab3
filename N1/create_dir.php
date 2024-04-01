<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dirName = $_POST['dirName'];
    if (!file_exists($dirName)) {
        mkdir($dirName, 0777, true);
        echo "Директория '$dirName' успешно создана";
    } else {
        echo "Директория '$dirName' уже существует";
    }
}
?>

<form method="post">
    <input type="text" name="dirName" required>
    <input type="submit" value="Создать директорию">
</form>
