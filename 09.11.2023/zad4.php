<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad4</title>
</head>
<body>
<h2>for:</h2>
<?php
for ($i = 1; $i <= 10; $i++) {
    $pierwiastek = sqrt($i);
    echo "Liczba: $i, Pierwiastek: $pierwiastek <br>";
}
?>

<h2>while:</h2>
<?php
$i = 1;
while ($i <= 10) {
    $pierwiastek = sqrt($i);
    echo "Liczba: $i, Pierwiastek: $pierwiastek <br>";
    $i++;
}
?>

<h2>do-while:</h2>
<?php
$i = 1;
do {
    $pierwiastek = sqrt($i);
    echo "Liczba: $i, Pierwiastek: $pierwiastek <br>";
    $i++;
} while ($i <= 10);
?>

</body>
</html>







