<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab4</title>
</head>
<body>
Tест 1:
<?php
echo "Hello, World!</br>";
?>

Тест 2:
<?php
echo 2 + 2;
echo '<hr>Data from file!</br>';

$fop = fopen("file.txt", "r+");

if ($fop) {
    $mytextOld = (int) fgets($fop);
    $mytextNew = $mytextOld + 1;
    fclose($fop);

    $fwr = fopen("file.txt", "w");
    fwrite($fwr, $mytextNew);
    fclose($fwr);

    $fop1 = fopen("file.txt", "r+");
    $mytext = (int) fgets($fop1);
    fclose($fop1);
    echo " This file was opened <b>" . $mytext . "</b> times <br />";
} else echo "Ошибка при открытии файла";

?>
<br>

</body>
</html>